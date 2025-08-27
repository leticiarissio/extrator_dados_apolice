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

        $response = Http::withHeaders([
            "Content-Type" => "application/json"
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key". env('GEMINI_API_KEY'), [
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
            $texto = "❌ Erro na conexão: " . $response->status();;
            $erro = true;
        }

        return ['resultado' => $texto, 'erro' => $erro];
    }

    public function testarConexao()
    {
        $response = Http::withHeaders([
            "Content-Type" => "application/json"
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=". env('GEMINI_API_KEY'), [
            "contents" => [
                [
                    "parts" => [
                        [
                            "text" => "Responda apenas 'Conexão OK' se você conseguir ler esta mensagem."
                        ]
                        
                    ]
                ]
            ]
        ]);
        
        if($response->successful()){
            $resposta = $response->json()['candidates'][0]['content']['parts'][0]['text'];
            $texto = "✅ Conexão estabelecida com sucesso! Resposta: " . $resposta;
            $erro = false;
        }
        else {
            $texto = "❌ Erro na conexão: " . $response->status();
            $erro = true;
        }

        return ["resultado"=> $texto,"erro"=> $erro];
    }
}
