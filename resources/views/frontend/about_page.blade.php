@extends('frontend.main_master')
@section('main')


@section('title')
About | Pattaya Legal Services
@endsection
@section('meta')
<meta property="og:title" content="About | Pattaya Legal Services" />
<meta property="og:image" content="{{ asset('upload/frontend/home/vision/1801456583651859.jpg') }}" />
<meta property="og:description" content="PATTAYA LEGAL SERVICES" />
@endsection

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset($homeheader->photo) }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">About Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url('{{ asset($homevision->photo) }}');">
                    <a href="#" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="row justify-content-start pt-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">{{ $homevision->title_welcome }}</span>
                        <h2 class="mb-4">{{ $homevision->sub_title }}</h2>
                        <p>{{ $homevision->short_title }}</p>
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

<section class="ftco-consultation ftco-section img" style="background-image: url('{{ $homemessage->photo }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-6 half p-3 py-5 pl-md-5 ftco-animate heading-section heading-section-white">
                <span class="subheading">{{ $homemessage->title_booking }}</span>
                <h2 class="mb-4">{{ $homemessage->title_free }}</h2>

                <form id="myForm" method="post" action="{{ route('store.message') }}" class="consultation">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="customer_name" class="form-control" placeholder="{{  $homemessage->name }}" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type="email" name="customer_email" class="form-control" placeholder="{{  $homemessage->email }}" autocomplete="off">

                    </div>
                    <div class="form-group">
                        <input type="text" name="customer_subject" class="form-control" placeholder="{{  $homemessage->subject }}" autocomplete="off">

                    </div>
                    <div class="form-group">
                        <textarea name="customer_message" cols="30" rows="7" class="form-control" placeholder="{{  $homemessage->message }}"></textarea>

                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{  $homemessage->button_title }}" class="btn btn-dark py-3 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#myForm').validate({
            rules: {
                customer_name: {
                    required: true,
                },
                customer_email: {
                    required: true,
                },
                customer_subject: {
                    required: true,
                },
                customer_message: {
                    required: true,
                },
            },
            messages: {
                customer_name: {
                    required: 'Please Enter Name',
                },
                customer_email: {
                    required: 'Please Enter Email',
                },
                customer_subject: {
                    required: 'Please Enter Subject',
                },
                customer_message: {
                    required: 'Please Enter Message',
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>




@endsection