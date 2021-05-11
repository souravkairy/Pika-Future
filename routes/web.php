<?php

use Illuminate\Support\Facades\Route;

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

//front end route---------
Route::get('/','App\Http\Controllers\frontEnd\frontEnd@index');

//end front end route-----------

//super admin route--------------
Route::get('super_admin','App\Http\Controllers\backEnd\adminAuth@index');
Route::post('check_admin','App\Http\Controllers\backEnd\adminAuth@check_admin');
Route::get('ckadmintwof','App\Http\Controllers\backEnd\adminAuth@ckadmintwof');
Route::post('ckatwofauth','App\Http\Controllers\backEnd\adminAuth@ckatwofauth');


Route::get('Log-Out','App\Http\Controllers\backEnd\adminAuth@log_out');
Route::get('forgotPass','App\Http\Controllers\backEnd\adminAuth@forgotPass');
Route::get('dashboard','App\Http\Controllers\backEnd\backEnd@index');
Route::get('Add-Admin','App\Http\Controllers\backEnd\backEnd@add_admin');
Route::post('add_admin','App\Http\Controllers\backEnd\backEnd@save_admin_data');
Route::get('deleteadmin/{id}','App\Http\Controllers\backEnd\backEnd@deleteadmin');


Route::get('rateSetting','App\Http\Controllers\backEnd\backEnd@rateSetting');
Route::post('euroTotaka','App\Http\Controllers\backEnd\backEnd@euroTotaka');



Route::get('Add-Merchant','App\Http\Controllers\backEnd\merchant@index');
Route::post('addMerchant','App\Http\Controllers\backEnd\merchant@addMerchant');
Route::get('All-Merchant','App\Http\Controllers\backEnd\merchant@allMerchant');
Route::get('activeMerchant/{id}','App\Http\Controllers\backEnd\merchant@activeMerchant');
Route::get('deactiveMerchant/{id}','App\Http\Controllers\backEnd\merchant@deactiveMerchant');
Route::get('deleteMerchant/{id}','App\Http\Controllers\backEnd\merchant@deleteMerchant');
Route::get('editMerchantInfo/{id}','App\Http\Controllers\backEnd\merchant@editMerchantInfo');
Route::post('updateMerchantdata','App\Http\Controllers\backEnd\merchant@updateMerchantdata');
Route::get('dataDetails/{id}','App\Http\Controllers\backEnd\merchant@dataDetails');
Route::post('rechargeMerchant','App\Http\Controllers\backEnd\merchant@rechargeMerchant');


Route::get('airTickerOrder','App\Http\Controllers\backEnd\airTicker@airTickerOrder');
Route::get('allAirTickerOrder','App\Http\Controllers\backEnd\airTicker@allAirTickerOrder');
Route::get('airOrderdetails/{id}','App\Http\Controllers\backEnd\airTicker@airOrderdetails');
Route::get('cancelairOrder/{id}','App\Http\Controllers\backEnd\airTicker@cancelairOrder');
Route::get('acceptairOrder/{id}','App\Http\Controllers\backEnd\airTicker@acceptairOrder');

Route::get('parcelOrder','App\Http\Controllers\backEnd\parcel@parcelrOrder');
Route::get('allParcelOrder','App\Http\Controllers\backEnd\parcel@allParcelOrder');
Route::get('parcelOrderdetails/{id}','App\Http\Controllers\backEnd\parcel@parcelOrderdetails');
Route::get('cancelparcelOrder/{id}','App\Http\Controllers\backEnd\parcel@cancelparcelOrder');
Route::get('acceptparcelOrder/{id}','App\Http\Controllers\backEnd\parcel@acceptparcelOrder');

Route::get('moneyOrder','App\Http\Controllers\backEnd\moneyTorder@moneyrOrder');
Route::get('allMoneyOrder','App\Http\Controllers\backEnd\moneyTorder@allMoneyOrder');
Route::get('moneyOrderdetails/{id}','App\Http\Controllers\backEnd\moneyTorder@moneyOrderdetails');
Route::get('cancelmoneyOrder/{id}','App\Http\Controllers\backEnd\moneyTorder@cancelmoneyOrder');
Route::get('acceptmoneyOrder/{id}','App\Http\Controllers\backEnd\moneyTorder@acceptmoneyOrder');




//end super admin route--------------

//Merchant Route -----------------

Route::get('merchant','App\Http\Controllers\Merchant\merchantAuth@index');
Route::get('merchant_forgotPass','App\Http\Controllers\Merchant\merchantAuth@merchant_forgotPass');
Route::post('check_merchant','App\Http\Controllers\Merchant\merchantAuth@check_merchant');
Route::get('twosv','App\Http\Controllers\Merchant\merchantAuth@twosv');
Route::post('cktwofauth','App\Http\Controllers\Merchant\merchantAuth@cktwofauth');
Route::get('merchantLogout','App\Http\Controllers\Merchant\merchantAuth@merchantLogout');
Route::get('merchant_dashboard','App\Http\Controllers\Merchant\merchant@index');

Route::get('sendMoney','App\Http\Controllers\Merchant\moneyTransection@sendMoneyForm');
Route::get('todaysTransections','App\Http\Controllers\Merchant\moneyTransection@todaysTransections');
Route::get('allTransections','App\Http\Controllers\Merchant\moneyTransection@allTransections');
Route::post('sendMoneyinfo','App\Http\Controllers\Merchant\moneyTransection@sendMoney');
Route::get('transectionDetails/{id}','App\Http\Controllers\Merchant\moneyTransection@transectionDetails');


Route::get('airTicketForm','App\Http\Controllers\Merchant\airTicket@airTicketForm');
Route::post('airTicketData','App\Http\Controllers\Merchant\airTicket@airTicketData');
Route::get('tairTicket','App\Http\Controllers\Merchant\airTicket@tairTicket');
Route::get('aairTicket','App\Http\Controllers\Merchant\airTicket@aairTicket');
Route::post('ticketDetails/{id}','App\Http\Controllers\Merchant\airTicket@ticketDetails');



Route::get('percelDelivery','App\Http\Controllers\Merchant\percelDelivery@percelDeliveryForm');
Route::get('tPercelDelivery','App\Http\Controllers\Merchant\percelDelivery@tPercelDelivery');
Route::get('pOrderDetails/{id}','App\Http\Controllers\Merchant\percelDelivery@pOrderDetails');
Route::get('aPercelDelivery','App\Http\Controllers\Merchant\percelDelivery@aPercelDelivery');
Route::post('savePercelinfo','App\Http\Controllers\Merchant\percelDelivery@savePercelinfo');

//End Merchant Route ----------------

//Add Merchant Request Route

Route::get('merchant_request','App\Http\Controllers\backEnd\backEnd@merchant_request');
Route::post('addMerchantRequest','App\Http\Controllers\backEnd\merchant@addMerchantRequest');

Route::post('calculation','App\Http\Controllers\Merchant\moneyTransection@calculation');


//End Add Merchant Request Route

Route::get('send-mail','App\Http\Controllers\Merchant\merchantAuth@send_mail');



// Route::get('send-mail', function () {

//     $details = 456456;

//     \Mail::to('souravkairy1997@gmail.com')->send(new \App\Mail\MyTestMail($details));

//     dd("Email is Sent.");
// });



