<?php

namespace App\Livewire;

use App\Http\Controllers\MainController;
use Livewire\Component;

class Actions extends Component
{
    public $enable = '';
    
    protected $listeners = ['arquivoSelecionado'];
    
    public function arquivoSelecionado($nomeArquivo)
    {
        // habilta botão de extrair
        $this->enable = true;
    }

    public function extrairDados()
    {   
        // chama o componente de carregamento 
        $this->loading();
        
        // Chama o controller
        $controller = new MainController();
        $resultado = $controller->submit();

        // Emite evento
        if ($resultado) {
            $this->dispatch('resultado', $resultado);
            $this->dispatch('loading', display: 'none', texto: '');
        }
    }

    private function loading()
    {
        // Emite evento
        $this->dispatch('loading', display: 'block', texto: 'Enviando para Claude AI... (pode demorar até 3 minutos)');

        // desativa botão de extrair
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
