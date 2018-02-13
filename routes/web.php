<?php


Route::get('/', 'StartController@index')->name('start.index');

Route::group(['prefix'=>'de'], function(){

    Route::get('/', 'StartController@index')->name('start.index');

    Route::get('/genusshaus/{uuid}', 'PlacesController@show')->name('places.show');

    Route::get('/produkt', 'ProductController@index')->name('product.index');

    Route::get('/ueber-uns', 'AboutController@index')->name('about.index');

    Route::get('/hilfe', 'SupportController@index')->name('support.index');

    Route::get('/kontakt', 'ContactController@index')->name('contact.index');
    Route::post('/kontakt', 'Notifications\StoreNotificationsController@store')->name('contact.store');

    Route::get('/impressum', 'ImprintController@index')->name('imprint.index');
    Route::get('/datenschutz', 'PrivacyController@index')->name('privacy.index');
    Route::get('/geschaeftsbedingungen', 'TermsController@index')->name('terms.index');


});

