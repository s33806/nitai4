<?php

use think\facade\Route;

Route::get('friend','index/friend/index', "GET");
Route::get('index','index/index/index', "GET");
Route::get('captcha','index/friend/captcha', "GET");
Route::post('forms','index/friend/forms', "POST");