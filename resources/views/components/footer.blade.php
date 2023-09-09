<!--====== Start Footer ======-->
<footer class="footer-area footer-two light-gray-bg">
    <div class="container">
        <div class="footer-widget-area pt-80 pb-30">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget about-company-widget mb-40">
                        <a href="{{ route('home') }}" class="footer-logo"><img src="/storage/{{ $logo->logo }}" alt="Logo"></a>
                        <p>
                            {!! $footer->{'about_' . app()->getLocale()} !!}
                        </p>
                        <ul class="social-link">
                            @foreach($footer->social as $data)
                                <li><a href="{{ $data['url'] }}"><i class="fab fa-{{ $data['name'] }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-nav-widget pl-lg-20 mb-40">
                        <h4 class="widget-title">Services</h4>
                        <div class="footer-nav-content">
                            <ul class="footer-nav">
                                <li><a href="{{ route('home') }}">{{ __('layout.home') }}</a></li>
                                <li><a href="{{ route('tours') }}">{{ __('layout.tours') }}</a></li>
                                <li><a href="{{ route('hotels') }}">{{ __('layout.hotels') }}</a></li>
                                <li><a href="{{ route('about-us') }}">{{ __('layout.about') }}</a></li>
                                <li><a href="{{ route('contact') }}">{{ __('layout.contact_us') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-newsletter-widget mb-40">
                        <h4 class="widget-title">{{ __('layout.subscribe') }}</h4>
                        <div class="newsletter-content">
                            <p>{{ __('layout.subscribe_text') }}</p>
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Email" required>
                                    <label>
                                        <button><i class="far fa-arrow-right"></i></button>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget contact-info-widget pl-lg-100 mb-40">
                        <div class="contact-info-box mb-35">
                            {!! $footer->{'contact_' . app()->getLocale()} !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=== Copyright Area ===-->
        <div class="copyright-area">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-text">
                        <P>&copy; 2023, @lang('layout.all_rights_reserved')</P>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copyright-nav float-lg-end">
                        <ul>
                            <li>Made by <a href="https://tursunov.me" target="_blank">Azizbek</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--====== End Footer ======-->
