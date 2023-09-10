<x-layout>
    <!--====== Start Banner Section ======-->
    <section class="banner-section">
        <div class="hero-wrapper-two">
            <div class="hero-slider-two">
                @foreach($home->banner as $banner)
                    <div class="single-slider">
                        <div class="image-layer bg_cover"
                             style="background-image: url('/storage/{{ $banner['image_'.app()->getLocale()] }}');"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-lg-10">
                                    <div class="hero-content text-white text-center">
                                        <h2>{{ $banner['title_'.app()->getLocale()] }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section><!--====== End Banner Section ======-->
    <!--====== Start About Section ======-->
    <section class="about-section pt-100 pb-45">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-12">
                    <div class="about-content-box mb-50">
                        <div class="section-title mb-20">
                            <h2>{{ $home->{'about_'.app()->getLocale()} }}</h2>
                        </div>
                        <p class="mb-40">{!! $home->{'about_text_'.app()->getLocale()} !!}</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="about-one_image-box mb-20 p-r z-1">
                        <img src="/storage/{{ $home->image }}" class="about-img-one mb-30" alt="About Image">
                        <img src="/storage/{{ $home->image2 }}" class="about-img-two mb-30" alt="About Image">
                        <div class="icon-box">
                            <i class="flaticon-tent-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End About Section ======-->
    <!--====== Start Service Section ======-->
    <section class="service-section pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center mb-50">
                        <h2>@lang('home.destination_title')</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                @foreach($destinations as $destination)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-service-item-two mb-40">
                            <div class="img-holder">
                                <img src="/storage/{{ $destination->{'image_' . app()->getLocale()} }}" alt="Rasm">
                                <div class="hover-overlay"></div>
                                <div class="hover-content">
                                    <a href="{{ route('showByDestination', ['destination' => $destination->id]) }}" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="text pt-35">
                                <h4 class="title"><a href="{{ route('showByDestination', ['destination' => $destination->id]) }}">{{ $destination->{'name_' . app()->getLocale()} }}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section><!--====== End Service Section ======-->
    <!--====== Start Video Section ======-->
    <section class="video-bg-section pt-140 pb-110 p-r z-1 bg_cover"
             style="background-image: url(/storage/{{ $home->video_background }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="video-content-box text-white text-md-center mb-40">
                        <h2 class="mb-30">{{ $home->{'video_text_'.app()->getLocale()} }}</h2>
                        <a href="{{ $home->video_link }}" class="main-btn btn-green">@lang('home.watch_video')<i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section><!--====== End Video Section ======-->
    <!--====== Start Accommodation Section ======-->
    <section class="accommodation-section pb-100">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center mb-50 mt-60">
                        <h2>@lang('home.choose_tour')</h2>
                    </div>
                </div>
            </div>
            <div class="service-slider-one">

                @foreach($tours as $tour)
                <div class="single-service-item-four pt-2">
                    <div class="img-holder">
                        <img src="/storage/{{ $tour->{'image_' . app()->getLocale()} }}" alt="Service Image">
                        <div class="hover-content">
                            <div class="inner-content d-flex justify-content-between">
                                <div class="text">
                                    <h4 class="title"><a href="{{ route('showTour', ['tour' => $tour->id]) }}">{{ $tour->{'name_' . app()->getLocale()} }}</a></h4>
                                    <a href="{{ route('showTour', ['tour' => $tour->id]) }}" class="btn-link">@lang('home.read_more')<i
                                            class="far fa-angle-double-right"></i></a>
                                </div>
                                <div class="icon">
                                    <a href="{{ route('showTour', ['tour' => $tour->id]) }}" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section><!--====== End Accommodation Section ======-->

    <!--====== Start CTa Section ======-->
    <section class="cta-section dark-green-bg pt-70 pb-35">
        <div class="container">
            <div class="cta-wrapper bg_cover" style="background-image: url(assets/images/bg/cta-bg-1.png);">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="section-title text-white mb-40">
                            <h2>
                                {{ $home->{'CTa_text_'.app()->getLocale()} }}
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cta-button float-lg-end mb-35">
                            <a href="{{ $home->CTa_link  }}" class="main-btn btn-yellow">@lang('home.subscribe')<i
                                    class="far fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End CTa Section ======-->
</x-layout>
