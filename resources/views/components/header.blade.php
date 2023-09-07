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
                    <a href="index.html" class="brand-logo"><img src="assets/images/logo/logo-white.png" alt="Site Logo"></a>
                </div>
                <!--=== Nav Inner Menu ===-->
                <div class="nav-menu">
                    <!--=== Mobile Logo ===-->
                    <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                        <a href="index.html" class="brand-logo"><img src="assets/images/logo/logo-black.png" alt="Site Logo"></a>
                    </div>
                    <!--=== Main Menu ===-->
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item has-children">
                                <a href="{{ route('home') }}">Bosh sahifa</a>
                            </li>
                            <li class="menu-item has-children">
                                <a href="{{ route('tours') }}">Tur paketlar</a>
                            </li>
                            <li class="menu-item has-children"><a href="#">Yo'nalishlar</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Xalqaro</a></li>
                                    <li><a href="#">Ichki turizm</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children">
                                <a href="{{ route('hotels') }}">Mehmonxonalar</a>
                            </li>
                            <li class="menu-item"><a href="{{ route('contact') }}">Aloqa</a></li>
                        </ul>
                    </nav>
                </div>
                <!--=== Nav right Item ===-->
                <div class="nav-right-item d-flex align-items-center">
                    <div class="menu-button d-xl-block d-none">
                        <a href="{{ route('contact') }}" class="main-btn btn-green">Biz bilan bog'laning<i class="far fa-angle-double-right"></i></a>
                    </div>
                    <div class="lang-dropdown">
                        <select class="wide">
                            <option value="English">O'zbek</option>
                            <option value="English">English</option>
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