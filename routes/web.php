<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AdminController;


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
// USER ROUTES
Route::get('/',[PhotoController::class,'index']);
Route::get('/about',[PhotoController::class,'about']);
Route::get('/services',[PhotoController::class,'services']);
Route::get('/contact',[PhotoController::class,'contact']);
Route::get('/gallery',[PhotoController::class,'gallery']);

Route::post('/user/save_contact',[PhotoController::class,'save_contact']);





// ADMIN ROUTES

Route::get('/admin',[AdminController::class,'index']);
Route::post('/save_user_resistration',[AdminController::class,'save_user_resistration']);
Route::post('/save_user_login',[AdminController::class,'save_user_login']);
Route::post('/login',[AdminController::class,'login']);

Route::get('/admin/',[AdminController::class,'index']);
Route::get('/admin/home',[AdminController::class,'home']);
Route::post('/admin/save_name_title',[AdminController::class,'save_name_title']);
Route::get('/admin/edit_photography',[AdminController::class,'edit_photography']);
Route::post('/admin/save_edited_name_title/{id}',[AdminController::class,'save_edited_name_title']);
Route::get('/admin/upload_photo',[AdminController::class,'upload_photo']);
Route::post('/admin/save_upload_photo',[AdminController::class,'save_upload_photo']);
Route::get('/admin/delete/{id}',[AdminController::class,'delete']);

Route::get('/admin/about',[AdminController::class,'about']);
Route::post('/admin/save_about_info',[AdminController::class,'save_about_info']);
Route::get('/admin/edit_about_info',[AdminController::class,'edit_about_info']);
Route::post('/admin/save_edit_about_info/{id}',[AdminController::class,'save_edit_about_info']);

Route::get('/admin/about_slider',[AdminController::class,'about_slider']);
Route::post('/admin/save_about_slider',[AdminController::class,'save_about_slider']);
Route::get('/admin/save_about_slider_delete/{id}',[AdminController::class,'save_about_slider_delete']);

Route::get('/admin/service_price',[AdminController::class,'service_price']);
Route::post('/admin/save_service_price',[AdminController::class,'save_service_price']);
Route::get('/admin/save_service_price_delete/{id}',[AdminController::class,'save_service_price_delete']);

Route::get('/admin/contact_form',[AdminController::class,'contact_form']);
Route::get('/admin/contact_form_delete/{id}',[AdminController::class,'contact_form_delete']);

Route::get('/admin/gallery_name_desc',[AdminController::class,'gallery_name_desc']);
Route::post('/admin/save_gallery_name_desc',[AdminController::class,'save_gallery_name_desc']);
Route::get('/admin/edit_gallery_name_desc/{id}',[AdminController::class,'edit_gallery_name_desc']);
Route::post('/admin/update_gallery_name_desc/{id}',[AdminController::class,'update_gallery_name_desc']);

Route::get('/admin/upload_gallery_image',[AdminController::class,'upload_gallery_image']);
Route::post('/admin/save_upload_gallery_image',[AdminController::class,'save_upload_gallery_image']);
Route::get('/admin/delete_upload_gallery_image/{id}',[AdminController::class,'delete_upload_gallery_image']);


Route::get('/admin/destroy',[AdminController::class,'destroy']);
