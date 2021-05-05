<?php



    Route::get('admin/user',[\App\Http\Controllers\Admins_Controller\Users_Management\UserManagementController::class,'main'])->name('userManage');

    Route::get('admin/user/edit',[\App\Http\Controllers\Admins_Controller\Users_Management\UserManagementController::class,'edit'])->name('userEdit');

    Route::post('admin/user/list',[\App\Http\Controllers\Admins_Controller\Users_Management\UserManagementController::class,'getUsersList'])->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class])->name('getUserList');

    Route::post('admin/user/edited',[\App\Http\Controllers\Admins_Controller\Users_Management\UserManagementController::class,'edited'])->name('userEdited');

    Route::get('admin/user/delete',[\App\Http\Controllers\Admins_Controller\Users_Management\UserManagementController::class,'deleteUser'])->name('deleteUser');
