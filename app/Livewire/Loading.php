<?php

namespace App\Livewire;

use Livewire\Component;

class Loading extends Component
{
    public $extrairDados = '';
    
    protected $listeners = ['extrairDados'];

    public function extrairDados($extrairDados)
    {
        $this->extrairDados = $extrairDados;
    }
    public function render()
    {
        return view('livewire.loading');
    }
}
