@extends('frontend.main_master')
@section('main')

@section('title')
Contact | Pattaya Legal Services
@endsection
@section('meta')
<meta property="og:title" content="Home | Pattaya Legal Services" />
<meta property="og:image" content="{{ asset('upload/frontend/home/vision/1801456583651859.jpg') }}" />
<meta property="og:description" content="PATTAYA LEGAL SERVICES" />
@endsection

<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCKjNBWyk2qGRn7eWZlFEUbopIQlyMnO0&callback=console.debug&libraries=maps,marker&v=beta">
</script>


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset($homeheader->photo) }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>Address: </span>{{ $homecontact->admin_address }}</p>
            </div>
            <div class="col-md-3">
                <p><span>Phone: </span> <a href="tel://1234567920">{{ $homecontact->admin_phone }}</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Email: </span> <a href="mailto:info@yoursite.com">{{ $homecontact->admin_email }}</a></p>
            </div>
            <div class="col-md-3">
                <!-- <p><span>Website: </span> <a href="#">peter.com</a></p> -->
            </div>
        </div>

        <div class="row block-9 no-gutters">
            <div class="col-lg-6 order-md-last d-flex">

                <form id="myForm" method="post" action="{{ route('store.message') }}" class="bg-light p-5 contact-form ">

                    @csrf
                    <div class="form-group">
                        <input type="text" name="customer_name" class="form-control" placeholder="{{ $homecontact->name }}" autocomplete="off">

                    </div>
                    <div class="form-group">
                        <input type="email" name="customer_email" class="form-control" placeholder="{{ $homecontact->email }}" autocomplete="off">

                    </div>
                    <div class="form-group">
                        <input type="text" name="customer_subject" class="form-control" placeholder="{{ $homecontact->subject }}" autocomplete="off">

                    </div>
                    <div class="form-group">
                        <textarea name="customer_message" cols="30" rows="7" class="form-control" placeholder="{{ $homecontact->message }}"></textarea>

                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{ $homecontact->button_title }}" class="btn btn-primary py-3 px-5">
                    </div>

                </form>

            </div>

            <div class="col-lg-6 d-flex">
                <!-- <div id="map"></div> -->
                <a href="https://maps.app.goo.gl/EZ8PmjsP8v1K4t5L9">
                    <img src="{{ asset('frontend/assets/images/map.png') }}" width="555px" height="565px" />
                </a>
            </div>


            <!-- <script>
                async function initMap() {
                    // Request needed libraries.
                    const {
                        Map
                    } = await google.maps.importLibrary("maps");
                    const {
                        AdvancedMarkerElement
                    } = await google.maps.importLibrary("marker");
                    const map = new Map(document.getElementById("map"), {
                        center: {
                            lat: 12.907999038696289,
                            lng: 100.90879821777344
                        },
                        zoom: 16,
                        mapId: "4504f8b37365c3d0",
                    });
                    const marker = new AdvancedMarkerElement({
                        map,
                        position: {
                            lat: 12.907999038696289,
                            lng: 100.90879821777344
                        },
                    });
                }

                initMap();
            </script> -->


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