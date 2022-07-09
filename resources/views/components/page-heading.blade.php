<section id="page-heading" class="section">
    <div class="container">
        <h1>{{ $page->title }}</h1>
        <ul class="breadcrumb">
            <li><a href="{{ __('global.home_url') }}">{{ __('global.home') }}</a></li>
            <li><a class="current" href="{{ pageUrl($page) }}">{{ $page->title }}</a></li>
        </ul>
    </div>
</section>