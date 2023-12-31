<x-layout>
    @if(isset($tour))
        <!--====== Start Breadcrumb Section ======-->
        <section class="page-banner light-red-bg pt-170 pb-170 bg_cover"
                 style="background-image: url(/storage/{{ $tour->banner_image }});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-banner-content text-center text-white">
                            <h2 class="page-title">{{ $tour->{'name_'.app()->getLocale()} }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Breadcrumb Section ======-->
        <!--====== Start Blog Details Section ======-->
        <section class="blog-details-section pt-100 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details-wrapper">
                            <div class="blog-post mb-60 wow fadeInUp">
                                <div class="post-thumbnail">
                                    <img src="/storage/{{ $tour->{'image_'.app()->getLocale()} }}" alt="Blog Image">
                                </div>
                                <div class="main-post">
                                    <div class="entry-content">
                                        <h3 class="title pt-4">
                                            {{ $tour->{'name_'.app()->getLocale()} }}
                                        </h3>
                                        {!! $tour->{'description_'.app()->getLocale()} !!}
                                    </div>
                                </div>
                            </div>
                            <!--===  Comments Form  ===-->
                            <div class="comments-respond mb-35 wow fadeInUp" id="comment-respond">
                                <h5 class="comments-heading">{{ __('show.formH') }}</h5>
                                <p>{{ __('show.formA') }}</p>
                                <form class="comment-form" action="{{ route('order') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control"
                                                       placeholder="{{ __('show.name') }} *" name="name"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control"
                                                       placeholder="{{ __('show.number') }} *" name="phone"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                            <textarea name="addition" class="form_control"
                                                      placeholder="{{ __('show.addition') }}"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <select name="tour_id" class="form_control">
                                                    <option value="{{ $tour->id }}"
                                                            selected>{{ $tour->{'name_'.app()->getLocale()} }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn btn-green">{{ __('show.submit') }}<i
                                                        class="far fa-angle-double-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @elseif(isset($hotel))
                        <!--====== Start Breadcrumb Section ======-->
                        <section class="page-banner light-red-bg pt-170 pb-170 bg_cover"
                                 style="background-image: url(/assets/images/service/hotel-banner.jpg);">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="page-banner-content text-center text-white">
                                            <h2 class="page-title">{{ $hotel->{'name_'.app()->getLocale()} }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section><!--====== End Breadcrumb Section ======-->
                        <!--====== Start Blog Details Section ======-->
                        <section class="blog-details-section pt-100 pb-60">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-7">
                                        <div class="blog-details-wrapper">
                                            <div class="blog-post mb-60 wow fadeInUp">
                                                <div class="post-thumbnail">
                                                    <img src="/storage/{{ $hotel->image }}"
                                                         alt="Hotel Image">
                                                </div>
                                                <div class="main-post">
                                                    <div class="entry-content">
                                                        <h3 class="title pt-4">
                                                            {{ $hotel->{'name_'.app()->getLocale()} }}
                                                        </h3>
                                                        {!! $hotel->{'description_'.app()->getLocale()} !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="col-xl-4 col-lg-5">
                                        <div class="sidebar-widget-area pl-lg-40">
                                            <!--=== Category Widget ===-->
                                            <div class="sidebar-widget category-widget mb-30 wow fadeInUp">
                                                <h5 class="widget-title">@lang('layout.destinations')</h5>
                                                <ul class="category-nav">
                                                    @foreach($destinations as $destination)
                                                        <li>
                                                            <a href="{{ route('showByDestination', ['destination' => $destination->id]) }}">{{ $destination->{'name_'.app()->getLocale()} }}
                                                                <i class="far fa-arrow-right"></i></a></li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section><!--====== End Blog Details Section ======-->
</x-layout>
