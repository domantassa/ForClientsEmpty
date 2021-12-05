<?php
use App\User;
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

// Example Routes

/*if(count($users)>0)
{
  Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register')->middleware('admin');
  Route::post('register','Auth\RegisterController@showRegistrationForm')->middleware('admin');;
}*/
Auth::routes();
Route::resource('verslai','VerslaiController');
Route::get('paslaugos', 'paslaugos@paslaugos')->name('paslaugos');

Route::get('statybos_paslauga', function() {

  $notif = Auth()->User()->notifications()->get();
  return view('statybos_paslauga',['user' => Auth()->User(), 'users' => User::all(), 'notif' => $notif]);

})->name('statybos_paslauga');

Route::get('search', function() {

  $notif = Auth()->User()->notifications()->get();
  return view('search',['user' => Auth()->User(), 'users' => User::all(), 'notif' => $notif]);

})->name('search');

Route::get('more_info', function() {

  $notif = Auth()->User()->notifications()->get();
  return view('more_info',['user' => Auth()->User(), 'users' => User::all(), 'notif' => $notif]);

})->name('more_info');

Route::prefix('dashboard')->middleware('auth')->group(function(){ 
  Route::get('duk', function(){
    
    return view('duk')->with(['user'=>Auth::user(),'users' =>User::all(),'notif'=>Auth()->User()->notifications()->get()]);
  })->name('duk');
  Route::post('send-sms-notification', 'NotificationController@sendSmsNotificaition')->name('send.sms');
  Route::post('/deletenotification', 'FileNotificationController@destroy')->name('notifications.destroy');
  Route::get('/deleteNotifications/{user}', 'FileNotificationController@delete')->name('notifications.delete');
  Route::get('files', 'FileController@index')->name('files');
  Route::post('store/{user}', 'FileController@store')->name('upload');
  Route::get('file/{file}', 'FileController@download')->name('download');
  //Route::get('/dashboard/form','OrdersController@index');
  Route::get('orders/preview/{id}', 'OrdersController@preview')->name('orders.preview');
  Route::post('orders/feedback-finished/{id}', 'OrdersController@feedback_finished')->name('orders.feedback.finished');
  Route::post('orders/finished/{id}', 'OrdersController@finished')->name('orders.finished');
  Route::post('orders/feedback/{id}', 'OrdersController@feedback')->name('orders.feedback');
  Route::resource('orders','OrdersController');
  Route::get('orders-dashboard','OrdersController@dashboard_orders')->name('orders.dashboard');
  Route::get('destroy/{file}', 'FileController@destroy')->name('deleteFile');
  Route::match(['get', 'post'], '/', 'ProfilesController@index', ['user' => Auth::user()]);

  
  Route::middleware('admin')->group(function(){ 
    Route::get('users', 'ProfilesController@users')->name('users');
    Route::get('/user/{user}', 'ProfilesController@show')->name('user.show');
    Route::post('/userupdate', 'ProfilesController@update')->name('user.update');
    Route::get('/destroyUser/{user}', 'ProfilesController@destroy')->name('deleteUser');
    Route::get('/delete/{user}', 'ProfilesController@deleteDirectoryFiles')->name('deleteDir');
    Route::match(['get', 'post'], '/{user}', 'ProfilesController@getShow')->name('showUser');

  });
});
Route::get('/', 'ProfilesController@index')->middleware('auth');

//Route::get('/dashboard/deleteNotif/{user}', 'FileNotificationController@destroy')->name('deleteNotif');


//Route::get('eventas', function(){
 //   event(new App\Events\NewMessageOrFile('message','sender', 'receiver'));
//});


//Route::view('/', 'landing');
//Route::match(['get', 'post'], '/dashboard', function(){
  //  return view('dashboard');
//});
//Route::view('/pages/slick', 'pages.slick');
//Route::view('/pages/datatables', 'pages.datatables');
//Route::view('/pages/blank', 'pages.blank');
