<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InputMessage extends Component
{
    public $user;
    public $message;


    public function mount()
    {
        $this->user = Auth::user();
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.input-message');
    }

    public function enviarMensaje()
    {
        $this->emit("mensajeEnviado");
    }
}
