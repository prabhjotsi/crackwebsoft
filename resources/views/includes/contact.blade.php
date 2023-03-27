<div class="contact_us_area section-padding-100-0" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <div class="more-dots justify-content-center fadeInUp" data-wow-delay="0.2s"><span class="gradient-text blue">{{$contact->sub_title ?? ''}}</span></div>
                    <h2 class="fadeInUp" data-wow-delay="0.3s">{{$contact->title ?? ''}}</h2>
                    <p class="fadeInUp" data-wow-delay="0.4s">{{$contact->description ?? ''}}</p>
                </div>
            </div>
        </div><!-- Contact Form -->
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="contact_form green">
                    <form action="{{ route('contacts.store') }}" method="post" id="main_contact_form" novalidate>
                      {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div id="success_fail_info"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="group fadeInUp" data-wow-delay="0.2s"><input type="text" name="name" id="name" required><span class="highlight"></span><span class="bar"></span><label class="w-text">{{__('Name')}}</label></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="group fadeInUp" data-wow-delay="0.3s"><input type="text" name="email" id="email" required><span class="highlight"></span><span class="bar"></span><label class="w-text">{{__('Email')}}</label></div>
                            </div>
                            <div class="col-12">
                                <div class="group fadeInUp" data-wow-delay="0.4s"><input type="text" name="subject" id="subject" required><span class="highlight"></span><span class="bar"></span><label class="w-text">{{__('Subject')}}</label></div>
                            </div>
                            <div class="col-12">
                                <div class="group fadeInUp" data-wow-delay="0.5s"><textarea name="message" id="message" required></textarea><span class="highlight"></span><span class="bar"></span><label class="w-text">{{__('Message')}}</label></div>
                            </div>
                            <div class="col-12 text-center fadeInUp" data-wow-delay="0.6s"><button type="submit" class="btn more-btn">{{__('Send Message')}}</button></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-s"><img src="{{isset($contact->image) ? asset('storage/' . $contact->image) : 'img/core-img/about2.png'}}"></div>
        </div>
    </div>
</div>
