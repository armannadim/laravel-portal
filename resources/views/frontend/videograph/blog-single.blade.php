@extends('layouts.website')
@section('content')
    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad set-bg" data-setbg="{{ asset($post->image) }}">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__hero__text">
                        <h2>{{ $post->title }}</h2>
                        <ul>
                            <li>by <span>{{ $post->user->name }}</span></li>
                            <li>{{ $post->published_at->format('M d, Y') }}</li>
                            <li>05 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <div class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text text-white">
                            {{ $post->description }}
                        </div>

                        <div class="blog__details__tags">
                            <span><i class="fa fa-tag"></i> Tag:</span>
                            @foreach($post->tags as $tag)
                                <a href="#">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <div class="blog__details__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="#" class="blog__details__option__item">
                                        <h5><i class="fa fa-angle-left"></i> Previous posts</h5>
                                        <div class="blog__details__option__item__img">
                                            <img src="{{ asset($post->image) }}" alt="">
                                        </div>
                                        <div class="blog__details__option__item__text">
                                            <h6>Looking for Music & Sounds for my new Android...</h6>
                                            <span>Nov 27, 2019</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="#" class="blog__details__option__item blog__details__option__item--right">
                                        <h5>Previous posts <i class="fa fa-angle-right"></i></h5>
                                        <div class="blog__details__option__item__img">
                                            <img src="{{ asset($post->image) }}" alt="">
                                        </div>
                                        <div class="blog__details__option__item__text">
                                            <h6>Looking for Music & Sounds for my new Android...</h6>
                                            <span>Nov 27, 2019</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__recent">
                            <h4>Recent Posts</h4>
                            <div class="row">
                                @foreach($recentPosts as $post)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__details__recent__item">
                                        <img src="{{ asset($post->image) }}" alt="">
                                        <h5>{{ $post->title }}</h5>
                                        <span>{{ $post->published_at->format('M d, Y') }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="blog__details__comment">
                            <h4>Leave a comment</h4>
                            <form action="#">
                                <div class="input__list">
                                    <input type="text" placeholder="Name">
                                    <input type="text" placeholder="Email">
                                    <input type="text" placeholder="Website">
                                </div>
                                <textarea placeholder="Comment"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->

@endsection
