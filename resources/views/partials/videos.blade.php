<div class="row">
    @foreach($videos as $video)
        <div class="col-sm-6 col-lg-4">
            <div class="video-card" data-code="{{ $video->code }}">
                <div class="image-holder">
                    @if($video->media)
                        {!! IMG($video->media,'thumbnail') !!}
                    @endif
                </div>
                <h3>{{ $video->title }}</h3>
            </div>
        </div>
    @endforeach
</div>