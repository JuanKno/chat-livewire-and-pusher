@extends('layouts.app')
@push('styles')
<style>
    body {
        min-height: 100vh;
    }

    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        width: 5px;
        background: #f5f5f5;
    }

    ::-webkit-scrollbar-thumb {
        width: 1em;
        background-color: #ddd;
        outline: 1px solid slategrey;
        border-radius: 1rem;
    }

    .text-small {
        font-size: 0.9rem;
    }

    .messages-box,
    .chat-box {
        height: 510px;
        overflow-y: scroll;
    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    input::placeholder {
        font-size: 0.9rem;
        color: #999;
    }
</style>
@endpush

@section('content')

<div class="container px-4">
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hecho!</strong> Se ha enviado el mensaje
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <div class="row rounded-lg overflow-hidden shadow">
        <div class="col-12 px-0">
            <div class="px-4 py-5 chat-box bg-white">
                <!-- Sender Message-->
                <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                    <div class="media-body ml-3">
                        <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Test which is a new approach all solutions</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>

                <!-- Reciever Message-->
                <div class="media w-50 ml-auto mb-3">
                    <div class="media-body">
                        <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Test which is a new approach to have all solutions</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>

                <!-- Sender Message-->
                <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                    <div class="media-body ml-3">
                        <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>

                <!-- Reciever Message-->
                <div class="media w-50 ml-auto mb-3">
                    <div class="media-body">
                        <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>


                <!-- Sender Message-->
                <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                    <div class="media-body ml-3">
                        <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>

                <!-- Reciever Message-->
                <div class="media w-50 ml-auto mb-3">
                    <div class="media-body">
                        <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                        </div>
                        <p class="small text-muted">12:00 PM | Aug 13</p>
                    </div>
                </div>



            </div>

            <!-- Typing area -->
            @livewire('input-message')

        </div>
    </div>
</div>


@endsection

@push('scripts')
@endpush