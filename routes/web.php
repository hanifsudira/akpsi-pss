<?php

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


Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/delivery/viewproposed', ['uses'=>'DeliverController@uploadFile']);
Route::post('/delivery/viewproposed', ['as'=>'uploadFile', 'uses'=>'DeliveryController@StoreUploadFile']);



//Route::get('/login', function () {
//    return view('login');
//});

#Route::post('/login', array('uses' => 'Controller@login'));

Route::group(['prefix' => 'user'], function () {
    Route::get('homepage', [
        'as'    => 'user.homepage',
        'uses'  => 'UserController@homepage'
    ]);

    Route::get('viewinvoice/{data}','UserController@showinvoice');

    Route::get('viewinvoice', [
        'as'    => 'user.viewinvoice',
        'uses'  => 'UserController@viewinvoice'
    ]);

    Route::get('searchresult', [
        'as'    => 'user.searchresult',
        'uses'  => 'UserController@searchresult'
    ]);

    Route::get('usergetuser', [
        'as'    => 'user.getuser',
        'uses'  => 'UserController@getAdvanceFilterData'
    ]);
});

Route::group(['prefix' => 'delivery'], function () {

    Route::get('homepage', [
        'as'    => 'delivery.homepage',
        'uses'  => 'DeliveryController@homepage'
    ]);

    Route::get('billinggenerate', [
        'as'    => 'delivery.billinggenerate',
        'uses'  => 'DeliveryController@billinggenerate'
    ]);

    Route::get('viewbilling', [
        'as'    => 'delivery.viewbilling',
        'uses'  => 'DeliveryController@viewbilling'
    ]);

    Route::get('editUserstore', [
        'as'    => 'delivery.proposedinvoice',
        'uses'  => 'DeliveryController@proposedinvoice'
    ]);

    Route::get('viewproposed', [
        'as'    => 'delivery.viewproposed',
        'uses'  => 'DeliveryController@viewproposed'
    ]);

    Route::get('reconciliation', [
        'as'    => 'delivery.reconciliation',
        'uses'  => 'DeliveryController@reconciliation'
    ]);
});

Route::group(['prefix' => 'partner'], function () {
    Route::get('homepage', [
        'as'    => 'partner.homepage',
        'uses'  => 'PartnerController@homepage'
    ]);

    Route::get('proposed', [
        'as'    => 'partner.proposed',
        'uses'  => 'PartnerController@proposed'
    ]);

    Route::get('viewproposed', [
        'as'    => 'partner.viewproposed',
        'uses'  => 'PartnerController@viewproposed'
    ]);

    Route::get('reconciliation', [
        'as'    => 'partner.reconciliation',
        'uses'  => 'PartnerController@reconciliation'
    ]);
});

Route::group(['prefix' => 'settlement'], function () {
    Route::get('homepage', [
        'as'    => 'settlement.homepage',
        'uses'  => 'SettlementController@homepage'
    ]);

    Route::get('proposed', [
        'as'    => 'settlement.proposed',
        'uses'  => 'SettlementController@proposed'
    ]);

    Route::get('viewproposed', [
        'as'    => 'settlement.viewproposed',
        'uses'  => 'SettlementController@viewproposed'
    ]);

    Route::get('evaluation', [
        'as'    => 'settlement.evaluation',
        'uses'  => 'SettlementController@evaluation'
    ]);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('homepage', [
        'as'    => 'admin.homepage',
        'uses'  => 'AdminController@homepage'
    ]);

    Route::get('getuser', [
        'as'    => 'admin.getuser',
        'uses'  => 'AdminController@getUser'
    ]);

    Route::get('datastaging', [
        'as'    => 'admin.datastaging',
        'uses'  => 'AdminController@dataStaging'
    ]);

    Route::get('adduserview', [
        'as'    => 'admin.adduserview',
        'uses'  => 'AdminController@adduserview'
    ]);

    Route::post('adduser', [
        'as'    => 'admin.adduser',
        'uses'  => 'AdminController@addUser'
    ]);

    Route::post('edituserstore', [
        'as'    => 'admin.edituserstore',
        'uses'  => 'AdminController@editUserstore'
    ]);

    Route::get('edituser/{id}', 'AdminController@editUser');
    Route::get('deleteuser/{id}', 'AdminController@deleteUser');
});