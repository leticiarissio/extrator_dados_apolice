<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function submit()
    {
        $textPdf = session('texto');
        $caminho = session('caminho');

        $response = Http::withHeaders([
            "Content-Type" => "application/json"
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=". env('GEMINI_API_KEY'), [
            "contents" => [
                [
                    "parts" => [
                        [
                            "text" => "Organize em topicos json os principais dados do pdf e retorne sem comentários" . $textPdf
                        ]
                        
                    ]
                ]
            ]
        ]);

        // limpa session
        session()->forget('texto');
        session()->forget('caminho');
        
        if($response->successful()){
            $texto = $response->json()['candidates'][0]['content']['parts'][0]['text'];
            $erro = false;
        }
        else {
            $texto = 'Algo deu errado :(';
            $erro = true;
        }

        return ['resultado' => $texto, 'erro' => $erro];
    }
}
