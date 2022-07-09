<footer id="footer">
    <section id="footer-content" class="section">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-md-4">
                    <a id="footer-logo" href="{{ url('/') }}" title="yztd">
                        <img src="{{ url('assets/gfx/logo.png') }}" alt="yztd">
                    </a>
                    <p>{{ __('global.footer_text') }}</p>	
                    <img src="{{ url('assets/gfx/aaai-logo.png') }}" alt="aaai" style="width:160px;">	         
                </div>
                <div class="col-md-3">
                    <h3>{{ __('global.footer_menu') }}</h3>
                    <ul>
                        @foreach($menuItems as $menuItem)
                            <li><a href="{{ $menuItem->url }}" @if($menuItem->newtab) target="_blank" @endif>{{ $menuItem->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-5">
                    <div class="footer-right">
                        <h3>{{ __('global.footer_social_text') }}</h3>
                        <ul class="social-links">  
                            <li><a href="https://www.facebook.com/Yapay-Zeka-ve-Teknoloji-Derne%C4%9Fi-101590688377046" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/yztdernegi" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/yztdernegi/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/67714518/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCfTs3kERyicux2NiCtDeHyw" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://open.spotify.com/show/6WHzVps6j1PAwLBVGhkEg6" target="_blank"><i class="fa fa-spotify"></i></a></li>
                        </ul>

                        <p>
                            <strong>{{ __('global.footer_development') }}</strong><br>
                            <a href="https://teknofikir.com.tr/" target="_blank"><img src="{{ url('assets/gfx/teknofikir-logo.png') }}" alt="teknofikir"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>