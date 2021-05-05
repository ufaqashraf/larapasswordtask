<?php

Route::get('login', [\App\Http\Controllers\Front\LoginSignupController::class, 'userLogin'])->name("userLogin");

Route::POST('users', [\App\Http\Controllers\Front\LoginSignupController::class, 'users'])->name("users");

Route::get('register', [\App\Http\Controllers\Front\LoginSignupController::class, 'userRegister'])->name("userRegister");

Route::POST('user/signup', [\App\Http\Controllers\Front\LoginSignupController::class, 'userSignup'])->name("userSignup");

Route::get('reset',[\App\Http\Controllers\Front\LoginSignupController::class,'userResetPassword'])->name('userReset');

Route::post('reset/send-mail',[\App\Http\Controllers\Front\LoginSignupController::class,'getLinkPassReset'])->name('userResetPassSendMail');

Route::get('user/reset/password',[\App\Http\Controllers\Front\LoginSignupController::class,'userRestPasswordPage'])->name('passwordResetUpdatePage');

Route::post('reset/change-password',[\App\Http\Controllers\Front\LoginSignupController::class,'resetThePassword'])->name('resetChangePassword');

Route::get('/user/email/verify',[\App\Http\Controllers\Front\LoginSignupController::class,'ve_codes'])->name('ve_code');





