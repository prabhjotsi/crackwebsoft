<div class="hos-sec-1 section-padding-100-85" id="faq">
    <div class="container">
        <div class="section-heading text-center">
            <div class="more-dots justify-content-center fadeInUp" data-wow-delay="0.2s"><span class="gradient-text cyan">{{$question->sub_title ?? ''}}</span></div>
            <h2 class="w-text fadeInUp" data-wow-delay="0.3s"> {{$question->title ?? ''}}</h2>
            <p class="g-text fadeInUp" data-wow-delay="0.4s">{{$question->description ?? ''}}</p>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-12"><img src="{{isset($question->image) ? asset('storage/' . $question->image) : 'img/core-img/about3.png'}}" class="center-block img-responsive"></div>
            <div class="col-12 col-lg-6 col-md-12">
                <div class="more-btn-group hos mt-s ">
                    <dl style="margin-bottom:0">
                      @foreach ($questions as $key => $value)
                        <!-- Single FAQ Area --><dt class="v2 wave fadeInUp" data-wow-delay="0.2s">{{$value->question ?? ''}}</dt>
                        <dd class="fadeInUp" data-wow-delay="0.3s">
                          <p>{{$value->answer ?? ''}}</p>
                          </dd>
                      @endforeach
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
