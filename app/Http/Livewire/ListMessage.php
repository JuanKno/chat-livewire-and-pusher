<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListMessage extends Component
{
    public $messages;

    protected $listeners = ['mostrarMensajes'];


    public function mount()
    {
        $this->messages = [];
    }


    public function render()
    {
        return view('livewire.list-message');
    }

    public function mostrarMensajes($message)
    {
        $this->messages[] = $message;
    }
}
