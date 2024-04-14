<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Location
    Route::delete('locations/destroy', 'LocationController@massDestroy')->name('locations.massDestroy');
    Route::post('locations/media', 'LocationController@storeMedia')->name('locations.storeMedia');
    Route::post('locations/ckmedia', 'LocationController@storeCKEditorImages')->name('locations.storeCKEditorImages');
    Route::post('locations/parse-csv-import', 'LocationController@parseCsvImport')->name('locations.parseCsvImport');
    Route::post('locations/process-csv-import', 'LocationController@processCsvImport')->name('locations.processCsvImport');
    Route::resource('locations', 'LocationController');

    // Company
    Route::delete('companies/destroy', 'CompanyController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompanyController@storeMedia')->name('companies.storeMedia');
    Route::post('companies/ckmedia', 'CompanyController@storeCKEditorImages')->name('companies.storeCKEditorImages');
    Route::resource('companies', 'CompanyController');

    // Partner
    Route::delete('partners/destroy', 'PartnerController@massDestroy')->name('partners.massDestroy');
    Route::post('partners/media', 'PartnerController@storeMedia')->name('partners.storeMedia');
    Route::post('partners/ckmedia', 'PartnerController@storeCKEditorImages')->name('partners.storeCKEditorImages');
    Route::post('partners/parse-csv-import', 'PartnerController@parseCsvImport')->name('partners.parseCsvImport');
    Route::post('partners/process-csv-import', 'PartnerController@processCsvImport')->name('partners.processCsvImport');
    Route::resource('partners', 'PartnerController');

    // Voucher
    Route::delete('vouchers/destroy', 'VoucherController@massDestroy')->name('vouchers.massDestroy');
    Route::resource('vouchers', 'VoucherController');

    // Partner User
    Route::delete('partner-users/destroy', 'PartnerUserController@massDestroy')->name('partner-users.massDestroy');
    Route::resource('partner-users', 'PartnerUserController');

    // Partner Category
    Route::delete('partner-categories/destroy', 'PartnerCategoryController@massDestroy')->name('partner-categories.massDestroy');
    Route::post('partner-categories/parse-csv-import', 'PartnerCategoryController@parseCsvImport')->name('partner-categories.parseCsvImport');
    Route::post('partner-categories/process-csv-import', 'PartnerCategoryController@processCsvImport')->name('partner-categories.processCsvImport');
    Route::resource('partner-categories', 'PartnerCategoryController');

    // Voucher Redeems
    Route::delete('voucher-redeems/destroy', 'VoucherRedeemsController@massDestroy')->name('voucher-redeems.massDestroy');
    Route::resource('voucher-redeems', 'VoucherRedeemsController');

    // Commission Type
    Route::delete('commission-types/destroy', 'CommissionTypeController@massDestroy')->name('commission-types.massDestroy');
    Route::post('commission-types/parse-csv-import', 'CommissionTypeController@parseCsvImport')->name('commission-types.parseCsvImport');
    Route::post('commission-types/process-csv-import', 'CommissionTypeController@processCsvImport')->name('commission-types.processCsvImport');
    Route::resource('commission-types', 'CommissionTypeController');

    // Partner Dashboard
    Route::delete('partner-dashboards/destroy', 'PartnerDashboardController@massDestroy')->name('partner-dashboards.massDestroy');
    Route::resource('partner-dashboards', 'PartnerDashboardController');

    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
