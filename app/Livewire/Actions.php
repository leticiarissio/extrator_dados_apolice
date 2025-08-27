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
        $this->dispatch('loading', display: 'block', texto: 'Enviando para Claude AI... (pode demorar até 3 minutos)');
        $this->enable = false;
    }

    public function testarConexao()
    {    
        // Emite evento
        $this->dispatch('loading', display: 'block', texto: 'Testando conexão...');
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
