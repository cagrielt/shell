@extends('shared.layout')

@section('content')

@component('components.page-heading', ['page' => $page])
@endcomponent

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-detail">
                    {!! $page->content !!}
                </div>
            </div>
            <div class="col-md-6">
                <h3>{{ __('global.contact_title') }}</h3>
                <p>{{ __('global.contact_text') }}</p>
                <form id="contact-form" class="form-async" method="POST" action="{{ route('api.contact') }}">
                    <input name="name" type="text" class="form-control" placeholder="{{ __('global.contact_name') }}" required>
                    <input name="email" type="email" class="form-control" placeholder="{{ __('global.contact_email') }}" required>
                    <input name="company" type="text" class="form-control" placeholder="{{ __('global.contact_company') }}">
                    <input name="tel" type="text" class="form-control" placeholder="{{ __('global.contact_tel') }}">
                    <textarea name="message" class="form-control" rows="4" placeholder="{{ __('global.contact_message') }}" required></textarea>
                    <button id="btn-send" class="btn"><span>{{ __('global.btn_send') }}</span></button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection