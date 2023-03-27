<section class="our_services_area section-padding-100-0 clearfix" id="services">
    <div class="container">
        <div class="section-heading text-center">
            <div class="more-dots justify-content-center fadeInUp" data-wow-delay="0.2s"><span class="gradient-text cyan">{{$servicesection->sub_title ?? ''}}</span></div>
            <h2 class="w-text fadeInUp" data-wow-delay="0.3s">{{$servicesection->title ?? ''}}</h2>
            <p class="g-text fadeInUp" data-wow-delay="0.4s">{{$servicesection->description ?? ''}}</p>
        </div>
        <div class="row">
          @foreach ($services as $key => $value)
            <div class="col-12 col-md-6 col-lg-4">
              <!-- Content -->
              <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                <!-- Icon -->
                <div class="service_icon"><img src="{{isset($value->image) ? asset('storage/' . $value->image) : 'img/icons/s1.png'}}" class="width-90"></div>
                <h6>{{$value->title ?? ''}}</h6>
                <p>{{$value->description ?? ''}}</p>
              </div>
            </div>
          @endforeach
        </div>
    </div>
</section>
