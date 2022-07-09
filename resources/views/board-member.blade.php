@extends('shared.layout')

@section('content')

@component('components.page-heading', ['page' => $pageBoardMembers])
@endcomponent

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="vcard">
                    @if($boardMember->media)
                        <div class="image-holder">
                            {!! IMG($boardMember->media) !!}
                        </div>
                    @endif
                    @if($boardMember->email || $boardMember->tel || $boardMember->facebook || $boardMember->twitter || $boardMember->instagram || $boardMember->linkedin)
                        <div class="person-informations">
                            <h5>{{ __('global.contact') }}</h5>
                            <ul>
                                @if($boardMember->email)
                                    <li><a href="mailto:{{ $boardMember->email }}" target="_blank">{{ $boardMember->email }}</a></li>
                                @endif
                                @if($boardMember->tel)
                                    <li><a href="tel:{{ $boardMember->tel }}">{{ $boardMember->tel}}</a></li>
                                @endif
                            </ul>
                            <ul class="social-info">
                                @if($boardMember->facebook)
                                    <li><a href="{{ $boardMember->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                @endif
                                @if($boardMember->twitter)
                                    <li><a href="{{ $boardMember->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                @endif
                                @if($boardMember->instagram)
                                    <li><a href="{{ $boardMember->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                @endif
                                @if($boardMember->linkedin)
                                    <li><a href="{{ $boardMember->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-8">
                <span>{{ $boardMember->position }}</span>
                <h3>{{ $boardMember->name }}</h3>
                {!! $boardMember->content !!}
            </div>
        </div>
    </div>
</section>


@endsection