<x-layout>
    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner light-red-bg pt-170 pb-170 bg_cover" style="background-image: url(/storage/{{ $about->banner_image }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h2 class="page-title">About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->
    <!--====== Start About Section ======-->
    <section class="about-section pt-90 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mb-40 wow fadeInLeft">
                        <h2>
                            {{ $about->{'title_'.app()->getLocale()} }}
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-box mb-55 wow fadeInRight">
                        <p>
                            {!! $about->{'description_'.app()->getLocale()} !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End About Section ======-->
    <!--====== Start Who-we Section ======-->
    <section class="who-we-bg-section p-r z-1 pt-100 pb-100">
        <div class="who-bg bg_cover wow fadeInLeft" style="background-image: url(/storage/{{ $about->image }});"></div>
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-xl-8 col-lg-12">
                    <div class="who-we-wrapper wow fadeInDown">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title mb-50 wow fadeInUp">
                                    <h2>Company Mission & Vision</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 justify-content-center wow fadeInUp">
                            <div class="col-lg-12 col-md-6">
                                <div class="fancy-icon-box mb-30">
                                    <div class="icon">
                                        <i class="far fa-shield-check"></i>
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Our Mission</h5>
                                        <p>Tincidunt egestas morbi urna
                                            urnabelit tincidunt pellentesque
                                            urnaleorem cursus lacinia. Amet
                                            viverrascelerisque faucibus
                                        lorem </p>
                                        <span class="line"></span>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Who-we Section ======-->

    <!--====== Start CTa Section ======-->
    <section class="cta-section dark-green-bg pt-70 pb-35">
        <div class="container">
            <div class="cta-wrapper bg_cover" style="background-image: url(assets/images/bg/cta-bg-1.png);">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="section-title text-white mb-40 wow fadeInLeft">
                            <h2>Enjoy The Better Adventure
                                Life <span class="thin">Tent Camping</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cta-button float-lg-end mb-35 wow fadeInRight">
                            <a href="about.html" class="main-btn btn-yellow">Discover more<i class="far fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End CTa Section ======-->

    <!--====== Start Partners Section ======-->
    <section class="partners-section light-red-bg pb-80">
        <div class="container">
            <!--=== Partners Slider ===-->
            <div class="partner-slider-one pt-80 wow fadeInDown">
                @foreach($partners as $partner)
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="{{ $partner->url }}"><img src="/storage/{{ $partner->image }}" alt="Partner Image"></a>
                        </div>
                    <span class="justify-center">
                        {{ $partner->name }}
                    </span>
                    </div>

                @endforeach


            </div>
        </div>
    </section><!--====== End Partners Section ======-->
</x-layout>
