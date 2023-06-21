<?php


use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\AboutController;
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

Route::get('/', [MainController::class, 'main']);
Route::get('/company-profile', [MainController::class, 'profile'])->name('company.profile');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/about', [MainController::class, 'aboutus'])->name('about');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog/details/{id}', [MainController::class, 'Details'])->name('blog.details');
Route::get('/company-policy', [MainController::class, 'policy'])->name('company.policy');
Route::get('/contact-us', [MainController::class, 'contactus'])->name('contact.us');
Route::post('/contact/store', [MainController::class, 'contactstore'])->name('contact.store');

Route::post('/news/store', [MainController::class, 'news'])->name('news.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//slider route
Route::get('add/slider', [SliderController::class, 'add'])->name('add.slider');
Route::post('store/slider', [SliderController::class, 'store'])->name('store.slider');
Route::get('all/slider', [SliderController::class, 'all'])->name('all.slider');
Route::get('edit/slider/{id}', [SliderController::class, 'edit'])->name('edit.slider');
Route::get('delete/slider/{id}', [SliderController::class, 'delete'])->name('delete.slider');
Route::post('update/slider/{id}', [SliderController::class, 'update'])->name('update.slider');



//blog route
Route::get('add/blog', [BlogController::class, 'add'])->name('add.blog');
Route::post('store/blog', [BlogController::class, 'store'])->name('store.blog');
Route::get('all/blog', [BlogController::class, 'all'])->name('all.blog');
Route::get('edit/blog/{id}', [BlogController::class, 'edit'])->name('edit.blog');
Route::get('delete/blog/{id}', [BlogController::class, 'delete'])->name('delete.blog');
Route::post('update/blog/{id}', [BlogController::class, 'update'])->name('update.blog');


//number route
Route::get('add/number', [NumberController::class, 'add'])->name('add.number');
Route::post('store/number', [NumberController::class, 'store'])->name('store.number');
Route::get('all/number', [NumberController::class, 'all'])->name('all.number');
Route::get('edit/number/{id}', [NumberController::class, 'edit'])->name('edit.number');
Route::get('delete/number/{id}', [NumberController::class, 'delete'])->name('delete.number');
Route::post('update/number/{id}', [NumberController::class, 'update'])->name('update.number');

//site setting
//site setting
Route::get('site/setting', [SettingController::class, 'sitesetting'])->name('site.setting');
Route::post('/update/setting',[SettingController::class,'update'])->name('update.setting');

Route::get('/all/contact',[SettingController::class,'allContact'])->name('all.contact');
Route::get('delete/contact/{id}',[SettingController::class,'delete'])->name('delete.contact');
Route::get('/all/newslater',[SettingController::class,'allnewslater'])->name('all.newslater');
Route::get('newslater/delete/{id}',[SettingController::class,'newslaterDelete'])->name('newslater.delete');

//service route
Route::get('add/service', [ServiceController::class, 'add'])->name('add.service');
Route::post('store/service', [ServiceController::class, 'store'])->name('store.service');
Route::get('all/service', [ServiceController::class, 'all'])->name('all.service');
Route::get('edit/service/{id}', [ServiceController::class, 'edit'])->name('edit.service');
Route::get('delete/service/{id}', [ServiceController::class, 'delete'])->name('delete.service');
Route::post('update/service/{id}', [ServiceController::class, 'update'])->name('update.service');

//about route
Route::get('about/us', [AboutController::class, 'aboutus'])->name('about.us');
Route::post('/update/about',[AboutController::class,'aboutupdate'])->name('update.about');


