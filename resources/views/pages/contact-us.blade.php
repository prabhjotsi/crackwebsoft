@extends('layouts.master')
@section('title' , $navbar->contact ?? 'Contact Us')
@section('content')
<!-- ##### Welcome Area Start ##### -->
<div class="breadcumb-area clearfix auto-init">

    <!-- breadcumb content -->
    <div class="breadcumb-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                        <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">{{ $navbar->contact ?? '' }}</h2>
                        <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                            <li class="breadcrumb-item"><a href="{{ route('home-page.index_1') }}">{{ $navbar->home ?? '' }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $navbar->contact ?? '' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Welcome Area End ##### -->

<!-- ##### Contact Form Area Start ##### -->
<section class="section-padding-100 contact_us_area" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <div class="more-dots justify-content-center fadeInUp" data-wow-delay="0.2s"><span class="gradient-text blue">{{$contact->sub_title ?? ''}}</span></div>
                    <h2 class="wow fadeInUp d-blue" data-wow-delay="0.3s">{{$contact->title ?? ''}}</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">{{$contact->description ?? ''}}</p>
                </div>
            </div>
        </div><!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="contact_form">
                    <form action="{{ route('contacts.store') }}" method="post" id="main_contact_form" novalidate>
                      {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div id="success_fail_info"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="group wow fadeInUp" data-wow-delay="0.2s"><input type="text" name="name" id="name" required><span class="highlight"></span><span class="bar"></span><label>{{__('Name')}}</label></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="group wow fadeInUp" data-wow-delay="0.3s"><input type="text" name="email" id="email" required><span class="highlight"></span><span class="bar"></span><label>{{__('Email')}}</label></div>
                            </div>
                            <div class="col-12">
                                <div class="group wow fadeInUp" data-wow-delay="0.4s"><input type="text" name="subject" id="subject" required><span class="highlight"></span><span class="bar"></span><label>{{__('Subject')}}</label></div>
                            </div>
                            <div class="col-12">
                                <div class="group wow fadeInUp" data-wow-delay="0.5s"><textarea name="message" id="message" required></textarea><span class="highlight"></span><span class="bar"></span><label>{{__('Message')}}</label></div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s"><button type="submit" class="btn more-btn">{{__('Send Message')}}</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Form Area End ##### -->

@endsection
