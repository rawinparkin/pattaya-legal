@php
$blogs = App\Models\Blog::latest()->limit(3)->get();
@endphp

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Blog</span>
                <h2>Recent Blog</h2>
            </div>
        </div>


        <div class="row d-flex">


            @foreach($blogs as $item)


            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text px-4 py-4">
                        <h3 class="heading mb-0"><a
                                href="{{ route('blog.details',$item->id) }}">{{ $item->blog_title }}</a></h3>
                    </div>
                    <a href="{{ route('blog.details',$item->id) }}" class="block-20"
                        style="background-image: url('{{ asset($item->blog_image) }}');">
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
                        <p>{{ strip_tags(substr($item->blog_description, 0,  110)) }} ...</p>
                        <p><a href="{{ route('blog.details',$item->id) }}" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>