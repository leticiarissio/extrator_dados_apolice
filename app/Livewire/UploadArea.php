<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Smalot\PdfParser\Parser;

class UploadArea extends Component
{
    use WithFileUploads;
    public $arquivo;
    public $nomeArquivo = '';

    public function updatedArquivo()
    {
        if ($this->arquivo) {
            // nome do arquivo
            $this->nomeArquivo = $this->arquivo->getClientOriginalName();
            
            // Emite evento com o nome do arquivo
            $this->dispatch('arquivoSelecionado', nomeArquivo: $this->nomeArquivo);

            // Salva o arquivo no servidor
            $caminho = $this->arquivo->store('temp');

            // transforma em texto
            $parser = new Parser();
            $pdf = $parser->parseFile(storage_path('app/private/' . $caminho));
            $textPdf = $pdf->getText();
            
            // Guarda o caminho e conteúdo na sessão
            session(['texto' => $textPdf, 'caminho' => $caminho]);
        }
    }
    
    public function render()
    {
        return view('livewire.upload-area');
    }
}
