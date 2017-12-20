@extends('layouts.default')

@section('content')
    <div class="container">
        <h3>{{ $result->title }}</h3>

        <div class="card grey lighten-4">
            <div class="card-content">
                {{ $result->body }}
            </div>
            <div class="card-action">
                @if (\Auth::user() and \Auth::user()->can('update', $result))
                    <a href="/threads/{{ $result->id }}/edit">{{ __('Edit') }}</a>
                @endif
                <a href="/">{{ __('Back') }}</a>
            </div>
        </div>

        <replies
            replied="{{ __('replied') }}"
            reply="{{ __('reply') }}"
            your-answer="{{ __('Your answer') }}"
            send="{{ __('Send') }}"
            thread-id="{{ $result->id }}">
            @include('layouts.default.preloader')
        </replies>
    </div>
@endsection

@section('scripts')
    <script src="/js/replies.js"></script>
@endsection
