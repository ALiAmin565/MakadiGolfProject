<?php

use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\HolesController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeTestController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\MemberShipController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\JohnSanfordController;
use App\Http\Controllers\BannerHomePageController;
use App\Http\Controllers\FacilityHomePageController;

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
// Membership Section
// Route::get('/membership', [FrontEndController::class, 'indexMembership'])->name('FrontEnd.membership');
Route::resource('member-ship', MemberShipController::class);
// Booking Section
Route::resource('book', BookingController::class);
// John Sanford
Route::get('/johnSanford', [FrontEndController::class, 'indexJohnSanford'])->name('FrontEnd.johnSanford');
// Full Details John Sanford
Route::get('/golf-course', [FrontEndController::class, 'indexJohnSanfordDetails'])->name('FrontEnd.johnSanfordDetails');
// frontEnd.singleDetailsJohnSanford
Route::get('/golf-course/{id}', [FrontEndController::class, 'singleDetailsJohnSanford'])->name('frontEnd.singleDetailsJohnSanford');

// ================== End Front End Routes ==================



// ================== Back End Routes ==================
// Add Group route with middleware auth
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin-dash-board', function () {
        $bookings=Booking::paginate(10);
        return view('dashboard', get_defined_vars());
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
    Route::post('/add-facility-image/{id}', [FacilitiesController::class, 'addImageFacility'])->name('addImageFacility');
    // About us Section
    Route::resource('about-us-dashboard', AboutUsController::class);
    Route::get('/about-us-icons', [AboutUsController::class, 'showEditIconPage'])->name('showEditIconPage');
    Route::put('/about-us-icons', [AboutUsController::class, 'updateEditIconPage'])->name('updateEditIconPage');
    // Contact us Section
    Route::resource('contact-us-dashboard', ContactUsController::class);
    // Subscriber Section
    Route::get('/contact-us-users', [SubscriberController::class, 'getContactUsUsers'])->name('getContactUsUsers.index');
    // Gallery Section
    Route::resource('gallery-dashboard', GalleryController::class);
    // Partners Section
    Route::resource('partners', PartnersController::class);
    Route::delete('/partners-dash-board-delete-multiple', [PartnersController::class, 'deleteMultiple'])->name('partners-dash-board-delete-multiple');
    // Awards Section
    Route::resource('awards', AwardController::class);
    Route::delete('/awards-dash-board-delete-multiple', [AwardController::class, 'deleteMultiple'])->name('awards-dash-board-delete-multiple');
    // john-sanford Holes Section
    Route::resource('john-sanford', JohnSanfordController::class);
    Route::get('john-sanford-pdfs', [JohnSanfordController::class , 'uploadPdfs' ])->name('john-sanford-pdfs-upload');
    Route::post('john-sanford-pdfs', [JohnSanfordController::class , 'storePdfs' ])->name('john-sanford-pdfs-store');
    Route::resource('john-sanford-holes', HolesController::class);
    Route::delete('/holes-dash-board-delete-multiple', [HolesController::class, 'deleteMultiple'])->name('holes-dash-board-delete-multiple');
    // team 
    Route::resource('team', TeamController::class);
    // FAQ
    Route::resource('faq', FaqController::class);
    Route::delete('/faq-delete-multiple', [FaqController::class, 'deleteMultiple'])->name('faq-dash-board-delete-multiple');


});

Auth::routes();
// ================== End Back End Routes ==================

// Add Gate route with middleware auth





Route::middleware('can:isAdmin')->group(function () {
    Route::get('logActivity',[HomeTestController::class, 'logActivity'])->name('logActivity');
});