@extends('layouts.website')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{ asset('template') }}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Our Blog</h2>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <style rel="stylesheet">
                        .blog__item{{ $post->id }}:hover {
                            border: 1px solid transparent !important;
                            background: url({{ asset($post->image) }}) no-repeat;
                            background-color: #cccccc; /* Used if the image is unavailable */
                            background-position: center; /* Center the image */
                            background-repeat: no-repeat; /* Do not repeat the image */
                            background-size: cover; /* Resize the background image to cover the entire container */
                            padding: 0;
                        }
                        .blog__item_hover:hover {
                            background-color: #000000;
                            background:rgba(0,0,0,0.5);
                            width:100%;
                            height: 100%;
                            padding: 40px 48px 35px 30px;
                        }
                    </style>
                <div class="col-lg-4 col-md-6 col-sm-6">

                    <div class="blog__item blog__item{{$post->id}}">
                        <div class="blog__item_hover">
                        <a href="{{ route('blog.details',['slug' => $post->slug]) }}"><h4>{{ $post->title }}</h4></a>
                        <span class="text-white">Author: {{ $post->user->name }}</span>
                        <ul>
                            <li>{{ $post->published_at->format('M d, Y') }}</li>
                            <li>05 Comment</li>
                            <li class="badge badge-primary">{{ $post->category->name }}</li>
                        </ul>
                        <p>{{ Str::limit($post->description, 50) }}</p>
                        <a href="{{ route('blog.details',['slug' => $post->slug]) }}">Read more <span class="arrow_right"></span></a>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ $posts->render() }}
                    <!--<div class="pagination__option blog__pagi">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
