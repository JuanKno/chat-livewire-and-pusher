<?php

namespace App\Http\Livewire;

use App\Events\EnviarMensaje;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InputMessage extends Component
{
    public $user;
    public $message;


    public function mount()
    {
        $this->user = Auth::user()->name;
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.input-message');
    }

    public function enviarMensaje()
    {
        $this->emit("mostrarAlertaMensaje");
        $datos = [
            'user' => $this->user,
            'message' => $this->message,
        ];
        // $this->emit("mostrarMensajes", $datos);
        event(new EnviarMensaje($this->user, $this->message));
        $this->message = "";
    }
}
