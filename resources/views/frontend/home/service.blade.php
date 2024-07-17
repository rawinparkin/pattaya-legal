@php
$homeservice = App\Models\HomeService::find(1);
@endphp


<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 py-5">
                <div class="heading-section ftco-animate">
                    <span class="subheading">{{ $homeservice->title_service }}</span>
                    <h2 class="mb-4">{{ $homeservice->title_why }}</h2>
                    <p>{{ $homeservice->short_title }}</p>
                    <p><a href="{{ route('home.contact') }}"
                            class="btn btn-primary py-3 px-4">{{ $homeservice->button_title }}</a></p>
                </div>
            </div>
            <div class="col-lg-9 services-wrap px-4 pt-5">
                <div class="row pt-md-3">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lawyer"></span>
                            </div>
                            <div class="text">
                                <h3>{{ $homeservice->title_card_1 }}</h3>
                                <p>{{ $homeservice->des_1 }}</p>
                            </div>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lawyer"></span>
                            </div>
                            <div class="text">
                                <h3>{{ $homeservice->title_card_2 }}</h3>
                                <p>{{ $homeservice->des_2 }}</p>
                            </div>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lawyer"></span>
                            </div>
                            <div class="text">
                                <h3>{{ $homeservice->title_card_3 }}</h3>
                                <p>{{ $homeservice->des_3 }}</p>
                            </div>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>