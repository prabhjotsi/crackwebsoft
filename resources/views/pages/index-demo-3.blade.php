@extends('layouts.master')
@section('title' , __('Dolatrix - Multipurpose Template'))
@section('content')

  <!-- ##### Welcome Area Start ##### -->
  <section class="hero-section hos-bg-1 section-padding" id="home">

    <div class="hero-section-content">

        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Welcome Content -->
                <div class="col-12 col-lg-8 offset-lg-2 col-md-12">
                    <div class="welcome-content text-center">
                        <div class="promo-section">
                            <h3 class="special-head gradient-text cyan">{{$herosection->sub_title ?? ''}}</h3>
                        </div>
                        <h1 class="wow fadeInUp w-text" data-wow-delay="0.2s"><span class="gradient-text cyan">{{$herosection->span_title ?? ''}}</span> {{__('&')}} {{$herosection->title ?? ''}}</h1>
                        <p class="wow fadeInUp g-text" data-wow-delay="0.3s">{{$herosection->description ?? ''}}</p>
                        <div class="more-btn-group fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('contact-us-page') }}" class="btn more-btn mr-3">contact us</a>
                            <a href="#" class="btn more-btn"> Learn more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
  <!-- ##### Welcome Area End ##### -->

  <div class="clearfix"></div>

  <!-- ##### About Us Area Start ##### -->
  @include('includes.about-us')
  <!-- ##### About Us Area End ##### -->

  <!-- ##### Main Features Area Start ##### -->
  @include('includes.main-features')
  <!-- ##### Main Features Area End ##### -->

  <!-- ##### Our Facts Area Start ##### -->
  @include('includes.our-facts')
  <!-- ##### Our Facts Area End ##### -->

  <!-- ##### Features Area Start ##### -->
  @include('includes.features')
  <!-- ##### Features Area End ##### -->

  <div class="double-bg-2">
    <!-- ##### Services Area Start ##### -->
    @include('includes.services')
    <!-- ##### Services Area End ##### -->

    <!-- ##### Team Members Area Start ##### -->
    @include('includes.team')
    <!-- ##### Team Members Area End ##### -->
  </div>

  <div class="clearfix"></div>

  <!-- ##### Questions Area Start ##### -->
  @include('includes.questions')
  <!-- ##### Questions Area End ##### -->

  <!-- ##### Testimonial Area Start ##### -->
  @include('includes.testimonials')
  <!-- ##### Testimonial Area End ##### -->

  @section('footer-content')
    <!-- ##### Contact Us Area Start ##### -->
    @include('includes.contact')
    <!-- ##### Contact Us Area End ##### -->

  @endsection

@endsection
