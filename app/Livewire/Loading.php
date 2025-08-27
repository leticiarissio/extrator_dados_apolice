<?php

namespace App\Livewire;

use Livewire\Component;

class Loading extends Component
{
    public $displayEnviado = '';
    public $texto = '';
    
    protected $listeners = ['loading'];

    public function loading($display, $texto)
    {
        $this->displayEnviado = $display;
        $this->texto = $texto;
    }
    public function render()
    {
        return view('livewire.loading');
    }
}
