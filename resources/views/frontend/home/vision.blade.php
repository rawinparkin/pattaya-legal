@php
$homevision = App\Models\HomeVision::find(1);
@endphp


<section class="ftco-section ftco-no-pt ">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url('{{ asset($homevision->photo) }}');">


                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="row justify-content-start pt-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">{{ $homevision->title_welcome }}</span>
                        <h2 class="mb-4">{{ $homevision->sub_title }}</h2>
                        <p>{{ $homevision->short_title }}
                        </p>
                        <div class="tabulation-2 mt-4">
                            <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                <li class="nav-item mb-md-0 mb-2">
                                    <a class="nav-link active py-2" data-toggle="tab" href="#home1">{{ $homevision->title_card_1 }}</a>
                                </li>
                                <li class="nav-item px-lg-2 mb-md-0 mb-2">
                                    <a class="nav-link py-2" data-toggle="tab" href="#home2">{{ $homevision->title_card_2 }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">{{ $homevision->title_card_3 }}</a>
                                </li>
                            </ul>
                            <div class="tab-content bg-light rounded mt-2">
                                <div class="tab-pane container p-0 active" id="home1">
                                    <p>{{ $homevision->des_1 }}</p>
                                </div>
                                <div class="tab-pane container p-0 fade" id="home2">
                                    <p>{{ $homevision->des_2 }}</p>
                                </div>
                                <div class="tab-pane container p-0 fade" id="home3">
                                    <p>{{ $homevision->des_3 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="years d-flex mt-4 mt-md-5">
                            <h4>
                                <span class="number mr-2" data-number="{{ $homevision->year_exp }}">0</span>
                                <span>{{ $homevision->exp_title }}</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>