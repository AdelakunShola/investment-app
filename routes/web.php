<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\Customer\CustomerController;
use App\Http\Controllers\Backend\PlanController;
use App\Http\Controllers\Backend\TransactionController;
use App\Http\Controllers\Backend\UserRankingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', [UserController::class, 'Index'])->name('home');

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'AdminAuthenticate'])->name('admin.authenticate');
Route::post('/admin/user/password-update/{id}', [AdminController::class, 'updateUserPassword'])->name('admin.user.password.update');
Route::get('/user/login', [UserController::class, 'UserLogin'])->name('user.login');
Route::post('/user/login', [UserController::class, 'UserAuthenticate'])->name('user.authenticate');
Route::get('/user/register', [UserController::class, 'UserRegister'])->name('user.register');
Route::post('/user/register', [UserController::class, 'storeUser'])->name('user.register.submit');




Route::get('/dashboard', function () {
    return view('user.user_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Route::get('/profile', [UserController::class, 'EditProfile'])->name('edit.profile');
   // Route::post('/profile/store', [UserController::class, 'ProfileStore'])->name('profile.store');
   // Route::get('/profile/logout', [UserController::class, 'ProfileLogout'])->name('user.profile.logout');
   // Route::get('/user/password/change', [UserController::class, 'UserChangePassword'])->name('user.password.change');
    
});

require __DIR__.'/auth.php';

//Admin Gorup Middleware
Route::middleware(['auth'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');






Route::prefix('admin/customer')->group(function () {
    Route::get('all', [CustomerController::class, 'allCustomer'])->name('admin.customer.all');

    // remove "/admin" from here
    Route::get('user/{id}/edit', [CustomerController::class, 'editCustomer'])->name('admin.user.edit');
    Route::put('user/{id}', [CustomerController::class, 'updateCustomer'])->name('admin.user.update');
    Route::delete('user/{id}', [CustomerController::class, 'deleteUser'])->name('admin.user.delete');
    Route::post('status-update/{id}', [CustomerController::class, 'updateUserStatus'])->name('admin.user.status.update');


    Route::get('active', [CustomerController::class, 'activeCustomer'])->name('admin.customer.active');
    Route::get('disabled', [CustomerController::class, 'disabledCustomer'])->name('admin.customer.disabled');


    Route::post('/user/balance-update/{id}', [CustomerController::class, 'updateBalance'])->name('admin.user.balance.update');

});



Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('create/plans', [PlanController::class, 'AddPlan'])->name('add.plans');
    Route::get('/plans', [PlanController::class, 'indexPlan'])->name('admin.manage.plans');
    // Show edit form
Route::get('/admin/investment-plans/{id}/edit', [PlanController::class, 'editPlan'])->name('admin.investment-plans.edit');
Route::post('/admin/investment-plans/{id}/update', [PlanController::class, 'updatePlan'])->name('admin.investment-plans.update');
Route::delete('/plans/{id}/delete', [PlanController::class, 'destroyPlan'])->name('admin.plans.delete');
Route::post('/admin/investment-plans', [PlanController::class, 'planStore'])->name('admin.investment-plans.store');
});


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/transactions', [TransactionController::class, 'allTransaction'])->name('admin.transactions.all');
    Route::get('/transactions/investments', [TransactionController::class, 'investments'])->name('admin.transactions.investments');
    Route::get('/transactions/profits', [TransactionController::class, 'userProfits'])->name('admin.transactions.profits');


    Route::get('/deposits', [TransactionController::class, 'adminDeposits'])->name('admin.deposits.all');
    Route::get('/pending/deposits', [TransactionController::class, 'adminDepositsPending'])->name('admin.deposits.pending');
    Route::post('/admin/deposit/action-now', [TransactionController::class, 'depositAction'])->name('admin.deposit.action');


        Route::get('/withdrawal', [TransactionController::class, 'adminWithdrawal'])->name('admin.withdrawal.all');
    Route::get('/pending/withdrawal', [TransactionController::class, 'adminWithdrawalPending'])->name('admin.withdrawal.pending');
    Route::post('/admin/withdrawal/action-now', [TransactionController::class, 'WithdrawalAction'])->name('admin.withdrawal.action');
    

});

});
//End Admin Gorup Middleware





