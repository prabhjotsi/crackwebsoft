@extends('layouts.master')
@section('title' , $navbar->services ?? 'Services')
@section('content')
  <!-- ##### Welcome Area Start ##### -->
  <div class="breadcumb-area clearfix auto-init">

      <!-- breadcumb content -->
      <div class="breadcumb-content">
          <div class="container h-100">
              <div class="row h-100 align-items-center">
                  <div class="col-12">
                      <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                          <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">{{ $navbar->services ?? '' }}</h2>
                          <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                              <li class="breadcrumb-item"><a href="{{ route('home-page.index_1') }}">{{ $navbar->home ?? '' }}</a></li>
                              <li class="breadcrumb-item active" aria-current="page">{{ $navbar->services ?? '' }}</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- ##### Welcome Area End ##### -->

  <!-- ##### Services Area Start ##### -->
  @include('includes.services')
  <!-- ##### Services Area End ##### -->

  <!-- ##### Our Facts Area Start ##### -->
  @include('includes.our-facts')
  <!-- ##### Our Facts Area End ##### -->

  @section('footer-content')
    <!-- ##### Team Members Area Start ##### -->
    @include('includes.team')
    <!-- ##### Team Members Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
    @include('includes.testimonials')
    <!-- ##### Testimonial Area End ##### -->

  @endsection


@endsection
