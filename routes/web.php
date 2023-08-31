<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\BannerHomePageController;
use App\Http\Controllers\FacilityHomePageController;
use App\Http\Controllers\PartnersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Send Email Route Contact Us
Route::post('/user-contact-us', [SubscriberController::class, 'contactUS'])->name('user.contactUs');



// ================== Front End Routes ==================
Route::get('/', [FrontEndController::class, 'index'])->name('FrontEnd.home');
Route::get('/facility', [FrontEndController::class, 'indexFacility'])->name('FrontEnd.facility');
// Buttons on Navbar Home Page
Route::get('/facility-details', [FrontEndController::class, 'indexFacilityDetailsHome'])->name('FrontEnd.facilityDetailsHome');
Route::get('/facility-details/{id}', [FrontEndController::class, 'indexFacilityDetails'])->name('FrontEnd.facilityDetails');
Route::get('/about-us', [FrontEndController::class, 'indexAboutUs'])->name('FrontEnd.aboutUs');
Route::get('/contact-us', [FrontEndController::class, 'indexContactUs'])->name('FrontEnd.contactUs');
// Gallery Section
Route::get('/gallery', [FrontEndController::class, 'indexGallery'])->name('FrontEnd.gallery');





// ================== Back End Routes ==================
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// Home Page Section
Route::get('home-page', function () {
    return view('Dashboard.HomePageEdit');
})->name('home-page.index');
// Banner Home Page Section
Route::resource('home-page-banner', BannerHomePageController::class);
// Facility Home Page Section
Route::resource('home-page-facility', FacilityHomePageController::class);
// Facilities Section
Route::resource('facilities', FacilitiesController::class);
Route::delete('/facilities-delete-multiple', [FacilitiesController::class, 'deleteMultiple'])->name('facilities-dash-board-delete-multiple');
Route::get('/delete-facility-image/{imageName}', [FacilitiesController::class, 'deleteSelectedImage'])->name('deleteSelectedImage');
Route::post('/add-facility-image/{id}',[FacilitiesController::class, 'addImageFacility'] )->name('addImageFacility');
// About us Section
Route::resource('about-us-dashboard', AboutUsController::class);
// Contact us Section
Route::resource('contact-us-dashboard', ContactUsController::class);
// Subscriber Section
Route::get('/contact-us-users', [SubscriberController::class , 'getContactUsUsers'])->name('getContactUsUsers.index');
// Gallery Section
Route::resource('gallery-dashboard', GalleryController::class);
// Partners Section
Route::resource('partners', PartnersController::class);
Route::delete('/partners-dash-board-delete-multiple', [PartnersController::class, 'deleteMultiple'])->name('partners-dash-board-delete-multiple');