Route::prefix('admin')->middleware(['auth'])->group(function () {

  Route::get('/rankings', [UserRankingController::class, 'Rankingindex'])->name('rankings.index');
    Route::post('/ranking', [UserRankingController::class, 'Rankingstore'])->name('admin.ranking.store');
    Route::put('/update/rankings/{id}', [UserRankingController::class, 'Rankingupdate'])->name('admin.ranking.update');
    Route::delete('/rankings/{id}', [UserRankingController::class, 'Rankingdestroy'])->name('admin.ranking.destroy');

    Route::get('/admin/assign-user-rankings', [UserRankingController::class, 'assignRankingsToUsers'])->name('rankings.assign');


     Route::get('/all/referrals', [UserRankingController::class, 'Referralindex'])->name('referral.index');
});



Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/luxury-ads/create', [BlogController::class, 'Blogcreate'])->name('admin.luxury_ads.create');
Route::post('/luxury-ads', [BlogController::class, 'Blogstore'])->name('admin.luxury_ads.store');
    Route::get('/all/ads', [BlogController::class, 'Blogindex'])->name('admin.luxury_ads.index');
    Route::get('blog/{id}/edit', [BlogController::class, 'Blogedit'])->name('admin.blog.edit');
Route::put('blog/{id}', [BlogController::class, 'Blogupdate'])->name('admin.blog.update');
Route::delete('/luxury_ads/{id}', [BlogController::class, 'Blogdestroy'])->name('admin.luxury_ads.destroy');


    

    Route::get('/about/edit', [UserController::class, 'editAbout'])->name('about.edit');
    Route::post('/about/update', [UserController::class, 'updateAbout'])->name('admin.about.update');


});

















Route::middleware(['auth'])->group(function(){

    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');
    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');




Route::get('/user/plans', [UserController::class, 'UserPlans'])->name('user.plans');
Route::get('/user/invest-plan/{id}', [UserController::class, 'invest'])->name('user.plan.invest');
Route::post('/user/plan/{id}/invest-now', [UserController::class, 'investNow'])->name('user.plan.invest.store');



Route::get('/user/transactions', [UserController::class, 'Transaction'])->name('user.transaction');

Route::get('/user/badge-ranking', [UserController::class, 'userRanking'])->name('user.ranking');

Route::get('/user/referral', [UserController::class, 'userReferral'])->name('user.referral');

Route::get('/user/settings', [UserController::class, 'userSetting'])->name('user.setting');
Route::post('/user/settings/update', [UserController::class, 'updateUserProfile'])->name('user.setting.update');
Route::get('/user/kyc', [UserController::class, 'userKyc'])->name('user.kyc');
Route::post('/user/kyc-submit', [UserController::class, 'submitKyc'])->name('user.kyc.submit');




Route::get('/user/change/password', [UserController::class, 'userChangePw'])->name('user.change.password');
Route::post('/user/change/password', [UserController::class, 'updatePassword'])->name('user.password.update');



Route::get('/user/deposit', [UserController::class, 'showDepositForm'])->name('user.deposit.form');
Route::get('/user/deposits', [UserController::class, 'allDeposits'])->name('user.deposits.all');
Route::post('/user/deposit', [UserController::class, 'storeDeposit'])->name('user.deposit.store');

Route::get('/user/withdraw', [UserController::class, 'showWithdrawForm'])->name('user.withdraw.form');
Route::get('/all/user/withdraw', [UserController::class, 'allWithdraw'])->name('user.withdraw.all');
Route::post('/store/user/withdraw', [UserController::class, 'storeWithdraw'])->name('user.withdraw.store');




Route::prefix('user')->middleware(['auth'])->group(function () {
Route::get('/luxury-ads/create', [BlogController::class, 'UserBlogcreate'])->name('user.create.ads');
Route::post('/luxury-ads', [BlogController::class, 'UserBlogstore'])->name('user.ads.store');
Route::get('/all/ads', [BlogController::class, 'UserBlogindex'])->name('user.all.ads');
Route::get('blog/{id}/edit', [BlogController::class, 'UserBlogedit'])->name('user.blog.edit');
Route::put('blog/{id}', [BlogController::class, 'UserBlogupdate'])->name('user.blog.update');
Route::delete('/luxury_ads/{id}', [BlogController::class, 'UserBlogdestroy'])->name('user.luxury_ads.destroy');


});








Route::post('/user/share-ad', [BlogController::class, 'shareAdReward'])->name('user.share.ad')->middleware('auth');


});






Route::get('/ad/listing', [UserController::class, 'Allad'])->name('frontend.all.ad');
Route::get('/ad/listing/{id}', [UserController::class, 'showDetails'])->name('ad.details');
Route::get('/about-us', [UserController::class, 'Aboutus'])->name('about.us');
Route::get('/contact-us', [UserController::class, 'Contactus'])->name('contact.us');
Route::get('/plan', [UserController::class, 'Plan'])->name('plan');


require __DIR__.'/auth.php';
