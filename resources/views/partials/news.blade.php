@php

$today = date('Y-m-d');

$pastEvents = $news->where('ends_at','<',$today);
$currentEvents = $news->where('ends_at','>=',$today);

@endphp

@if($currentEvents->count() > 0)
    <h1 class="section-title"><span>{{ __('global.news_current') }}</span></h1>
    <div class="row">
        @foreach($currentEvents->sortBy('ends_at') as $item)
            <div class="col-sm-6 col-lg-4">
                @component('components.news-thumbnail', ['news' => $item])
                @endcomponent
            </div>
        @endforeach
    </div>
@endif

@if($pastEvents->count() > 0)
    <h1 class="section-title" style="margin-top: 32px;"><span>{{ __('global.news_past') }}</span></h1>
    <div class="row">
        @foreach($pastEvents as $item)
            <div class="col-sm-6 col-lg-4">
                @component('components.news-thumbnail', ['news' => $item])
                @endcomponent
            </div>
        @endforeach
    </div>
@endif