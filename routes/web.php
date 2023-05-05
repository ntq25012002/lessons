<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DistrictController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/khoa-hoc', [CourseController::class, 'index'])->name('list-course');
Route::get('/khoa-hoc/{slug}', [CourseController::class, 'detail'])->where(['slug' => '[a-zA-Z 0-9]'])->name('course-detail');
Route::get('/gioi-thieu', [AboutController::class, 'index'])->name('about');

Route::get('/district',[DistrictController::class, 'getDistrict'])->name('get-district');

// Admin

Route::name('admin.')->prefix('admin')->group(function() {

    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    
    // // quan ly khoa hoc
    Route::prefix('khoa-hoc')->group(function() {
        Route::get('/',[CourseController::class, 'listCourses'])->name('list-course');

        Route::get('them-moi',[CourseController::class, 'listCourses'])->name('add-course');
        Route::post('them-moi',[CourseController::class, 'listCourses'])->name('save-course');
        
        Route::post('cap-nhat/{slug}',[CourseController::class, 'edit'])
            ->where(['slug' => '[a-zA-Z 0-9]'])->name('edit-course');
        Route::get('xoa/{slug}',[CourseController::class, 'delete'])
            ->where(['slug' => '[a-zA-Z 0-9]'])->name('delete-course');
        Route::get('{slug}',[CourseController::class, 'index'])
            ->where(['slug' => '[a-zA-Z 0-9]'])->name('detail-course');
            
        // Route::get('{slug}/lop',[CourseController::class, 'courseClass'])
        //     ->where(['slug' => '[a-zA-Z 0-9]'])->name('course-class');
    });
    // quan ly giang vien
    Route::prefix('giang-vien')->group(function() {
        Route::get('/',[TeacherController::class, 'listTeacher'])->name('list-teacher');
        Route::get('/them-moi',[TeacherController::class, 'addTeacher'])->name('add-teacher');
        Route::post('/them-moi',[TeacherController::class, 'saveNew'])->name('save-new-teacher');

        Route::post('cap-nhat/{slug}',[TeacherController::class, 'editTeacher'])
            ->where(['slug' => '[a-zA-Z 0-9]'])->name('edit-teacher');
        Route::get('xoa/{slug}',[TeacherController::class, 'deleteTeacher'])
            ->where(['slug' => '[a-zA-Z 0-9]'])->name('delete-teacher');
    });


});