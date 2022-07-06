<?php
use think\facade\Route;
Route::get('admin','admin/index/index', "GET");
Route::get('login','admin/login/index', "GET");
Route::post('login_forms','admin/login/forms', "POST");
Route::get('tuichu','admin/tuichu/index', "GET");
Route::get('password','admin/password/index', "GET");
Route::post('password_forms','admin/password/forms', "POST");
Route::get('basic','admin/basic/index', "GET");
Route::post('basic_forms','admin/basic/forms', "POST");
Route::get('information','admin/information/index', "GET");
Route::post('info_forms','admin/information/info_forms', "POST");
Route::post('elements_forms','admin/information/elements_forms', "POST");
Route::post('information_del/:id','admin/information/del', "POST");
Route::get('website','admin/website/index', "GET");
Route::post('website_del/:id','admin/website/del', "POST");
Route::post('website_forms','admin/website/forms', "POST");
Route::get('friendship','admin/friendship/index', "GET");
Route::post('friendship_del/:id','admin/friendship/del', "POST");
Route::post('friendship_deletes','admin/friendship/deletes', "POST");
Route::post('friendship_status/:id','admin/friendship/status', "POST");
Route::post('friendship_forms','admin/friendship/forms', "POST");
Route::get('message','admin/message/index', "GET");
Route::post('message_del/:id','admin/message/del', "POST");

Route::post('message_deletes/:id','admin/message/deletes', "POST");