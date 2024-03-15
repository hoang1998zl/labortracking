<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GN24\NewsController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\GN24\ContactController;
use App\Http\Controllers\GN24\UserDataController;
use App\Http\Controllers\UserPermission;

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


class CheckIfUserIsAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            return redirect()->route('profile.edit');
        }

        return $next($request);
    }
}

// Route::get('/', function () {
//     return view('gn24-v2.index');
// })->name('gn24.index');

Route::get('/', function () {
    return view('gn24-v2.index');
})->middleware('checkIfUserIsAuthenticated')->name('gn24.index');

Route::middleware(['isSetting'])->group(function () {
    Route::get('/bang-gia', function () {
        return view('gn24-v2.price');
    })->name('gn24.price');
    Route::get('/lien-he', function () {
        return view('gn24-v2.contact');
    })->name('gn24.contact');
    Route::get('/cac-san-pham', function () {
        return view('gn24-v2.products.index');
    })->name('gn24.products');
    Route::get('/cac-san-pham/quan-ly-nhan-su', function () {
        return view('gn24-v2.products.product-1');
    })->name('gn24.product-1');
    Route::get('/cac-san-pham/tai-lieu-bao-mat', function () {
        return view('gn24-v2.products.product-2');
    })->name('gn24.product-2');
    // Route::get('/tong-hop-tin-tuc', [NewsController::class, 'index'])->name('gn24.news.index');
    // Route::get('/tong-hop-video', function () {
    //     return view('gn24-v2.videos.index');
    // })->name('gn24.videos.index');
    Route::get('/tong-hop-video/{video}', function () {
        return view('gn24-v2.videos.index');
    })->name('gn24.videos.index');
    Route::get('/chi-tiet-video', function () {
        return view('gn24-v2.videos.video-detail');
    })->name('gn24.videos.details');
    Route::get('/tai-ung-dung', function () {
        return view('gn24-v2.mobile-app-download');
    })->name('gn24.app');
    Route::get('/policies', function () {
        return view('gn24-v2.policies');
    })->name('gn24.policies');
    Route::get('/terms', function () {
        return view('gn24-v2.terms');
    })->name('gn24.terms');

    //social authentication
    Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
    Route::get('/auth/callback/{provider}', [SocialController::class, 'callback']);

    Route::post('contact-us', [ContactController::class, 'store'])->name('contact.store');
});

Route::middleware(['auth', 'checkVerify'])->group(function () {
    Route::get('/cai-dat-tai-khoan', [ProfileController::class, 'index'])->name('profile.setting');
    Route::post('/account-setting/{id}', [ProfileController::class, 'addSetting'])->name('profile.setting.setup');
});
Route::middleware(['auth', 'checkVerify', "isSetting"])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/cap-nhat-thong-tin', [ProfileController::class, 'settingUpdate'])->name('profile.setting.update');
    Route::get('/tai-khoan-song-quyen', [UserPermission::class, 'index'])->name('profile.accountsongquyen');
    Route::get('/tai-khoan-song-quyen/{id}/edit', [UserPermission::class, 'edit'])->name('profile.accountsongquyen.edit');
    Route::put('/tai-khoan-song-quyen', [UserPermission::class, 'update'])->name('profile.accountsongquyen.update');
    Route::post('/tai-khoan-song-quyen', [UserPermission::class, 'store'])->name('profile.accountsongquyen.create');
    Route::delete('/tai-khoan-song-quyen/{id}', [UserPermission::class, 'destroy'])->name('profile.accountsongquyen.destroy');
    Route::post('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/tmp-upload-avt', [ProfileController::class, 'tempUpload']);
    Route::delete('/tmp-delete-avt', [ProfileController::class, 'tempDelete']);
    Route::get('/ke-hoach-va-thanh-toan', [ProfileController::class, 'plansAndPrices'])->name('profile.plans-and-prices');
    Route::post('/changePlan', [ProfileController::class, 'changePlan'])->name('profile.changePlan');
});

Route::post('/fetch-user-data', [UserDataController::class, 'index']);

require __DIR__ . '/auth.php';
