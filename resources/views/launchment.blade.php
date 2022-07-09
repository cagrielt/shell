@extends('shared.layout')

@php

$user = session('launchUser');

@endphp

@section('content')

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="video-holder">
                    <iframe src="https://player.vimeo.com/video/535726035" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>

                <form id="launchment-question-form" class="form-async" method="POST" action="{{ route('api.launch-ask') }}">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <h1 class="text-center">Soru Sor</h1>
                    <textarea name="message" class="form-control" rows="3" required></textarea>
                    <div class="row">
                        <div class="col">
                            <p>{{ $user->name }}</p>
                        </div>
                        <div class="col text-right">
                            <button class="btn">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection