<!--====== Start Header ======-->
<header class="header-area transparent-header">
    <!--=== Header Navigation ===-->
    <div class="header-navigation navigation-two navigation-white">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <!--=== Primary Menu ===-->
            <div class="primary-menu">
                <!--=== Site Branding ===-->
                <div class="site-branding">
                    <a href="{{ route('home') }}" class="brand-logo"><img src="/storage/{{ $logo->logo }}"
                                                                 alt="Site Logo"></a>
                </div>
                <!--=== Nav Inner Menu ===-->
                <div class="nav-menu">
                    <!--=== Mobile Logo ===-->
                    <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                        <a href="{{ route('home') }}" class="brand-logo"><img src="/storage/{{ $logo->logo }}" alt="Logo"></a>
                    </div>
                    <!--=== Main Menu ===-->
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item has-children">
                                <a href="{{ route('home') }}">{{ __('layout.home') }}</a>
                            </li>
                            <li class="menu-item has-children">
                                <a href="{{ route('tours') }}">{{ __('layout.tours') }}</a>
                            </li>
                            <li class="menu-item has-children"><a href="#">{{ __('layout.destinations') }}</a>
                                <ul class="sub-menu">
                                    @foreach($destinations as $destination)
                                        <li><a href="{{ route('showByDestination', ['destination' => $destination->id]) }}">{{ $destination->name_uz }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item has-children">
                                <a href="{{ route('hotels') }}">{{ __('layout.hotels') }}</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('about-us') }}">{{ __('layout.about') }}</a></li>
                            <li class="menu-item"><a href="{{ route('contact') }}">{{ __('layout.contact_us') }}</a></li>
                        </ul>
                    </nav>
                </div>
                <!--=== Nav right Item ===-->
                <div class="nav-right-item d-flex align-items-center">
                    <div class="menu-button d-xl-block d-none">
                        <a href="{{ route('contact') }}" class="main-btn btn-green">{{ __('layout.contact_us') }}<i
                                class="far fa-angle-double-right"></i></a>
                    </div>
                    <div class="lang-dropdown">
                        <select class="wide changeLang">
                            <option value="uz" {{ session()->get('locale') == 'uz' ? 'selected' : '' }}>O'zbekcha</option>
                            <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Русский</option>
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        </select>
                    </div>
                    <div class="navbar-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--====== End Header ======-->
