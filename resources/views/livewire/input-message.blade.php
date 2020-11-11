<div>
    <div class="bg-light">
        <small>{{$message}}</small>
        <div class="input-group">
            <input type="text" placeholder="Type a message" wire:model="message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
            <div class="input-group-append">
                <button id="button-addon2" wire:click="enviarMensaje" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
</div>