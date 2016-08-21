<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

//USER ROUTES
		Route::get('user/dashboard', [ 'as' => 'user.dashboard', 'uses'=>'UserController@getUserIndex']);
		Route::get('user/notices', [ 'as' => 'user.notices', 'uses'=>'NoticeController@getIndex']);
		Route::get('user/contact', ['as' => 'user.contact','uses' => 'UserController@getUserContact']);
		Route::get('user/profile', ['as' => 'user.profile','uses' => 'UserController@getUserProfile']);
		Route::get('notice/{slug}',['as' => 'notice.single', 'uses'=>'NoticeController@getSingle'])->where('slug', '[\w\d\-\_]+');
		Route::post('checkeligibility/{slug}',['as' => 'checkeligibility', 'uses' => 'UserController@checkeligibility']);

//Authentication routes...
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'LoginController@postLogin');
	Route::get('logout', 'Auth\AuthController@logout');
	 
	// Password Reset Routes...
	Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'Auth\PasswordController@reset');
	 
	// Registration routes...
	Route::get('register', 'Auth\AuthController@getRegister');
	Route::post('register', 'RegistrationController@postRegister');
	Route::get('register/verify/{confirmationCode}', 'RegistrationController@confirm');

//CREATE STORE UPDATE DELETE PUBLISH UNPUBLISH Routes
	Route::resource('admin/post', 'PostController');
	Route::get('admin/notice/publish/{id}',['as'=>'admin.notice.publish','uses'=>'AdminController@publish']);
	Route::get('admin/notice/unpublish/{id}',['as' => 'admin.notice.unpublish','uses'=>'AdminController@unpublish']);

//Admin Dashboard And Applicant Routes
	Route::get('/admin', 'AdminController@getIndex');
	Route::get('admin/applicants', ['as' => 'admin.applicant.posts','uses' => 'AdminController@applicantposts']);
	Route::put('admin/applicants', ['as' => 'admin.applicants','uses' => 'AdminController@applicants']);
	Route::get('admin/export/excel/{postid}', ['as' => 'admin.export.excel','uses' => 'AdminController@excel']);

//Create And Delete Administrators 
		Route::get('admin/administrators',['as' => 'admin.administrators','uses' => 'AdminController@administrators']);
		Route::get('admin/administrators/delete/{regdno}',['as' => 'admin.administrators.delete',
			'uses' => 'AdminController@admindelete']);
		Route::post('admin/administrators/make',['as' => 'administrators.make','uses' => 'AdminController@makeadmin']);

//Standalone Routes
	Route::get('admin/standalone',['as' => 'admin.standalone','uses' => 'AdminController@showstandalone']);
	Route::post('admin/standalone',['uses' => 'AdminController@standalone']);

/*
Route::get('email/verify',function(){
   return view("email.verify")->with('name' , 'Aditya Padhi')->with('confirmation_code', 'anything');
});
*/

//Deleting Users
	Route::get('admin/delete/user',['as' => 'admin.delete.user','uses' => 'AdminController@delUser']);
	Route::post('admin/delete/user','AdminController@deleteUser');

//Send Email
	Route::get('admin/sendgroupemail', ['as' => 'admin.sendgroupemail', 'uses' => 'AdminController@getsendMail']);
	Route::post('admin/sendgroupemail', 'AdminController@sendMail');