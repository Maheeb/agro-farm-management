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

//Route::get('/', function () {
//    return view('welcome');
//});

// Route::get( '/ssagro-home', 'FrontHomeController@home')->name('ssagro-home');
Route::get('/','FrontHomeController@home')->name('ssagro-home');

//buy-products-page
Route::get('/buy-products','FrontHomeController@buyProudcts')->name('buy-products');
Route::get('/buy-products/{product}','FrontHomeController@buyProductsShow')->name('shop.buy.show');
Route::post('/all-buy-order','FrontHomeController@buyOrder')->name('buy.order');


//sell-products-page
Route::get('/sell-products','FrontHomeController@sellProudcts')->name('sell-products');
Route::get('/sell-products/{product}','FrontHomeController@sellProductsShow')->name('shop.sell.show');
Route::post('/all-sell-order','FrontHomeController@sellOrder')->name('sell.order');


Route::get('/ssagro-faq','FrontHomeController@faq')->name('faq');
Route::get('/ssagro-about','FrontHomeController@about')->name('about');
Route::get('/ssagro-contact','FrontHomeController@contact')->name('contact');
Route::post('/ssagro-contact/store','FrontHomeController@contactStore')->name('contact.post');




Auth::routes();

Route::group(['middleware' => 'admin'], function() {
// lots of routes that require auth middleware
//    Route::get('/admin', 'EmployeeInfoController@index')->name('admin');

//    Route::get('/ssagro-home','FrontHomeController@home')->name('ssagro-home');
    Route::get('/admin', function () {

        return view('backend.index');
    })->name('admin');



    Route::resource('admin/featured-buy','FeatureBuyController');
    Route::get('markAsRead', function () {
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
    })->name('markRead');


    //Employee-info

    Route::get('admin/employee-info','EmployeeInfoController@index')->name('employee.info');
    Route::post('admin/employee-info-store','EmployeeInfoController@store')->name('employee.info.post');
    Route::get('admin/employee-info-edit/{id}','EmployeeInfoController@edit')
        ->name('employee.info.edit');
    Route::delete('admin/employee-info-delete/{id}','EmployeeInfoController@destroy')
        ->name('employee.info.delete');


    //categories

    Route::get('admin/categories','ProductCategoryController@index')->name('category');
    Route::post('admin/categories-store','ProductCategoryController@store')->name('category.post');
    Route::get('admin/categories-edit/{id}','ProductCategoryController@edit')
        ->name('categories.edit');


    //Products

    Route::resource('admin/products','ProductController');

    //All  orders

    Route::get('admin/all-orders','AllordersController@index')->name('all-orders.index');
    Route::post('admin/all-orders-store','AllordersController@store')->name('all-orders.post');
    Route::get('admin/all-orders-edit/{id}','AllordersController@edit')
        ->name('all-orders.edit');



    //Employee Salary

    Route::resource('admin/employee-salary','EmployeeSalaryController');

    Route::get('admin/employee-salary-previous','EmployeeSalaryController@previousSalary')
        ->name('employee-salary.previous');



    //Employee Advanced Salary

    Route::resource('admin/employee-advanced-salary','AdvancedSalaryController');


    //Employee Notice
    Route::resource('admin/employee-notice','EmployeeNoticeController');

    //Employee Performance

    Route::resource('admin/employee-performance', 'EmpPerformanceController');


    //information

    Route::get('admin/information-employee-all','InformationController@employeeInfoShow')
        ->name('information-employee.all');


    Route::get('admin/info-employee-month','InformationController@informationEmployeeMonth')
        ->name('employee-info.month');

    Route::get('admin/information-product-all','InformationController@productInfoShow')
        ->name('information-product.all');

    Route::get('admin/buysell-information','InformationController@buySellInfoShow')
        ->name('buysell.all');


    Route::get('admin/buysell-info-month','InformationController@buySellInformationMonth')
        ->name('buysell-info.month');


    Route::resource('admin/test','TestController');

});

Route::group(['middleware' => 'staff'], function () {

    Route::get('/staff', 'StaffController@index')->name('staff');
    Route::get('/staff/salary', 'StaffController@stafSalary')->name('staff-salary');
    Route::get('/staff/notice', 'StaffController@staffNotice')->name('staff-notice');
    Route::get('/staff/performance', 'StaffController@staffPerformance')->name('staff-performance');



});

//Route::group(['middleware' => 'visitor'], function () {
//    Route::get('/visitor', 'VisitorController@index')->name('visitor');
//
//});






Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



