@extends('layouts.website')
@section('content')
    <div class="hero overlay inner-page">
        <img src="{{asset('template')}}/images/blob.svg" alt="" class="img-fluid blob">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">{{ $mt }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
                    <h2 class="heading text-primary">Our Members</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </div>
            </div>

            <div class="row">
                @foreach($members as $member)
                <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
                    <img src="{{ asset($member->image) }}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                    <h5 class="text-black">{{ $member->name }}</h5>
                    <p>{{ Str::limit($member->brief_bio, 300) }} </p>
                </div>
                @endforeach
                {{ $members->render() }}
            </div>

        </div>
    </div>

@endsection
