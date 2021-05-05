<?php

Route::get('/admin/login',function (){

    return view('Admin_Front_end.Auth.adminLogin');
})->name('adminLogin');


Route::get('admin/logout', [\App\Http\Controllers\Admins_Controller\Auth_Management\AdminAuthController::class,'logout'])->name('adminLogout');



// Login Routes...
Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\LoginController@login');

// Logout Routes...
Route::post('admin-logout', 'Auth\LoginController@logout')->name('admin.logout');

// Registration Routes...
Route::get('admin-register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin-register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('admin-password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin-password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.update');

// Password Confirmation Routes...
Route::get('admin-password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('admin.password.confirm');
Route::post('admin-password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email Verification Routes...
Route::get('admin-email/verify', 'Auth\VerificationController@show')->name('admin.verification.notice');
Route::get('admin-email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('admin.verification.verify');
Route::post('admin-email/resend', 'Auth\VerificationController@resend')->name('admin.verification.resend');
