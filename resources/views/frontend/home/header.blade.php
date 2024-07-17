@php
$homeheader = App\Models\HomeHeader::find(1);
@endphp


<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset($homeheader->photo) }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
                <h2 class="subheading">{{ $homeheader->title_welcome }}</h2>
                <h1>{{ $homeheader->title_2 }}
                    <span class="txt-rotate" data-period="2000"
                        data-rotate='[  {{ $homeheader->title_rotate }} ]'></span>
                </h1>
                <!-- <h1 class="mb-4">Attorneys Fighting For Your Freedom</h1> -->
                <p class="mb-4">{{ $homeheader->long_title }}</p>
                <p><a href="{{ route('home.contact') }}"
                        class="btn btn-primary mr-md-4 py-2 px-4">{{ $homeheader->button_title }} <span
                            class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
</div>