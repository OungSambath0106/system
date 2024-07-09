<?php

use App\Models\Course;
use App\Models\Category;
use App\Models\MenuCategory;
use App\helpers\ImageManager;
use App\Models\BoothCategory;
use App\Models\BusinessSetting;
use App\Models\PartnerCategory;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Web\VisitorController;
use App\Http\Controllers\Backends\BlogController;
use App\Http\Controllers\Backends\RoleController;
use App\Http\Controllers\Backends\UserController;
use App\Http\Controllers\Web\ExhibitorController;
use App\Http\Controllers\Backends\BoothController;
use App\Http\Controllers\Backends\EventController;
use App\Http\Controllers\Backends\MediaController;
use App\Http\Controllers\Backends\MovieController;
use App\Http\Controllers\Web\ExhibitionController;
use App\Http\Controllers\Backends\CourseController;
use App\Http\Controllers\Backends\LessonController;
use App\Http\Controllers\Backends\NoticeController;
use App\Http\Controllers\Backends\SliderController;
use App\Http\Controllers\Backends\ContactController;
use App\Http\Controllers\Backends\ProductController;
use App\Http\Controllers\Backends\CategoryController;
use App\Http\Controllers\Backends\LanguageController;
use App\Http\Controllers\Backends\DashboardController;
use App\Http\Controllers\Backends\NewsletterController;
use App\Http\Controllers\Backends\EmailConfigController;
use App\Http\Controllers\Backends\EventDetailController;
use App\Http\Controllers\Backends\FileManagerController;
use App\Http\Controllers\Backends\MenuCategoryController;
use App\Http\Controllers\Backends\PhotoGalleryController;
use App\Http\Controllers\Backends\BoothCategoryController;
use App\Http\Controllers\Backends\LessonCategoryController;
use App\Http\Controllers\Backends\BusinessSettingController;
use App\Http\Controllers\Backends\HeaderController;
use App\Http\Controllers\Backends\NavigationController;
use App\Http\Controllers\Backends\PartnerCategoryController;
use App\Http\Controllers\Backends\ServiceForVisitorController;
use App\Http\Controllers\Web\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Website\AccountController;
use App\Http\Controllers\Website\Auth\LoginController as WebsiteAuthLoginController;
use App\Http\Controllers\Website\HomeController as WebsiteHomeController;
use App\Http\Controllers\Website\CourseController as WebsiteCourseController;
use App\Http\Controllers\Website\ContactController as WebsiteContactController;
use App\Http\Controllers\Website\LessonCategoryController as WebsiteLessonCategoryController;
use App\Http\Controllers\Website\LessondetailController;
use App\Http\Controllers\Website\LessonDetailController as WebsiteLessonDetailController;

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

// change language
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    $language = \App\Models\BusinessSetting::where('type', 'language')->first();
    session()->put('language_settings', $language);
    return redirect()->back();
})->name('change_language');

Auth::routes();

// save temp file
Route::post('save_temp_file', [FileManagerController::class, 'saveTempFile'])->name('save_temp_file');
Route::get('remove_temp_file', [FileManagerController::class, 'removeTempFile'])->name('remove_temp_file');

Route::get('/', function () {
    return view('auth.login');
});


Route::post('save_temp_file', [FileManagerController::class, 'saveTempFile'])->name('save_temp_file');
Route::get('remove_temp_file', [FileManagerController::class, 'removeTempFile'])->name('remove_temp_file');

// back-end
Route::middleware(['auth', 'CheckUserLogin', 'SetSessionData'])->group(function () {

    // Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // setting
        Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
            Route::get('/', [BusinessSettingController::class, 'index'])->name('index');
            Route::put('/update', [BusinessSettingController::class, 'update'])->name('update');

            // language setup
            Route::group(['prefix' => 'language', 'as' => 'language.'], function () {
                Route::get('/', [LanguageController::class, 'index'])->name('index');
                Route::get('/create', [LanguageController::class, 'create'])->name('create');
                Route::post('/', [LanguageController::class, 'store'])->name('store');
                Route::get('/edit', [LanguageController::class, 'edit'])->name('edit');
                Route::put('/update', [LanguageController::class, 'update'])->name('update');
                Route::delete('delete/', [LanguageController::class, 'delete'])->name('delete');

                Route::get('/update-status', [LanguageController::class, 'updateStatus'])->name('update-status');
                Route::get('/update-default-status', [LanguageController::class, 'update_default_status'])->name('update-default-status');
                Route::get('/translate', [LanguageController::class, 'translate'])->name('translate');
                Route::post('translate-submit/{lang}', [LanguageController::class, 'translate_submit'])->name('translate.submit');
            });
        });

        Route::resource('user', UserController::class);
        Route::post('user/change-status', [UserController::class, 'ChangeUserStatus'])->name('user_change_status');

        Route::resource('role', RoleController::class);
        Route::resource('header', NavigationController::class);

        Route::get('product-category/update_status', [CategoryController::class, 'updateStatus'])->name('product-category.update_status');
        Route::resource('product-category', CategoryController::class);

        Route::resource('product', ProductController::class);

        Route::resource('course', CourseController::class);

        Route::get('lesson-category/update_status', [LessonCategoryController::class, 'updateStatus'])->name('lesson-category.update_status');
        Route::resource('lesson-category', LessonCategoryController::class);

        Route::get('lesson/update_status', [LessonController::class, 'updateStatus'])->name('lesson.update_status');
        Route::get('lesson/update_status_free', [LessonController::class, 'updateStatusFree'])->name('lesson.update_status_free');
        Route::resource('lesson', LessonController::class);
        // Route::get('/dashboard', [DashboardController::class, 'topViews'])->name('dashboard');

        Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');
        //click reply sms//
        Route::get('/contact-us/{id}', [ContactController::class, 'show'])->name('contact.replysms');
        //sent sms//
        Route::post('/contact-us/sent-sms', [ContactController::class, 'replycustomer'])->name('messages.sendReply');
        Route::delete('/contact-us/delete/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

        //Config Mail//
        Route::get('/email-config', [EmailConfigController::class, 'showForm'])->name('email_config_form');
        Route::post('/update-email-config', [EmailConfigController::class, 'updateConfig'])->name('update_email_config');
        //header
        Route::get('/header', [DashboardController::class, 'header']);

        //auto count contact in header//
        Route::get('/unread-messages-count', [DashboardController::class, 'unreadMessagesCount'])->name('unread.messages.count');

    });
});


Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
