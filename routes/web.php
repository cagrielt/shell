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

Route::group(['prefix' => 'shell', 'middleware' => 'admincheck'],function(){
    Route::get('','ShellController@index')->name('shell.index');

    Route::resources([
        'pages' => 'PageController',
        'media' => 'MediaController',
        'slides' => 'SlideController',
        'admins' => 'AdminController',
        'board-members' => 'BoardMemberController',
        'brands' => 'BrandController',
        'posts' => 'PostController',
        'news' => 'NewsController',
        'videos' => 'VideoController',
        'memberposts' => 'MemberPostController'
    ]);

    Route::resource('users','UserController')->except(['create','store']);
    Route::resource('subscribers','SubscriberController')->only(['index','show','destroy']);
    Route::get('subscribers-users','SubscriberController@export')->name('subscribers.export');
    Route::resource('launch-users','LaunchUsersController')->only(['index','show','destroy']);
    
    Route::get('users/preconfirm/{id}','UserController@preConfirmAccount')->name('users.preconfirm');
    Route::get('users/confirm/{id}','UserController@confirmAccount')->name('users.confirm');
    Route::get('export-users','UserController@export')->name('users.export');
    Route::get('export-launch-users','LaunchUsersController@export')->name('launch-users.export');

    Route::get('menuitems','MenuItemController@index')->name('menuitems.index');
    Route::get('menuitems/edit', 'MenuItemController@edit')->name('menuitems.edit');
    Route::post('menuitems','MenuItemController@save')->name('menuitems.save');

    Route::get('media-folders','ShellController@mediaFolders');
    Route::get('media-thumbnails','ShellController@mediaThumbnails');
    Route::post('media/mass-action','MediaController@massAction')->name('media.mass-action');
    Route::post('media/upload','MediaController@upload');
    
    Route::get('optimize','ShellController@optimize');
    Route::get('migrate','ShellController@migrate');
    Route::get('render-sitemap','ShellController@renderSitemap')->name('shell.render-sitemap');
});

Route::get('shell/login','ShellController@login')->name('shell.login');
Route::post('shell/login','ShellController@processLogin');
Route::get('shell/logout','ShellController@logout')->name('shell.logout');

Route::group(['prefix' => 'api'],function(){
    Route::post('subscribe','ApiController@subscribe')->name('api.subscribe');
    Route::post('contact','ApiController@contact')->name('api.contact');
    Route::post('change-password','ApiController@changePassword')->name('api.change-password');
    Route::post('define-password','ApiController@definePassword')->name('api.define-password');
    Route::post('login','ApiController@login')->name('api.login');
    Route::post('register','ApiController@register')->name('api.register');
    Route::post('forgot-password','ApiController@forgotPassword')->name('api.forgot-password');
    Route::post('reset-password','ApiController@resetPassword')->name('api.reset-password');
    Route::post('save-profile','ApiController@saveProfile')->name('api.save-profile');
    //Route::post('launch-register','ApiController@launchRegister')->name('api.launch-register');
    //Route::post('launch-ask','ApiController@launchAsk')->name('api.launch-ask');
    Route::post('launch-questions','ApiController@launchQuestions')->name('api.launch-questions');
});

Route::group(['middleware' => 'usercheck'],function(){
    Route::get('profil','HomeController@profile')->name('home.profile');
    Route::get('cikis','HomeController@logout')->name('home.logout');
    Route::get('sifremi-degistir','HomeController@changePassword')->name('home.change-password');
    Route::get('uyelere-ozel/{slug}','HomeController@memberPost');
});

Route::get('uyelik','HomeController@register')->name('home.register');
Route::get('hesap-onayi','HomeController@confirmAccount')->name('home.confirmation');
Route::get('giris','HomeController@login')->name('home.login');
Route::get('sifremi-unuttum','HomeController@forgotPassword')->name('home.forgot-password');
Route::get('sifremi-sifirla','HomeController@resetPassword')->name('home.reset-password');

Route::group(['prefix' => 'en','middleware' => 'setEnglish'],function(){
    Route::get('board-of-management/{slug}','HomeController@boardMember');
    Route::get('blog/{slug}','HomeController@post');
    Route::get('ai-actual/{slug}','HomeController@news');
    Route::get('{slug}', 'HomeController@slug');
    Route::get('', 'HomeController@index');
});

//Route::get('lansman','HomeController@launchment')->name('home.launchment');
Route::get('lansman/sorular','HomeController@launchQuestions');
//Route::get('lansman/giris','HomeController@launchLogin')->name('home.launch-login');
//Route::post('lansman/giris','HomeController@processLaunchLogin');
//Route::get('lansman/kayit-ol','HomeController@launchRegister');
Route::get('yonetim-kurulu/{slug}','HomeController@boardMember');
Route::get('blog/{slug}','HomeController@post');
Route::get('ai-guncel/{slug}','HomeController@news');
Route::get('{slug}','HomeController@slug');
Route::get('', 'HomeController@index');

