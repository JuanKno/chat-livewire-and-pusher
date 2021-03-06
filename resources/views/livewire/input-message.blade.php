<div>
    <div class="bg-light">
        <div class="input-group">
            <input type="text" placeholder="Type a message"  wire:model="message" wire:keydown.enter="enviarMensaje" aria-describedby="button-addon2" autofocus class="form-control rounded-0 border-0 py-4 bg-light">
            <div class="input-group-append">
                <button wire:click="enviarMensaje" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
            </div>
        </div>

        <div id="btn-message" class="alert alert-success alert-dismissible d-none" role="alert">
            El mensaje ha sido enviado
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            window.livewire.on('mostrarAlertaMensaje', function() {
                $('#btn-message').removeClass('d-none');
                setTimeout(() => {
                    $('#btn-message').addClass('d-none');

                }, 3000);
            });
        });
    </script>
</div>
