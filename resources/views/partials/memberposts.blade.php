@foreach(config('app.memberPostCategories') as $key => $value)
    @php
        $posts = $memberPosts->where('category',$key);
    @endphp

    @if($posts->count() > 0)
        <h1 class="section-title"><span>{{ $value }}</span></h1>

        <div class="row">
            @foreach($posts as $post)
                <div class="col-sm-6 col-lg-4">
                    <article class="article-default">
                        <a href="{{ memberpostUrl($post) }}">
                            <div class="image-holder">
                                @if($post->media)
                                    {!! IMG($post->media,'thumbnail') !!}
                                @endif
                            </div>
                            <div class="article-content">
                                <span class="subtitle">{{ date('d.m.Y', strtotime($post->created_at)) }}</span>
                                <h3>{{ $post->title }}</h3>
                            </div>
                        </a>
                    </article>
                </div>
            @endforeach
        </div>
    @endif
@endforeach