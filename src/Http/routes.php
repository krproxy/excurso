<?php
/**
 * Created by PhpStorm.
 * User: totorro
 * Date: 29.03.16
 * Time: 21:44
 */

Route::group(['middleware' => ['web']], function () {
    Route::get('category/{slug?}', 'krproxy\excurso\Http\Controllers\ExCategoryController@show');
});