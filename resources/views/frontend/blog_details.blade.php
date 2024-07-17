@extends('frontend.main_master')
@section('main')

@section('title')
Blog | Pattaya Legal Services - {{$blogs->blog_title}}
@endsection
@section('meta')
<meta property="og:title" content="{{$blogs->blog_title}}" />
<meta property="og:image" content="{{ asset($blogs->blog_image) }}" />
<meta property="og:description" content="{{$blogs->blog_title}}" />
@endsection
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset($homeheader->photo) }}');" data-stellar-background-ratio="0.5">

    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">{{ $blogs->blog_title }}</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{ route('home.blog') }}">Blog <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>{{ $blogs->blog_title }}<i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p>
                    <img src="{{ asset($blogs->blog_image) }}" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3">{{ $blogs->blog_title }}</h2>
                <p>{!! $blogs->blog_description !!}</p>
                <div class="tag-widget post-tag-container mb-5 mt-5">

                    <!-- <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">{{ $blogs->blog_tags }}</a>
                    </div> -->
                </div>






            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        @foreach($categories as $cat)
                        <li><a href="{{ route('category.blog',$cat->id) }}">{{ $cat->blog_category  }}<span class="ion-ios-arrow-forward"></span></a></li>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>


                    @foreach($allblogs as $all )

                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('{{ asset($all->blog_image) }}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ route('blog.details',$all->id) }}">{{ $all->blog_title }}</a></h3>
                            <div class="meta">
                                <div><a href="{{ route('blog.details',$all->id) }}"><span class="icon-calendar"></span>
                                        {{ $all->created_at->format('M d, Y') }}</a></div>

                            </div>
                        </div>
                    </div>

                    @endforeach




                </div>

                <!-- <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="route('home.blog')" class="tag-cloud-link">Criminal Law</a>
                        <a href="route('home.blog')" class="tag-cloud-link">Property Law</a>
                    </div>
                </div> -->




            </div>

        </div>
    </div>
</section> <!-- .section -->






@endsection