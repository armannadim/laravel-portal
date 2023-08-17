@extends('layouts.website')
@section('content')
    <div class="hero overlay inner-page">
        <img src="{{ asset('template') }}/images/blob.svg" alt="" class="img-fluid blob">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up" >{{ $content_type }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-news">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card post-entry">
                        <a href="{{ route('blog.details',['slug' => $post->slug]) }}"><img src="{{ asset($post->image) }}" class="card-img-top" alt="Image"></a>
                        <div class="card-body">
                            <div><span class="text-uppercase font-weight-bold date">{{ $post->published_at->format('M d, Y') }}</span></div>
                            <h5 class="card-title"><a href="{{ route('blog.details',['slug' => $post->slug]) }}">{{ Str::limit($post->title, 30) }}</a></h5>
                            <p>{{ Str::limit($post->description, 100) }} </p>
                            <p class="mt-5 mb-0"><a href="{{ route('blog.details',['slug' => $post->slug]) }}">Read more</a></p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-lg-12 text-center py-5">
                    {{ $posts->render() }}
                    <!--<div class="custom-navigation">

                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <span>...</span>
                        <a href="#">5</a>
                        </nav>-->
                    </div>
                </div>
            </div>
        </div>

@endsection
