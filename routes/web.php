<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CorridorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StationsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\IncidentController;


use Illuminate\Support\Facades\Route;

// Route::group(['middleware'=> 'auth'],function()
// {
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete',[App\Http\Controllers\PermissionController::class,'destroy']);
    Route::resource('roles',App\Http\Controllers\RoleController::class);
    Route::get('roles/{roleId}/delete',[App\Http\Controllers\RoleController::class,'destroy']);
    Route::get('roles/{roleId}/give-permissions',[App\Http\Controllers\RoleController::class,'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions',[App\Http\Controllers\RoleController::class,'givePermissionToRole']);
    Route::resource('users',App\Http\Controllers\UserController::class);
    Route::get('users/{userId}/delete',[App\Http\Controllers\UserController::class,'destroy']);


    // incident 
    Route::resource('incident', App\Http\Controllers\IncidentController::class);
    Route::get('incidents/{userId}/insert',[App\Http\Controllers\IncidentController::class,'insert']);
    Route::get('incidents/{userId}/insert_entries',[App\Http\Controllers\IncidentController::class,'insert_entries']);
    Route::get('incidents/{userId}/add_incident',[App\Http\Controllers\IncidentController::class,'add_incident']);


    
// });



// corridor
Route::resource('corridor', App\Http\Controllers\CorridorController::class);
Route::get('corridor/{corridorId}/delete',[App\Http\Controllers\CorridorController::class,'destroy']);

//station
Route::resource('station', App\Http\Controllers\StationsController::class);
Route::get('station/{stationId}/delete',[App\Http\Controllers\StationsController::class,'destroy']);

//manual
Route::resource('manual', App\Http\Controllers\ManualController::class);
Route::get('manual/{manualId}/delete',[App\Http\Controllers\ManualController::class,'destroy']);

//designation
Route::resource('designation', App\Http\Controllers\DesignationController::class);
Route::get('designation/{designationId}/delete',[App\Http\Controllers\DesignationController::class,'destroy']);
//Department
Route::resource('department', App\Http\Controllers\DepartmentController::class);
Route::get('department/{departmentId}/delete',[App\Http\Controllers\DepartmentController::class,'destroy']);
//Register

Route::resource('registers', App\Http\Controllers\RegisterController::class);
Route::get('registers/{registersId}/delete',[App\Http\Controllers\RegisterController::class,'destroy']);



//station shift register

Route::resource('stationshift', App\Http\Controllers\StationshiftController::class);
Route::get('stationshift/{stationshiftId}/delete',[App\Http\Controllers\StationshiftController::class,'destroy']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
