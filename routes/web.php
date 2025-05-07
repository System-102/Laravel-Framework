<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TrainerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;



Route::get('/', [AuthController::class, 'showRegisterForm']); 
Route::post('/', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth'); // User Dashboard
Route::get('/admin', [AuthController::class, 'adminDashboard'])->middleware(['auth', 'admin']); // Admin Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth'); 


Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');


use App\Http\Controllers\PageController;

Route::get('/about', [PageController::class, 'about']);
Route::get('/workouts', [PageController::class, 'workouts']);
Route::get('/exercise', [PageController::class, 'exercise']);
Route::get('/profile', [PageController::class, 'profile']);




Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin/users', function () {
    return view('users');
})->name('admin.users');

Route::get('/admin/trainers', function () {
    return view('trainers');
})->name('admin.trainers');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('admin.users');

    Route::get('/trainers', function () {
        return view('admin.trainers');
    })->name('admin.trainers');

    Route::get('/reports', function () {
        return view('admin.reports');
    })->name('admin.reports');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');
});





Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/destroy/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');




Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-picture', [ProfileController::class, 'updatePicture'])->name('profile.updatePicture');
});



Route::get('/workout', function () {
    return view('auth.dashboardinfo.workouts');
})->name('workouts.info');

Route::get('/yoga', function () {
    return view('auth.dashboardinfo.yoga');
})->name('yoga.index');

Route::get('/nutrition', function () {
    return view('auth.dashboardinfo.nutrition');
})->name('nutrition.index');



Route::get('/mission', function () {
    return view('auth.aboutinfo.mission');
})->name('about.mission');

Route::get('/trainers', function () {
    return view('auth.aboutinfo.trainers');
})->name('about.trainers');

Route::get('/facilities', function () {
    return view('auth.aboutinfo.facilities');
})->name('about.facilities');

Route::get('/community', function () {
    return view('auth.aboutinfo.community');
})->name('about.community');



Route::get('/forgot-password', [AuthController::class, 'ForgetPasswordForm'])->name('auth.forgetpassword');
Route::post('/forgot-password', [AuthController::class, 'SubmitForgetPasswordForm'])->name('auth.Submitforgetpassword');

Route::get('/reset-password/{token}', [AuthController::class, 'ResetPasswordForm'])->name('auth.showresetpassword');

Route::get('/reset-password', [AuthController::class, 'ResetPasswordFormpage'])->name('auth.showpassword');
Route::post('/reset-password', [AuthController::class, 'SubmitresetPasswordForm'])->name('auth.Submitresetpassword');
// ===========================================================================================================================>






// Admin Profile Routes
Route::get('/admin/profile', [AdminController::class, 'index'])->name('admin.profile.index');
Route::get('/admin/profile/edit', [AdminController::class, 'edit'])->name('admin.profile.edit');
Route::put('/admin/profile/update', [AdminController::class, 'update'])->name('admin.profile.update');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



use App\Http\Controllers\WorkoutController;



Route::get('/workouts', [WorkoutController::class, 'index'])->name('workouts.index');
Route::get('/workouts/{id}', [WorkoutController::class, 'show'])->name('workouts.show');
Route::get('/workouts/{id}/start', [WorkoutController::class, 'start'])->name('workouts.start');


use App\Http\Controllers\Admin\WorkoutAdminController;

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/workouts', [WorkoutAdminController::class, 'index'])->name('admin.workouts.index');
    Route::get('/workouts/create', [WorkoutAdminController::class, 'create'])->name('admin.workouts.create');
    Route::post('/workouts/store', [WorkoutAdminController::class, 'store'])->name('admin.workouts.store');
    Route::get('/workouts/{id}/edit', [WorkoutAdminController::class, 'edit'])->name('admin.workouts.edit');
    Route::put('/workouts/{id}/update', [WorkoutAdminController::class, 'update'])->name('admin.workouts.update');
    Route::delete('/workouts/{id}/delete', [WorkoutAdminController::class, 'destroy'])->name('admin.workouts.destroy');
});






use Illuminate\Support\Facades\Mail;
use App\Mail\WheyProteinReminder;
use App\Mail\WorkoutReminder;
use App\Models\User;

Route::get('/test-email', function () {
    $users = User::where('role', 'user')->get(); // Optional: Filter by role

    foreach ($users as $user) {
        Mail::to($user->email)->send(new WheyProteinReminder());
        Mail::to($user->email)->send(new WorkoutReminder());
    }

    return '✅ Emails sent to all registered users!';
});





// ===========================================================================================================================>
