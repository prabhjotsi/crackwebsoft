<section class="clients_testimonials_area bg-img section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <div class="more-dots justify-content-center fadeInUp" data-wow-delay="0.2s"><span class="gradient-text blue">{{$testimonial->sub_title ?? ''}}</span></div>
                    <h2 class=" wow fadeInUp" data-wow-delay="0.3s">{{$testimonial->title ?? ''}}</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">{{$testimonial->description ?? ''}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cotainer-fluid">
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-12 col-md-10 col-xs-10 offset-xs-1">
                <div class="client_slides owl-carousel">
                  @foreach ($testimonials as $key => $value)
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                      <div class="icon_wrapper"><i class="fa fa-quote-right"></i></div><!-- Testimonial Image -->
                      <div class="testimonial_image"><img src="{{isset($value->image) ? asset('storage/' . $value->image) : 'img/test-img/1.jpg'}}" alt=""></div><!-- Testimonial Feedback Text -->
                      <div class="testimonial-description">
                        <div class="testimonial_text">
                          <p>{{$value->description ?? ''}}</p>
                        </div><!-- Admin Text -->
                        <div class="admin_text">
                          <h5>{{$value->name ?? ''}}</h5>
                          <p>{{$value->position ?? ''}}</p>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
