@php
    $featureCaption = getContent('features.content',true);
    $features = getContent('features.element');
@endphp


    <!-- feature section start -->
    <section class="pt-150 pb-150 section--bg">
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
                    <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-white p-5">
                            <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                            <h5 class="mb-3">Diverse Cryptocurrency Support</h5>
                            <p>Embrace diversity with our service, as we support a wide range of popular cryptocurrencies. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-white p-5">
                            <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                            <h5 class="mb-3">Crypto-to-Fiat Conversion</h5>
                            <p>Convert your crypto earnings into traditional fiat currency conveniently with our crypto-to-fiat conversion feature.</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- feature section end -->
