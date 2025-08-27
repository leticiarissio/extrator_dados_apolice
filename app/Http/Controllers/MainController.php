<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function submit()
    {
        $response = Http::withHeaders([
            "Content-Type" => "application/json"
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=". env('GEMINI_API_KEY'), [
            "contents" => [
                [
                    "parts" => [
                        [
                            "text" => "Explain how AI works in a few words"
                        ]
                        // ,
                        // [
                        //     'file_data' => [
                        //         'mime_type' => 'application/pdf',
                        //         'file_uri' => $fileUri
                        //     ]
                        // ]
                    ]
                ]
            ]
        ]);

        if($response->successful()){
            $text = $response->json()['candidates'][0]['content']['parts'][0]['text'];
        }
        else {
            $text = 'something is wrong';
        }

        // dd($response->json());

        echo $text;
    }
}
