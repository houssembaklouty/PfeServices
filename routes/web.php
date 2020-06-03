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

Route::get('/', 'FrontController@index')->name('home');
Route::get('/categories', 'FrontController@categories')->name('categories');
Route::get('/categories/{id}', 'FrontController@show_categorie')->name('show.categorie');
Route::get('/getServices','FrontController@getServices' );
Route::post('/post/store','FrontController@postStore' )->name('posts.store');

Route::get('/jobeurs-profiles', 'FrontController@jobeurs_profiles')->name('jobeurs.profiles');

// Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->middleware('verified');

/**
 * https://labs.infyom.com/laravelgenerator/docs/master/schema-builder
 *
 * https://harish81.github.io/infyom-schema-generator/
 */

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "Cache is cleared";
});
