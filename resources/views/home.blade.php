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
    <div class="row rounded-lg overflow-hidden shadow">
        <div class="col-12 px-0">


            @livewire('list-message')

            <!-- Typing area -->
            @livewire('input-message', ['to' => $user])

        </div>
    </div>
</div>


@endsection

@push('scripts')
@endpush
