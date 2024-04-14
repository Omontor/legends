<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Location
    Route::post('locations/media', 'LocationApiController@storeMedia')->name('locations.storeMedia');
    Route::apiResource('locations', 'LocationApiController');

    // Partner
    Route::post('partners/media', 'PartnerApiController@storeMedia')->name('partners.storeMedia');
    Route::apiResource('partners', 'PartnerApiController');

    // Partner Category
    Route::apiResource('partner-categories', 'PartnerCategoryApiController');
});
