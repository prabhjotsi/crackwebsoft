<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NavBar;
use App\Models\User;
use App\Models\Service;
use App\Models\ServicesSection;
use App\Models\AboutUsSection;
use App\Models\AboutUsFeature;
use App\Models\ContactSection;
use App\Models\FactSection;
use App\Models\Feature;
use App\Models\FeatureSection;
use App\Models\FooterSection;
use App\Models\HeroSection;
use App\Models\MainFeature;
use App\Models\MainFeaturesSection;
use App\Models\OurFact;
use App\Models\Question;
use App\Models\QuestionSection;
use App\Models\TeamMember;
use App\Models\TeamSection;
use App\Models\Testimonial;
use App\Models\TestimonialsSection;
use App\Models\ContactUs;

class HomeController extends Controller
{

    /*===================================
       Display Dashboard for admin panel
    =====================================*/
    public function dashboard()
    {
      $services = Service::all()->count();
      $team_members = TeamMember::all()->count();
      $mainfeatures = MainFeature::all()->count();
      $contacts = ContactUs::all()->count();
      $team_member = TeamMember::latest()->take(5)->get();
      return view('admin.dashboard' , compact('services','team_member','team_members','contacts','mainfeatures'));
    }

    /*===================================
       Display Home page For (Demo one)
    =====================================*/
    public function index_1()
    {
      $navbar = NavBar::first();
      $herosection = HeroSection::first();
      $aboutsection = AboutUsSection::first();
      $featuresection = FeatureSection::first();
      $features = Feature::all();
      $aboutfeatures = AboutUsFeature::all();
      $ourfact = FactSection::first();
      $facts = OurFact::all();
      $mainfeature = MainFeaturesSection::first();
      $count = MainFeature::all()->count();
      $count1 = intval($count / 2);
      $count2 = $count - $count1;
      $mainfeatures1 = MainFeature::take($count2)->get();
      $mainfeatures2 = MainFeature::latest()->take($count1)->get();
      $servicesection = ServicesSection::first();
      $services = Service::all();
      $teamSection = TeamSection::first();
      $teammembers = TeamMember::all();
      $question = QuestionSection::first();
      $questions = Question::all();
      $testimonial = TestimonialsSection::first();
      $testimonials = Testimonial::all();
      $contact = ContactSection::first();
      $footer = FooterSection::first();
      return view('pages.index-demo-1' , compact('navbar' , 'herosection' , 'aboutsection' , 'aboutfeatures' , 'featuresection' , 'features' , 'ourfact' , 'facts' , 'mainfeature' , 'mainfeatures1' , 'mainfeatures2' , 'servicesection' , 'services' , 'teamSection' , 'teammembers' , 'question' , 'questions' , 'testimonial' , 'testimonials' , 'contact' , 'footer'
     ));
    }


    /*===================================
       Display Home page For (Demo Two)
    =====================================*/
    public function index_2()
    {
      $navbar = NavBar::first();
      $herosection = HeroSection::first();
      $mainfeature = MainFeaturesSection::first();
      $count = MainFeature::all()->count();
      $count1 = intval($count / 2);
      $count2 = $count - $count1;
      $mainfeatures1 = MainFeature::take($count2)->get();
      $mainfeatures2 = MainFeature::latest()->take($count1)->get();
      $ourfact = FactSection::first();
      $facts = OurFact::all();
      $aboutsection = AboutUsSection::first();
      $aboutfeatures = AboutUsFeature::all();
      $featuresection = FeatureSection::first();
      $features = Feature::all();
      $servicesection = ServicesSection::first();
      $services = Service::all();
      $teamSection = TeamSection::first();
      $teammembers = TeamMember::all();
      $question = QuestionSection::first();
      $questions = Question::all();
      $testimonial = TestimonialsSection::first();
      $testimonials = Testimonial::all();
      $contact = ContactSection::first();
      $footer = FooterSection::first();
      return view('pages.index-demo-2' , compact('navbar' , 'herosection' , 'aboutsection' ,
       'aboutfeatures' , 'featuresection' , 'features' , 'ourfact', 'facts' , 'mainfeature' , 'mainfeatures1' , 'mainfeatures2' , 'servicesection' , 'services' , 'teamSection' , 'teammembers' , 'question' , 'questions' , 'testimonial' , 'testimonials' , 'contact' , 'footer'
     ));
    }


