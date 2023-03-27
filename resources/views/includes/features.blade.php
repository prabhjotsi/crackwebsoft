<section class="hos-features section-padding-100-0" style="padding-bottom:70px">

    <div class="section-heading text-center">

        <div class="more-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
            <span class="gradient-text blue">{{$featuresection->sub_title ?? ''}}</span>
        </div>
        <h2 class="wow fadeInUp" data-wow-delay="0.3s">{{$featuresection->title ?? ''}}</h2>
        <p class="wow fadeInUp" data-wow-delay="0.4s">{{$featuresection->description ?? ''}}</p>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($features as $key => $feature)
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="feature_single_content text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon_wrapper">
                        <img src="{{isset($feature->icon) ? asset('storage/' . $feature->icon) : 'img/icons/i1.png'}}" alt="">
                    </div>
                    <!-- Icon -->
                    <div class="service_img">
                        <img src="{{isset($feature->image) ? asset('storage/' . $feature->image) : 'img/features/feature-1.jpg'}}" class="" alt="">
                    </div>
                    <h6 class="feature-info">{{$feature->title ?? ''}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
