<?php

namespace App\Livewire;

use Livewire\Component;

class Results extends Component
{
    public $resultadoRecebido;
    public $erroRecebido;
    protected $listeners = ['resultado'];

    public function resultado($resultado)
    {
        $this->resultadoRecebido = $resultado['resultado'];
        $this->erroRecebido = $resultado['erro'];
    }
    public function render()
    {
        return view('livewire.results');
    }
}
