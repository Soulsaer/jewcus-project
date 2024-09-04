<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WebHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MetaInformationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\SubCategoryController;
// use App\Http\Controllers\ChieldcategoryController;
use App\Http\Controllers\SitemapXmlController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\JewelryController;
use App\Http\Controllers\BulkOrderController;

use App\Http\Controllers\EnquiryController;


use App\Models\Coupon;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('index');
// });

// Clear route cache
Route::get('/route-cache', function () {
    \Artisan::call('route:cache');
    return 'Routes cache cleared';
});

// Clear config cache
Route::get('/config-cache', function () {
    \Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache
Route::get('/clear-cache', function () {
    \Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cache
Route::get('/view-clear', function () {
    \Artisan::call('view:clear');
    return 'View cache cleared';
});

// Clear cache using reoptimized class
Route::get('/optimize-clear', function () {
    \Artisan::call('optimize:clear');
    return 'View cache cleared';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/orders', [WebHomeController::class, 'ordersList'])->name('orders');
Route::get('/order-tracking/{order_id}', [WebHomeController::class, 'trackOrder'])->name('order.track');

Route::group(['middleware' => ['auth', 'is_admin'], 'prefix' => 'dashboard'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/profile', [App\Http\Controllers\Admin\UserController::class,'profile'])->name('admin.profile');
});

// Home routes
Route::get('/', [WebHomeController::class, 'index'])->name('homeIndex');
Route::get('/products', [WebHomeController::class, 'products'])->name('products');
Route::get('cart', [WebHomeController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [WebHomeController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [WebHomeController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [WebHomeController::class, 'remove'])->name('remove.from.cart');
// Route::get('wishlist', [WebHomeController::class, 'wishlist'])->name('wishlist');

Route::get('userlogin', [WebHomeController::class, 'userlogin'])->name('userlogin');
Route::get('/register', [WebHomeController::class, 'showRegistrationForm'])->name('show-register');
Route::post('/user-register', [WebHomeController::class, 'register'])->name('register');
Route::post('/web-login', [WebHomeController::class, 'webLogin'])->name('web-login');
Route::post('/logout', [WebHomeController::class, 'logout'])->name('logout');


Route::get('blogs', [WebHomeController::class, 'allblogs'])->name('blogs');
Route::get('all-faqs', [WebHomeController::class, 'allfaq'])->name('allfaq');
Route::get('/faqs/{id}', [WebHomeController::class, 'faqShow'])->name('faqs.show');
Route::get('shipping-policy', [WebHomeController::class, 'shipping_policy'])->name('shipping_policy');
Route::get('return-policy', [WebHomeController::class, 'return_policy'])->name('return_policy');
Route::get('about-us', [WebHomeController::class, 'about_us'])->name('about_us');
Route::get('contact-us', [WebHomeController::class, 'contactUs'])->name('contactUs');
Route::get('privacy-policy', [WebHomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('terms-conditions', [WebHomeController::class, 'termsConditions'])->name('termsConditions');



// Fetch Blogs data from the database
// $blogs = DB::table('lastblogs')->get();

// // Iterate through products and register routes
// foreach ($blogs as $blog) {
//     Route::get($blog->slug . '/{id}', [WebHomeController::class, 'singleblogs'])->name('singleblogs');
// }    


// Other routes
Route::get('/about', [WebHomeController::class, 'about']);

// Other routes
Route::post('upload-blog-image', 'BlogController@upload')->name('upload-blog-image'); 
// Route::get('/{slug}', [WebHomeController::class, 'category_details'])->name('category_details');
$categoryRoute = \App\Models\Category::select('name', 'url')->get();
foreach ($categoryRoute as $r) {
    Route::get($r->url, '\App\Http\Controllers\WebHomeController@category_details')->name($r->url);
} 
Route::get('/{slug}/{child_slug}', [WebHomeController::class, 'child_category_details'])->name('child_category_details');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\WebHomeController::class, 'index'])->name('home');

Route::get('{url}', [WebHomeController::class, 'singleproduct'])->name('singleproduct');




