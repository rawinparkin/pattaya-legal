@extends('frontend.main_master')
@section('main')

@section('title')
Blog | Pattaya Legal Services
@endsection
@section('meta')
<meta property="og:title" content="Blog | Pattaya Legal Services" />
<meta property="og:image" content="{{ asset('upload/frontend/home/vision/1801456583651859.jpg') }}" />
<meta property="og:description" content="PATTAYA LEGAL SERVICES" />
@endsection
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset($homeheader->photo) }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Blog</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">


            @foreach($blogs as $item)

            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text px-4 py-4">
                        <h3 class="heading mb-0"><a href="{{ route('blog.details',$item->id) }}">{{ $item->blog_title }}</a></h3>
                    </div>
                    <a href="{{ route('blog.details',$item->id) }}" class="block-20" style="background-image: url('{{ asset($item->blog_image) }}');">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                <span class="day">{{ $item->created_at->format('d') }}</span>
                            </div>
                            <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                <span class="yr">{{ $item->created_at->format('Y') }}</span>
                                <span class="mos">{{ $item->created_at->format('M') }}</span>
                            </div>
                        </div>
                        <p>{{ strip_tags(substr($item->blog_description, 0,  110)) }} ...
                        </p>
                        <p><a href="{{ route('blog.details',$item->id) }}" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>



            @endforeach






        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    {{ $blogs->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </div>
</section>






@endsection