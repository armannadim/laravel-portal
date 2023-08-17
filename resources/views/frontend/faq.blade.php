@extends('layouts.website')
@section('content')
    <style >
        .section_padding_130 {
            padding-top: 130px;
            padding-bottom: 130px;
        }
        .faq_area {
            position: relative;
            z-index: 1;
            background-color: #f5f5ff;
        }

        .faq-accordian {
            position: relative;
            z-index: 1;
        }
        .faq-accordian .card {
            position: relative;
            z-index: 1;
            margin-bottom: 1.5rem;
        }
        .faq-accordian .card:last-child {
            margin-bottom: 0;
        }
        .faq-accordian .card .card-header {
            background-color: #ffffff;
            padding: 0;
            border-bottom-color: #ebebeb;
        }
        .faq-accordian .card .card-header h6 {
            cursor: pointer;
            padding: 1.75rem 2rem;
            color: #3f43fd;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .faq-accordian .card .card-header h6 span {
            font-size: 1.5rem;
        }
        .faq-accordian .card .card-header h6.collapsed {
            color: #070a57;
        }
        .faq-accordian .card .card-header h6.collapsed span {
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }
        .faq-accordian .card .card-body {
            padding: 1.75rem 2rem;
        }
        .faq-accordian .card .card-body p:last-child {
            margin-bottom: 0;
        }

        @media only screen and (max-width: 575px) {
            .support-button p {
                font-size: 14px;
            }
        }

        .support-button i {
            color: #3f43fd;
            font-size: 1.25rem;
        }
        @media only screen and (max-width: 575px) {
            .support-button i {
                font-size: 1rem;
            }
        }

        .support-button a {
            text-transform: capitalize;
            color: #2ecc71;
        }
        @media only screen and (max-width: 575px) {
            .support-button a {
                font-size: 13px;
            }
        }
    </style>
    <div class="hero overlay inner-page">
        <img src="{{ asset('template') }}/images/blob.svg" alt="" class="img-fluid blob">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">FAQ</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-halfs py-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center aos-init aos-animate mt-5">
                    <div class="faq_area section_padding_130" id="faq">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <!-- Section Heading-->
                                    <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <h3><span>Frequently </span> Asked Questions</h3>
                                        <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <!-- FAQ Area-->
                                <div class="col-12 col-sm-10 col-lg-10">
                                    <div class="accordion faq-accordian" id="faq">

                                        @foreach($faqs as $faq)
                                            <div class="accordion-item text-left">
                                                <h2 class="accordion-header" id="flush-headingOne{{ $faq->id }}">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{ $faq->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        {{ $faq->question }}
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne{{ $faq->id }}" data-bs-parent="#faq">
                                                    <div class="accordion-body" style="text-align: left;">{{ $faq->answer }}</div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <!-- Support Button-->
                                    <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                        <i class="lni-emoji-sad"></i>
                                        <p class="mb-0 px-2">Can't find your answers?</p>
                                        <a href="{{ route('contact') }}"> Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
