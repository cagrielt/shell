@php
if(!isset($type)){
    $type = "image";
}
@endphp
<div class="featured-media" data-type="{{ $type }}">
    @if($media != null)
        @if(Str::contains($media->type,'image'))
            <img src="{{ url('/') }}/uploads/{{ $media->slug }}" />
        @elseif(Str::contains($media->type,'audio') || Str::contains($media->type,'video'))
            <i class="fa fa-play-circle"></i>
            <p>{{ $media->title }}</p>
        @else
            <i class="fa fa-file"></i>
            <p>{{ $media->title }}</p>
        @endif
    @endif
</div>
<button type="button" class="btn btn-block btn-info btn-sm pick-media">Dosya Seç</button>