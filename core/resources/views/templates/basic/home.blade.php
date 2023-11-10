@extends($activeTemplate.'layouts.frontend')
@section('content')
@php
    $banners = getContent('banner.element');
@endphp

<!-- hero-section start -->
  <!-- Header Start -->
  <style type="text/css">
      .hero .single__slide {
    
    position: relative;
    z-index: 1;
    padding: 100px;
}
  </style>
       <section class="hero bg-white" >
    
        <!-- Header End -->
        <div class="container-fluid hero-header bg-light py-5 mb-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 mb-3 animated slideInDown">Accept and Withdraw Payments with Ease</h1>
                        <p class="animated slideInDown">Are you ready to embrace the future of finance? Whether you're a business owner looking to expand your payment options or a crypto enthusiast seeking a secure and user-friendly withdrawal platform, we've got you covered!</p>
                        <a href="plans.html" class="btn btn-primary py-3 px-4 animated slideInDown">Explore More</a>
                    </div>
                    <div class="col-lg-6 animated fadeIn">
                        <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="{{ asset('assets/global/new/img/hero-1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
</section>
        <!-- About Start -->
        
          @php
    $aboutCaption = getContent('about.content',true);
@endphp
<section class="container-xxl py-5">
    <div class="container">
    <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeInUp"  data-wow-delay="0.1s">
        <div class="video-thumb">
            <!-- <img src="{{ getImage('assets/images/frontend/about/'.$aboutCaption->data_values->image) }}" alt="image" class="w-100"> -->
             <img class="img-fluid" src="{{ asset('assets/global/new/img/about.png') }}" alt="">
            <a class="video-icon" href="{{ __($aboutCaption->data_values->video_url) }}" data-rel="lightcase:myCollection">@php echo $aboutCaption->data_values->video_button_icon @endphp</a>
        </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
        <div class="section-content pl-lg-4 pl-0">
            <h2 class="section-title mb-20 display-6">{{ __($aboutCaption->data_values->heading) }}</h2>
            <p>@php echo $aboutCaption->data_values->description @endphp</p>
        </div>
        </div>
    </div>
    </div>
</section>
        <!-- About End -->

        <!-- Facts Start -->
        <div class="container-xxl bg-light py-5 my-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid mb-4" src="{{ asset('assets/global/new/img/icon-9.png') }}" alt="">
                        <h1 class="display-4">100%</h1>
                        <p class="fs-5 text-primary mb-0">Customer Satisfaction</p>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid mb-4" src="{{ asset('assets/global/new/img/icon-10.png') }}" alt="">
                        <h1 class="display-4" data-toggle="counter-up">900</h1>
                        <p class="fs-5 text-primary mb-0">Today Transactions</p>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                        <img class="img-fluid mb-4" src="{{ asset('assets/global/new/img/icon-2.png') }}" alt="">
                        <h1 class="display-4" data-toggle="counter-up">40000</h1>
                        <p class="fs-5 text-primary mb-0">Last Month Transactions</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Facts End -->

@php
    $featureCaption = getContent('features.content',true);
    $features = getContent('features.element');
@endphp
        <

        <div class="container-xxl bg-light py-5 my-5">
            <div class="container py-5">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6">Services</h1>
                    <p class="text-primary fs-5 mb-5">Deposit & Withdraw Crypto</p>
                </div>
                <div class="row g-4">
                     @foreach($features as $feature)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white p-5">
                            <img class="img-fluid mb-4" src="img/icon-7.png" alt="">
                            <h5 class="mb-3">{{ __($feature->data_values->title) }}</h5>
                            <p>{{ __($feature->data_values->content) }}</p>
                        </div>

                    </div>
                     @endforeach
                  
                    </div>
                </div>
            </div>
        </div>

        <!-- Service End -->

        <!-- Roadmap Start -->
<!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6">Procedure</h1>
                    <p class="text-primary fs-5 mb-5">Road Map Of Payment Procedure</p>
                </div>
                <div class="wow-carousel d-flex roadmap-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>January 2045</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>March 2045</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>May 2045</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>July 2045</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>September 2045</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                    <div class="roadmap-item">
                        <div class="roadmap-point"><span></span></div>
                        <h5>November 2045</h5>
                        <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                    </div>
                </div>
            </div>
        </div> -->
        
    <!-- Roadmap End -->
  
@php
    $testimonialCaption = getContent('testimonial.content',true);
    $testimonials = getContent('testimonial.element');
@endphp


    <!-- testimonial section start -->
    <section class="pt-150 pb-150">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">{{ __($testimonialCaption->data_values->heading) }}</h2>
              <p>{{ __($testimonialCaption->data_values->subheading) }}</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial-slider">
                @foreach($testimonials as $testimonial)
              <div class="single-slide">
                <div class="testimonial-card">
                  <div class="thumb"><img src="{{ getImage('assets/images/frontend/testimonial/'.$testimonial->data_values->image) }}" alt="image"></div>
                  <h5 class="name">{{ __($testimonial->data_values->name) }}</h5>
                  <span class="designation">{{ __($testimonial->data_values->designation) }}</span>
                  <p>{{ __($testimonial->data_values->comment) }}</p>
                </div>
              </div>
              @endforeach
            </div><!-- testimonial-slider end -->
          </div>
        </div>
      </div>
    </section>
   @php
    $faqCaption = getContent('faq.content',true);
    $faqs = getContent('faq.element');
@endphp


    <section class="pt-150 pb-150 section--bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">{{ __($faqCaption->data_values->heading) }}</h2>
              <p>{{ __($faqCaption->data_values->subheading) }}</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row">
          <div class="col-lg-12">
            <div class="accordion cmn-accordion" id="accordionExample">
              @foreach($faqs as $key => $faql)
              <div class="card">
                <div class="card-header" id="heading{{ $key }}">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}">
                    <i class="las la-question-circle"></i>
                    <span>{{ __($faql->data_values->question) }}</span>
                  </button>
                </div>

                <div id="collapse{{ $key }}" class="collapse @if($loop->first) show @endif" aria-labelledby="heading{{ $key }}" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <p>{{ __($faql->data_values->answer) }}</p>
                  </div>
                </div>
              </div><!-- card end -->
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection

