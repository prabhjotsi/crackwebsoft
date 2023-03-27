<section class="our_team_area section-padding-0-0 clearfix" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <div class="more-dots justify-content-center fadeInUp" data-wow-delay="0.2s"><span class="gradient-text blue">{{$teamSection->sub_title ?? ''}}</span></div>
                    <h2 class="fadeInUp" data-wow-delay="0.3s">{{$teamSection->title ?? ''}}</h2>
                    <p class="fadeInUp" data-wow-delay="0.4s">{{$teamSection->description ?? ''}}</p>
                </div>
            </div>
        </div>
        <div class="row">
          @foreach ($teammembers as $key => $value)
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="single-team-member hos fadeInUp" data-wow-delay="0.2s">
                <!-- Image -->
                <div class="team-member-thumb hos"><img src="{{isset($value->position) ? asset('storage/' . $value->image) : 'img/team-img/1.png'}}" class="center-block" alt=""></div><!-- Team Info -->
                <div class="team-info">
                  <h5 class="w-text">{{$value->name ?? ''}}</h5>
                  <p class="g-text">{{$value->position ?? ''}}</p>
                </div><!-- Social Icon -->
                <div class="team-social-icon"><a href="{{$value->social_link ?? ''}}"><i class="fa fa-linkedin"></i></a></div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
</section>
