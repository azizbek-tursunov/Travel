<x-layout>
    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner light-red-bg pt-170 pb-170 bg_cover"
             style="background-image: url(assets/images/bg/page-bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h1 class="page-title">Blog Standard</h1>
                        <ul class="breadcrumb-link text-white">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Blog Standard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->
    <!--====== Start Breadcrumb Section ======-->
    <section class="blog-standard-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-standard-wrapper mb-30">
                        @if(isset($tours))
                            @foreach($tours as $tour)
                                <div class="blog-standard-post-item mb-50 wow fadeInUp">
                                    <div class="post-thumbnail">
                                        <img src="/storage/{{ $tour->image }}" alt="Post Image">
                                    </div>
                                    <div class="entry-content">
                                        <div class="post-meta">
                                            <ul>
                                                <li><span><a href="#"><i
                                                                class="far fa-calendar-alt"></i> November 23,2022</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title"><a
                                                href="{{ route('showTour', ['tour' => $tour->id]) }}">{{ $tour->direction }}</a>
                                        </h3>
                                        <a href="{{ route('showTour', ['tour' => $tour->id]) }}" class="btn-link">ko'proq
                                            malumot olish<i class="far fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                            {{-- Pagination links --}}
                            {{ $tours->links() }}
                        @elseif(isset($hotels))
                            @foreach($hotels as $hotel)
                                <div class="blog-standard-post-item mb-50 wow fadeInUp">
                                    <div class="post-thumbnail">
                                        <img src="/storage/{{ $hotel->image }}" alt="Post Image">
                                    </div>
                                    <div class="entry-content">
                                        <div class="post-meta">
                                            <ul>
                                                <li><span><a href="#"><i
                                                                class="far fa-calendar-alt"></i> November 23,2022</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title"><a
                                                href="{{ route('showHotel', ['hotel' => $hotel->id]) }}">{{ $hotel->name }}</a>
                                        </h3>
                                        <a href="{{ route('showHotel', ['hotel' => $hotel->id]) }}" class="btn-link">ko'proq
                                            malumot olish<i class="far fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                            {{-- Pagination links --}}
                            {{ $hotels->links() }}
                        @endif
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar-widget-area pl-lg-40">
                        @if(isset($destinations))
                            <!--=== Category Widget ===-->
                            <div class="sidebar-widget category-widget mb-30 wow fadeInUp">
                                <h5 class="widget-title">{{ __('home.destination') }}</h5>
                                <ul class="category-nav">

                                    @foreach($destinations as $destination)
                                        <li>
                                            <a href="{{ route('showByDestination', ['destination' => $destination->id]) }}  ">{{ $destination->name }}
                                                <i class="far fa-arrow-right"></i></a></li>
                                    @endforeach

                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->
</x-layout>
