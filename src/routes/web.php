<?php

Route::group(['namespace' => 'Codeg\Newsletter\Http\Controllers'],function(){

    Route::get('newsletter', 'NewsLetterController@index')->name('newsletter');

    Route::post('newsletter', 'NewsLetterController@store');

});

?>
