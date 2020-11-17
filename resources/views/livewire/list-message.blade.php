<div>

    <div class="px-4 py-5 chat-box bg-white">

        @foreach($messages as $message)
        @if($message['from'] == Auth::user()->name)
        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
            <div class="media-body">
                <div class="bg-primary rounded py-2 px-3 mb-2" title="{{$message['from']}}">
                    <p class="text-small mb-0 text-white">{{ $message['message'] }}</p>
                </div>
                <p class="small text-muted">{{ now()->format('h:m') }} | {{ now()->format('M d')}}</p>
            </div>
        </div>
        @else
        <!-- Sender Message-->
        <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
            <div class="media-body ml-3">
                <div class="bg-light rounded py-2 px-3 mb-2" title="{{ $message['from'] }}">
                    <p class="text-small mb-0 text-muted"> {{ $message['message'] }}</p>
                </div>
                <p class="small text-muted">{{ now()->format('h:m') }} | {{ now()->format('M d')}}</p>
            </div>
        </div>
        @endif

        @endforeach




    </div>
    <script>
        var pusher = new Pusher('cc43e5512fe0561893de', {
            cluster: 'us2'
        });

        var channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event', function(data) {
            // alert(JSON.stringify(data));
            window.livewire.emit('mostrarMensajes', data);
        });
    </script>
</div>
