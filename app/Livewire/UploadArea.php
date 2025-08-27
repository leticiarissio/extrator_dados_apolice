<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadArea extends Component
{
    use WithFileUploads;
    public $arquivo;
    public $nomeArquivo = '';

    public function updatedArquivo()
    {
        if ($this->arquivo) {
            $this->nomeArquivo = $this->arquivo->getClientOriginalName();
            
            // Emite evento com o nome do arquivo
            $this->dispatch('arquivoSelecionado', nomeArquivo: $this->nomeArquivo);
        }
    }
    
    public function render()
    {
        return view('livewire.upload-area');
    }
}
