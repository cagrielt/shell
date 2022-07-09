{{ $medias->links() }}

@foreach($medias as $media)
    <div class="media-item" data-media-id="{{ $media->id }}">
        @if(Str::contains($media->type,'image'))
            @if(Str::contains($media->type,'svg'))
                <img src="{{ url('/').'/uploads/'.$media->slug }}">
            @else
                {!! IMG($media,'library') !!}
            @endif
            <p>{{ $media->title }}</p>
        @elseif(Str::contains($media->type,'audio') || Str::contains($media->type, 'video'))
            <i class="fa fa-play-circle"></i>
            <p class="visible">{{ $media->title }}</p>
        @else
            <i class="fa fa-file"></i>
            <p class="visible">{{ $media->title }}</p>
        @endif
    </div>
@endforeach