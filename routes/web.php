<?php

use System\Router\Web\Route;

Route::get('', 'HomeController@index', 'index');
Route::get('create', 'HomeController@create', 'create');
Route::post('store', 'HomeController@store', 'store');
Route::get('edit/{id}', 'HomeController@edit', 'edit');
Route::put('/update/{id}', 'HomeController@update', 'update');
Route::delete('/delete/{id}', 'HomeController@destroy', 'delete');

//admin routes 
Route::get('/admin', 'Admin\AdminController@index', 'admin.index');

//category routes
Route::get('/admin/category', 'Admin\CategoryController@index', 'admin.category.index');
Route::get('/admin/category/create', 'Admin\CategoryController@create', 'admin.category.create');
Route::post('/admin/category/store', 'Admin\CategoryController@store', 'admin.category.store');
Route::get('/admin/category/edit/{id}', 'Admin\CategoryController@edit', 'admin.category.edit');
Route::put('/admin/category/update/{id}', 'Admin\CategoryController@update', 'admin.category.update');
Route::delete('/admin/category/delete/{id}', 'Admin\CategoryController@destroy', 'admin.category.delete');

//Post routes
Route::get('/admin/post', 'Admin\PostController@index', 'admin.post.index');
Route::get('/admin/post/create', 'Admin\PostController@create', 'admin.post.create');
Route::post('/admin/post/store', 'Admin\PostController@store', 'admin.post.store');
Route::get('/admin/post/edit/{id}', 'Admin\PostController@edit', 'admin.post.edit');
Route::put('/admin/post/update/{id}', 'Admin\PostController@update', 'admin.post.update');
Route::delete('/admin/post/delete/{id}', 'Admin\PostController@destroy', 'admin.post.delete');

Route::put('/admin/post/active/{id}', 'Admin\PostController@active', 'admin.post.active');

//Post routes
Route::get('/admin/ads', 'Admin\AdsController@index', 'admin.ads.index');
Route::get('/admin/ads/create', 'Admin\AdsController@create', 'admin.ads.create');
Route::post('/admin/ads/store', 'Admin\AdsController@store', 'admin.ads.store');
Route::get('/admin/ads/edit/{id}', 'Admin\AdsController@edit', 'admin.ads.edit');
Route::put('/admin/ads/update/{id}', 'Admin\AdsController@update', 'admin.ads.update');
Route::delete('/admin/ads/delete/{id}', 'Admin\AdsController@destroy', 'admin.ads.delete');

Route::get('/admin/ads/gallery/{id}', 'Admin\AdsController@gallery', 'admin.ads.gallery');
Route::post('/admin/ads/store_gallery_image/{id}', 'Admin\AdsController@storeGalleryImage', 'admin.ads.store.gallery.image');
Route::get('/admin/ads/delete_gallery_image/{gallery_id}', 'Admin\AdsController@deleteGalleryImage', 'admin.ads.delete.gallery.image');

//Slide routes
Route::get('/admin/slide', 'Admin\SlideController@index', 'admin.slide.index');
Route::get('/admin/slide/create', 'Admin\SlideController@create', 'admin.slide.create');
Route::post('/admin/slide/store', 'Admin\SlideController@store', 'admin.slide.store');
Route::get('/admin/slide/edit/{id}', 'Admin\SlideController@edit', 'admin.slide.edit');
Route::put('/admin/slide/update/{id}', 'Admin\SlideController@update', 'admin.slide.update');
Route::delete('/admin/slide/delete/{id}', 'Admin\SlideController@destroy', 'admin.slide.delete');

//Comments routes
Route::get('/admin/comment', 'Admin\CommentController@index', 'admin.comment.index');
Route::get('/admin/comment/show/{id}', 'Admin\CommentController@show', 'admin.comment.show');
Route::put('/admin/comment/approved/{id}', 'Admin\CommentController@approved', 'admin.comment.approved');
Route::post('/admin/comment/answer/{id}', 'Admin\CommentController@answer', 'admin.comment.answer');
