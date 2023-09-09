<x-layout>
    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner light-red-bg pt-170 pb-170 bg_cover" style="background-image: url(/storage/{{ $contact->banner_image }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h1 class="page-title">@lang('contact.contact_us')</h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->
    <!--====== Start Contact Section ======-->
    <section class="contact-bg-section bg_cover pt-100 pb-50" style="background-image: url(assets/images/bg/contact-bg-1.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="contact-content-box mb-50">
                        <div class="section-title mb-45 wow fadeInUp">
                            <h2>@lang('contact.ready_travel')</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-icon-box mb-50 wow fadeInDown">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">@lang('contact.location')</h4>
                                        <p>{{ $contact->location }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-icon-box mb-50 wow fadeInDown">
                                    <div class="icon">
                                        <i class="fal fa-envelope-open"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">@lang('contact.email')</h4>
                                        <p><a href="mailto:support@gmail.com">{{ $contact->email }}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-icon-box mb-50 wow fadeInDown">
                                    <div class="icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">@lang('contact.phone')</h4>
                                        <p><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="contact-form-wrapper mb-50">
                        <h3 class="title">@lang('contact.send_message')</h3>
                        <p>@lang('contact.send_us_message')</p>
                        <form action="{{ route('contact.store') }}" class="contact-form" method="POST">
                            @csrf
                            <div class="form_group">
                                <input type="text" class="form_control" placeholder="@lang('contact.full_name')" name="name" required>
                            </div>
                            <div class="form_group">
                                <input type="text" class="form_control" placeholder="@lang('contact.your_email')" name="email" required>
                            </div>
                            <div class="form_group">
                                <textarea class="form_control" placeholder="@lang('contact.your_message')" name="message"></textarea>
                            </div>
                            <div class="form_group">
                                <button class="main-btn btn-green">@lang('contact.send') <i class="far fa-angle-double-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Contact Section ======-->
    <!--====== Start Contact Map Section ======-->
    <section class="contact-page-map pb-100 wow fadeInUp">
        <div class="container-fluid">
            <!--=== Map Box ===-->
            <div class="map-box">
                <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
        </div>
    </section>
    <!--====== End Contact Map Section ======-->
</x-layout>
