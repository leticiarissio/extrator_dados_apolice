<?php

namespace App\Livewire;

use Livewire\Component;

class Actions extends Component
{
    public $enable = '';
    
    protected $listeners = ['arquivoSelecionado'];
    
    public function arquivoSelecionado($nomeArquivo)
    {
        $this->enable = true;
    }

    public function extrairDados()
    {    
        // Emite evento
        $this->dispatch('extrairDados', extrairDados: true);
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
