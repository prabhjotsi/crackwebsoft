<section class="features section-padding-100 hos-sec-1 clearfix">
    <div class="container">
        <div class="section-heading text-center">

            <div class="more-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                <span class="gradient-text cyan">{{$ourfact->sub_title ?? ''}}</span>
            </div>
            <h2 class="w-text fadeInUp" data-wow-delay="0.3s">{{$ourfact->title ?? ''}}</h2>
            <p class="g-text fadeInUp" data-wow-delay="0.4s">{{$ourfact->description ?? ''}}</p>
        </div>
        <div class="row align-items-center">

            <div class="col-12">
              @foreach ($facts as $key => $fact)
                <div class="fact-box count-box col-lg-3 col-sm-12 col-xs-12">
                  <div class="inner">
                    <div class="icon-box"><img src="{{isset($fact->image) ? asset('storage/' . $fact->image) : 'img/icons/i1.png'}}" alt=""></div>
                    <div class="content">
                      <div class="count-outer">
                        <span class="count-text counter gradient-text cyan">{{$fact->number ?? ''}}</span>
                      </div>
                      <div class="counter-title w-text">{{$fact->title ?? ''}}</div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</section>
