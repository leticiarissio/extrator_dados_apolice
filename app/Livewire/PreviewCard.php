<?php

namespace App\Livewire;

use Livewire\Component;

class PreviewCard extends Component
{
    public $nomeArquivoRecebido = '';
    
    protected $listeners = ['arquivoSelecionado'];
    
    public function arquivoSelecionado($nomeArquivo)
    {
        $this->nomeArquivoRecebido = $nomeArquivo;
    }

    // Método para limpar o arquivo
    public function removerArquivo()
    {
        $this->nomeArquivoRecebido = '';
    }

    public function render()
    {
        return view('livewire.preview-card');
    }
}
