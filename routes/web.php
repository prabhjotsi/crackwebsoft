<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
  Route::get('dashboard' , 'App\Http\Controllers\Pages\HomeController@dashboard')->name('dashboard');
  Route::resource('admin/hero-section', 'App\Http\Controllers\Admin\HeroSectionController');
  Route::resource('admin/main-feature', 'App\Http\Controllers\Admin\MainFeatureController');
  Route::resource('admin/feature-section', 'App\Http\Controllers\Admin\FeatureSectionController');
  Route::resource('admin/features', 'App\Http\Controllers\Admin\FeaturesController');
  Route::resource('admin/about-us-section', 'App\Http\Controllers\Admin\AboutUsSectionController');
  Route::resource('admin/about-us-features', 'App\Http\Controllers\Admin\AboutUsFeaturesController');
  Route::resource('admin/fact-section', 'App\Http\Controllers\Admin\FactSectionController');
  Route::resource('admin/our-facts', 'App\Http\Controllers\Admin\OurFactsController');
  Route::resource('admin/main-features-section', 'App\Http\Controllers\Admin\MainFeaturesSectionController');
  Route::resource('admin/services-section', 'App\Http\Controllers\Admin\ServicesSectionController');
  Route::resource('admin/services', 'App\Http\Controllers\Admin\ServicesController');
  Route::resource('admin/team-section', 'App\Http\Controllers\Admin\TeamSectionController');
  Route::resource('admin/testimonials-section', 'App\Http\Controllers\Admin\TestimonialsSectionController');
  Route::resource('admin/team-members', 'App\Http\Controllers\Admin\TeamMembersController');
  Route::resource('admin/testimonials', 'App\Http\Controllers\Admin\TestimonialsController');
  Route::resource('admin/question-section', 'App\Http\Controllers\Admin\QuestionSectionController');
  Route::resource('admin/questions', 'App\Http\Controllers\Admin\QuestionsController');
  Route::resource('admin/contact-section', 'App\Http\Controllers\Admin\ContactSectionController');
  // Navbar Section
  Route::get('admin/nav-bar/{id}/edit', 'App\Http\Controllers\Admin\NavBarController@edit' )->name('nav-bar.edit');
  Route::patch('admin/nav-bar/{id}', 'App\Http\Controllers\Admin\NavBarController@update' )->name('nav-bar.update');
  // Footer Section
  Route::get('admin/footer/{id}/edit', 'App\Http\Controllers\Admin\FooterSectionController@edit' )->name('footer.edit');
  Route::patch('admin/footer/{id}', 'App\Http\Controllers\Admin\FooterSectionController@update' )->name('footer.update');

  // Contacts Section
  Route::get('admin/contacts', 'App\Http\Controllers\Admin\ContactSectionController@index' )->name('contacts.index');

});





// Website Home Page
Route::post('admin/contacts', 'App\Http\Controllers\Admin\ContactSectionController@store' )->name('contacts.store');
Route::get('/' , 'App\Http\Controllers\Pages\HomeController@index_1')->name('home-page.index_1');
Route::get('index-demo-2' , 'App\Http\Controllers\Pages\HomeController@index_2')->name('home-page.index_2');
Route::get('index-demo-3' , 'App\Http\Controllers\Pages\HomeController@index_3')->name('home-page.index_3');
Route::get('about-us' , 'App\Http\Controllers\Pages\HomeController@about_us')->name('about-us-page');
Route::get('services' , 'App\Http\Controllers\Pages\HomeController@services')->name('services-page');
Route::get('faq' , 'App\Http\Controllers\Pages\HomeController@faq')->name('faq-page');
Route::get('pricing' , 'App\Http\Controllers\Pages\HomeController@pricing')->name('pricing-page');
Route::get('contact-us' , 'App\Http\Controllers\Pages\HomeController@contact_us')->name('contact-us-page');
Route::get('/storage/link', function () {
    Artisan::call('storage:link');
});