    /*===================================
       Display Home page For (Demo three)
    =====================================*/
    public function index_3()
    {
      $navbar = NavBar::first();
      $herosection = HeroSection::first();
      $aboutsection = AboutUsSection::first();
      $aboutfeatures = AboutUsFeature::all();
      $mainfeature = MainFeaturesSection::first();
      $count = MainFeature::all()->count();
      $count1 = intval($count / 2);
      $count2 = $count - $count1;
      $mainfeatures1 = MainFeature::take($count2)->get();
      $mainfeatures2 = MainFeature::latest()->take($count1)->get();
      $ourfact = FactSection::first();
      $facts = OurFact::all();
      $featuresection = FeatureSection::first();
      $features = Feature::all();
      $servicesection = ServicesSection::first();
      $services = Service::all();
      $teamSection = TeamSection::first();
      $teammembers = TeamMember::all();
      $question = QuestionSection::first();
      $questions = Question::all();
      $testimonial = TestimonialsSection::first();
      $testimonials = Testimonial::all();
      $contact = ContactSection::first();
      $footer = FooterSection::first();
      return view('pages.index-demo-3' , compact('navbar' , 'herosection' , 'aboutsection' ,
       'aboutfeatures' , 'featuresection' , 'features' , 'ourfact' , 'facts' , 'mainfeature' , 'mainfeatures1' , 'mainfeatures2' , 'servicesection' , 'services' , 'teamSection' , 'teammembers' , 'question' , 'questions' , 'testimonial' , 'testimonials' , 'contact' , 'footer'
     ));
    }


    /*===================================
           Display About us page
    =====================================*/
    public function about_us()
    {
      $navbar = NavBar::first();
      $aboutsection = AboutUsSection::first();
      $aboutfeatures = AboutUsFeature::all();
      $featuresection = FeatureSection::first();
      $features = Feature::all();
      $ourfact = FactSection::first();
      $facts = OurFact::all();
      $teamSection = TeamSection::first();
      $teammembers = TeamMember::all();
      $testimonial = TestimonialsSection::first();
      $testimonials = Testimonial::all();
      $footer = FooterSection::first();
      return view('pages.about-us' , compact('navbar' , 'aboutsection' ,
       'aboutfeatures' , 'featuresection' , 'features' , 'ourfact' , 'facts' , 'teamSection' , 'teammembers' , 'testimonial' , 'testimonials' , 'footer'
     ));
    }


    /*===================================
           Display Services page
    =====================================*/
    public function services()
    {
      $navbar = NavBar::first();
      $servicesection = ServicesSection::first();
      $services = Service::all();
      $ourfact = FactSection::first();
      $facts = OurFact::all();
      $teamSection = TeamSection::first();
      $teammembers = TeamMember::all();
      $testimonial = TestimonialsSection::first();
      $testimonials = Testimonial::all();
      $footer = FooterSection::first();
      return view('pages.services' , compact('navbar' , 'ourfact' , 'facts' ,  'servicesection' , 'services' , 'teamSection' , 'teammembers' , 'testimonial' , 'testimonials' , 'footer'
     ));
    }


    /*===================================
           Display FAQ page
    =====================================*/
    public function faq()
    {
      $navbar = NavBar::first();
      $mainfeature = MainFeaturesSection::first();
      $count = MainFeature::all()->count();
      $count1 = intval($count / 2);
      $count2 = $count - $count1;
      $mainfeatures1 = MainFeature::take($count2)->get();
      $mainfeatures2 = MainFeature::latest()->take($count1)->get();
      $question = QuestionSection::first();
      $questions = Question::all();
      $footer = FooterSection::first();
      return view('pages.faq' , compact('navbar' , 'mainfeatures1' , 'mainfeatures2' , 'mainfeature' , 'question' , 'questions' , 'footer'
     ));
    }


    /*===================================
           Display Contact Us page
    =====================================*/
    public function contact_us()
    {
      $navbar = NavBar::first();
      $contact = ContactSection::first();
      $footer = FooterSection::first();
      return view('pages.contact-us' , compact('navbar' , 'contact' , 'footer'));
    }

    /*==================================
         Display chart for new vistors
    =====================================*/
    // public function chartNewVistors()
    // {
    //     $dayOfTheWeek = [] ; $newVistors = [] ;
    //
    //     for ($i=0; $i <7 ; $i++) {
    //         $dayOfTheWeek[] = Carbon::now()->subDays($i)->format('D');
    //         $subscribes = Subscribe::all();
    //         $count = 0 ;
    //         foreach ($subscribes as $key => $value) {
    //           if (Carbon::parse($value->created_at)->format('Y-m-d') == Carbon::now()->subDays($i)->format('Y-m-d')) {
    //             $count += 1 ;
    //           }
    //         }
    //         $newVistors[] = $count;
    //     }
    //     return response()->json([ 'dayOfTheWeek' => $dayOfTheWeek , 'newVistors' => $newVistors ]);
    // }

}
