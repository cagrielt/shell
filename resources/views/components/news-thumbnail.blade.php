<article class="article-default">
    <a @if($news->link) href="{{ $news->link }}" target="_blank" @else href="{{ newsUrl($news) }} @endif">
        <div class="image-holder">
            @if($news->media)
                {!! IMG($news->media,'thumbnail') !!}
            @endif
        </div>
        <div class="article-content">
            @if($news->event_date)
                <span class="subtitle"><i class="fa fa-calendar"></i>{{ $news->event_date }}</span>
            @endif
            <h3>{{ $news->title }}</h3>
        </div>
    </a>
</article>