<section id="brands" class="section bg-light-blue">
    <div class="container">
        <h2 class="text-center">{{ __('global.brands_title') }}</h2>
        <div id="brands-slider" class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($brands as $brand)
                    <div class="swiper-slide">
                        <a @if($brand->website) href="{{ $brand->website }}" target="_blank" @endif>
                            @if($brand->media)
                                {!! IMG($brand->media) !!}
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>