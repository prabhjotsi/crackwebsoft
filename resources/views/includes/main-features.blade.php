<section class="what-we-do circle-m section-padding-100">
    <div class="container">
        <div class="section-heading text-center">
            <div class="more-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s"><span class="gradient-text blue">{{$mainfeature->sub_title ?? ''}}</span></div>
            <h2 class="wow fadeInUp" data-wow-delay="0.3s">{{$mainfeature->title ?? ''}}</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s">{{$mainfeature->description ?? ''}}</p>
        </div>
        <div class="clearfix"></div>
        <div class="outer">
            <!--Logo-->
            <div class="inner-circle"><a href="#"><img class="phone" src="img/core-img/avatar.png" alt="image"></a>
                <div class="bottom-bar">
                    <div class="exp-wrapper d-flex">
                        <div class="exp-years">
                            <h3 class="years gradient-text cyan">{{$mainfeature->years ?? ''}}</h3>
                        </div>
                        <div class="">
                            <p class="w-text">{{$mainfeature->experince ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  @foreach ($mainfeatures1 as $key => $value)
                    <!--Service Box-->
                    <div class="service-box-three">
                      <div class="inner-box">
                        <div class="icon-box"><img src="{{isset($value->image) ? asset('storage/' . $value->image) : 'img/icons/feature-1.png'}}"></div>
                        <h3><a href="services-single.html">{{$value->title ?? ''}}</a></h3>
                        <div class="text"> {{$value->description ?? ''}} </div>
                      </div>
                    </div>
                  @endforeach
                </div>
                <!--Right Column-->
                <div class="right-column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                  @foreach ($mainfeatures2 as $key => $value)
                    <!--Service Box-->
                    <div class="service-box-four">
                      <div class="inner-box">
                        <div class="icon-box"><img src="{{isset($value->image) ? asset('storage/' . $value->image) : 'img/icons/feature-4.png'}}"></div>
                        <h3><a href="services-single.html">{{$value->title ?? ''}}</a></h3>
                        <div class="text">{{$value->description ?? ''}}</div>
                      </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
