<?php

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');
//上面的代码等同于下面
// Route::get('/users', 'UsersController@index')->name('users.index');
// 显示所有用户列表的页面
// Route::get('/users/create', 'UsersController@create')->name('users.create');
// 显示用户个人信息的页面
// Route::get('/users/{user}', 'UsersController@show')->name('users.show');
// 创建用户的页面
// Route::post('/users', 'UsersController@store')->name('users.store');
// 创建用户
// Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
// 编辑用户个人资料的页面
// Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
// 更新用户
// Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
// 删除用户