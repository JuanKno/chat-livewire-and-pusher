<?php

namespace App\Http\Livewire;

use App\Events\EnviarMensaje;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InputMessage extends Component
{
    public $from, $message, $to;


    public function mount($to)
    {
        $this->from = Auth::user()->name;
        $this->message = "";
        $this->to = $to->name;
    }

    public function render()
    {
        return view('livewire.input-message');
    }

    public function enviarMensaje()
    {
        $this->emit("mostrarAlertaMensaje");
        $datos = [
            'from' => $this->from,
            'to' => $this->to,
            'message' => $this->message,
        ];
        // $this->emit("mostrarMensajes", $datos);
        event(new EnviarMensaje($this->from, $this->to, $this->message));
        $this->message = "";
    }
}
