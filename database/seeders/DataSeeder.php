<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\NavBar;
use App\Models\HeroSection;
use App\Models\AboutUsSection;
use App\Models\AboutUsFeature;
use App\Models\ServicesSection;
use App\Models\Service;
use App\Models\FeatureSection;
use App\Models\Feature;
use App\Models\FactSection;
use App\Models\OurFact;
use App\Models\Question;
use App\Models\QuestionSection;
use App\Models\TeamSection;
use App\Models\TeamMember;
use App\Models\MainFeaturesSection;
use App\Models\MainFeature;
use App\Models\TestimonialsSection;
use App\Models\Testimonial;
use App\Models\ContactSection;
use App\Models\FooterSection;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.';

      $user = User::create([
              'name' => 'Mr.Admin',
              'email' => 'admin@admin.com',
              'email_verified_at' => now(),
              'password' =>Hash::make(123456789),
              'remember_token' =>Str::random(20),
            ]);

      // Nav-Bar Data
      NavBar::create([
        'logo_name' => 'Dolatrix',
        'home' => 'Home',
        'home_style_1' => 'Home Style 1',
        'home_style_2' => 'Home Style 2',
        'home_style_3' => 'Home Style 3',
        'about_us' => 'About Us',
        'services' => 'Services',
        'faq' => 'FAQ',
        'contact' => 'Contact'
      ]);

      //  Hero-Section Data
      HeroSection::create([
        'sub_title' => ' Creative Managed IT Solutions Agency ',
        'title' => 'Your IT Security is our top priority with Our Creative',
        'span_title' => 'Cyber Security Solutions.',
        'description' => $description,
      ]);

      // ABout Us Data
      AboutUsSection::create([
        'sub_title' => '  Creative Managed IT Solutions Agency ',
        'title' => 'We Are The Trusted Cyber Security Experts We Keep Things Simple',
        'description' => $description,
      ]);
      for ($i=0; $i <6 ; $i++) {
        AboutUsFeature::create([
          'title' => 'Cyber Security Solutions',
        ]);
      }


      // Services Data
      ServicesSection::create([
        'sub_title' => ' OUR SERVICES ',
        'title' => 'What we speciaized in',
        'description' => $description,
      ]);

      for ($i=0; $i <6 ; $i++) {
        Service::create([
          'title' => 'Networking and Security',
          'description' => $description,
        ]);
      }

      // Features Data
      FeatureSection::create([
        'sub_title' => ' OUR FEATURES ',
        'title' => ' Why Choose us',
        'description' => $description,
      ]);

      for ($i=0; $i <3 ; $i++) {
        Feature::create([
          'title' => 'Dedicated Team',
        ]);
      }

      // Facts Data
      FactSection::create([
        'sub_title' => ' our numbers ',
        'title' => 'Our Fun Facts',
        'description' => '$description',
      ]);
      for ($i=0; $i <3 ; $i++) {
        OurFact::create([
          'title' => ' Projects Completed',
          'number' => '1127',
        ]);
      }

      // FAQ Data
      for ($i=0; $i <4 ; $i++) {
        Question::create([
          'question' => 'Who has access to my Security Records',
          'answer' => $description,
        ]);
      }

      QuestionSection::create([
        'sub_title' => ' Frequently asked ',
        'title' => ' Frequently Questions',
        'description' => $description,
      ]);


      // Team Data
      TeamSection::create([
        'sub_title' => ' Our Team ',
        'title' => 'Awesome Team',
        'description' => $description,
      ]);

      for ($i=0; $i <4 ; $i++) {
        TeamMember::create([
          'name' => 'Monica Ashker',
          'position' => ' Web Developer',
          'social_link' => 'http://www.linkedin.com',
        ]);
      }


      // Main Feature Data
      MainFeaturesSection::create([
        'sub_title' => ' Great Features ',
        'title' => 'Our Main Features',
        'description' => $description,
        'years' => 25,
        'experince' => 'Years of IT & cyber security Experience'
      ]);

      for ($i=0; $i <6 ; $i++) {
        MainFeature::create([
          'title' => 'Security Solutions',
          'description' => $description,
        ]);
      }


      // Testimonials Data
      TestimonialsSection::create([
        'sub_title' => '  OUR TESTIMONIALS  ',
        'title' => 'What Our Client Say',
        'description' => $description,
      ]);

      for ($i=0; $i <3 ; $i++) {
        Testimonial::create([
          'name' => 'Sunny Khan',
          'position' => 'One Of Our Clients',
          'description' => $description,
        ]);
      }

      // Contact Us Data
      ContactSection::create([
        'sub_title' => ' CONTACT US ',
        'title' => 'Contact With Us',
        'description' => $description,
      ]);

      // Footer Data
      FooterSection::create([
        'logo_name' => 'Dolatrix',
        'description' => $description,
        'mail_address' => 'Mailing Address:xx00 E. Union Ave',
        'address' => 'Suite 1100. Denver, CO 80237',
        'phone' => '+999 90932 627',
        'email' => 'support@yourdomain.com',
        'facebook' => 'http://www.facebook.com',
        'twitter' => 'http://www.twitter.com',
        'instagram' => 'http://www.instagram.com',
        'google_plus' => 'http://www.google.com',
        'linkedin' => 'http://www.linkedin.com',
      ]);
    }
}
