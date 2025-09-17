<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddVaccineController;
use App\Http\Controllers\UserAppoinmentController;
use App\Http\Controllers\UserAppoinmentReportController;

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

route::get('/',function(){
    return view('index');
});

route::get('/addvaccine',function (){
    return view('hospitaladminviews.addvaccines');
});

//add vaccines
Route::post('/addvacinnation', [AddVaccineController::class, ('createvaccine')]);

//Show Vaccines hospital dashboard 
route::get('/seevaccines/{id}',[AddVaccineController::class,('show')]);


//Show All Vaccines Admin dashboard 
route::get('/allvaccines',[AddVaccineController::class,('showallvac')]);


//delete Vaccines hospital dashboard 
route::get('/dropvaccines/{id}',[AddVaccineController::class,('destroy')]);

//delete hospital admin dashboard 
route::get('/deletehos/{id}',[UserController::class,('destroyhos')]);


//Edit Vaccines hospital dashboard 
route::get('/editvaccines/{id}',[AddVaccineController::class,('edit')]);


//edit hospital admin dashboard 
route::get('/edithos/{id}',[UserController::class,('edithos')]);

//update hospital admin dashboard 
route::post('/updatehos/{id}',[UserController::class,('updatethos')]);




//update Vaccines hospital dashboard 
route::post('/updatevaccine/{id}',[AddVaccineController::class,('update')]);


//Show All hospitals Admin dashboard 
 route::get('/allhospitals',[UserController::class,('showallhos')]);
 
//Show All appoinment requests Admin dashboard 
 route::get('/allrequest',[UserAppoinmentController::class,('showallappoinment')]);

 
//Show All appoinment requests hospital dashboard 
 route::get('/appoinment/{id}',[UserAppoinmentController::class,('showhosappoinment')]);

 
//appoinment report show form page hospital dashboard 
 route::get('/report/{id}',[UserAppoinmentController::class,('appoinmentreport')]);
 
//approved appoinment requests Admin dashboard 
 route::get('/approved/{id}',[UserAppoinmentController::class,('approveappoinment')]);

 //approved appoinment requests hospital dashboard 
 route::get('/hosapproved/{id}',[UserAppoinmentController::class,('hosapproveappoinment')]);

//show all hospitals at user appoinment
route::get('/appoinmenthos',[UserController::class,('showallhosappoinment')]);
//book appoinmentform page data 
route::get('/bookappoinment/{id}',[AddVaccineController::class,('Userbookappoinments')]);

//book appoinment final data save & admin dashboard & then hospital
route::post('/appoinment/booking',[UserAppoinmentController::class,('newappoinment')]);


//send appoinment report to database from hospital panel
route::post('/reportsend',[UserAppoinmentReportController::class,('newreport')]);


//all appoinment report data show admin panel
route::get('/allreportsadmin',[UserAppoinmentReportController::class,('allreportsadmin')]);

//all appoinment report detail data show admin panel
route::get('/viewreportadmin/{id}',[UserAppoinmentReportController::class,('allreportsadmindetail')]);

//show appoinment report on user dashboard
route::get('/childreports/{id}',[UserAppoinmentReportController::class,('showreposrtuser')]);

//show appoinment report on hospital dashboard
route::get('/allhosreports/{id}',[UserAppoinmentReportController::class,('showreposrtuserhospital')]);

//show full detail appoinment report on hospital dashboard
route::get('/viewreporthos/{id}',[UserAppoinmentReportController::class,('showreporthosfull')]);

//show full detail appoinment report on user dashboard
route::get('/viewreport/{id}',[UserAppoinmentReportController::class,('showreportuserfull')]);



//jetstream login  and register 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->Role == '0'){
        return view('index');
    }
    elseif(Auth::user()->Role == '1'){
        return view('hospitaladmin');
    }
    else{
        return view('mainadmin');
    }
    })->name('dashboard');
});
