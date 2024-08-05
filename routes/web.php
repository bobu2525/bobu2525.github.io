<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;
use App\Http\Controllers\MailTestController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\OptionController as AdminOptionController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use App\Http\Controllers\Admin\PlanController as AdminPlanController;
use App\Http\Controllers\Admin\SalesController as AdminSalesController;
use App\Http\Controllers\Admin\EmailController as AdminEmailController;
use App\Http\Controllers\Member\DashboardController as MemberDashboardController;
use App\Http\Controllers\Member\ProfileController as MemberProfileController;
use App\Http\Controllers\Member\ReservationController as MemberReservationController;
use App\Http\Controllers\Member\PaymentController as MemberPaymentController;





// 管理者ルート
Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('reservations', AdminReservationController::class, ['as' => 'admin']);
    Route::resource('plans', AdminPlanController::class, ['as' => 'admin']);
    Route::resource('options', AdminOptionController::class, ['as' => 'admin']);
    Route::resource('sales', AdminSalesController::class, ['as' => 'admin']);
    Route::resource('emails', AdminEmailController::class, ['as' => 'admin']);
});

// 会員プロフィール管理ルート
Route::prefix('member')->middleware('auth')->group(function () {
    Route::get('/', [MemberDashboardController::class, 'index'])->name('member.dashboard');
    Route::resource('member-profile', MemberProfileController::class, ['as' => 'member']);
    Route::resource('reservations', MemberReservationController::class);
    Route::resource('payments', MemberPaymentController::class);
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録します。これらのルートは
| RouteServiceProviderによって読み込まれ、すべて「web」ミドルウェアグループに
| 割り当てられます。素晴らしいことを作成しましょう！
|
*/

// お問い合わせフォームの送信を処理するルート
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

// お問い合わせ送信後のサンキューページへのルート
Route::view('/thank-you', 'thank-you')->name('thank.you');

// メールテスト用のルート
Route::get('/send-test-mail', [MailTestController::class, 'sendTestMail']);

// アプリケーション送信を処理するルート
Route::get('/grave-cleaning-apply', [YourController::class, 'showGraveCleaningApply'])->name('grave-cleaning-apply');

// 静的ページのルート
Route::get('/', function () {
    return view('index'); // トップページ
});

Route::get('/services', function () {
    return view('services'); // サービス紹介ページ
});

Route::get('/grave-cleaning', function () {
    return view('grave-cleaning'); // 墓清掃代行ページ
});

Route::get('/grave-cleaning-plan', function () {
    return view('grave-cleaning-plan'); // 墓清掃定期プランページ
});

Route::get('/pricing', function () {
    return view('pricing'); // 料金詳細ページ
});

Route::get('/faq', function () {
    return view('faq'); // FAQページ
});

Route::get('/reviews', function () {
    return view('reviews'); // お客様の声ページ
});

Route::get('/contact', function () {
    return view('contact'); // お問い合わせページ
});

// 管理者オプションルートは上記で定義済み

Route::get('/company-info', function () {
    return view('company-info'); // アクセス/会社情報ページ
});

Route::get('/calendar', [CalendarController::class, 'show']);

// ブログ関連のルート
Route::get('/blog', [BlogController::class, 'index']); // ブログ一覧ページ
Route::get('/blog/{id}', [BlogController::class, 'show']); // ブログ詳細ページ

// ダッシュボードページのルート（認証とメール認証が必要）
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// プロファイル管理関連のルート（認証が必要）
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 認証関連のルートを読み込み
require __DIR__.'/auth.php';



// テンプレート一覧と編集ページへのルート
Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('templates', [AdminEmailController::class, 'index'])->name('admin.templates.index');
    Route::get('templates/{template}/edit', [AdminEmailController::class, 'edit'])->name('admin.templates.edit');
    Route::post('templates/{template}/edit', [AdminEmailController::class, 'update'])->name('admin.templates.update');
});