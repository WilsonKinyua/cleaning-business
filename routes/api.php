<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');
    Route::apiResource('users', 'UsersApiController');

    // Crm Statuses
    Route::apiResource('crm-statuses', 'CrmStatusApiController');

    // Crm Customers
    Route::apiResource('crm-customers', 'CrmCustomerApiController');

    // Crm Notes
    Route::apiResource('crm-notes', 'CrmNoteApiController');

    // Crm Documents
    Route::post('crm-documents/media', 'CrmDocumentApiController@storeMedia')->name('crm-documents.storeMedia');
    Route::apiResource('crm-documents', 'CrmDocumentApiController');

    // Companies
    Route::post('companies/media', 'CompaniesApiController@storeMedia')->name('companies.storeMedia');
    Route::apiResource('companies', 'CompaniesApiController');

    // Categories
    Route::post('categories/media', 'CategoriesApiController@storeMedia')->name('categories.storeMedia');
    Route::apiResource('categories', 'CategoriesApiController');

    // Services
    Route::post('services/media', 'ServicesApiController@storeMedia')->name('services.storeMedia');
    Route::apiResource('services', 'ServicesApiController');

    // Site Setings
    Route::post('site-setings/media', 'SiteSetingsApiController@storeMedia')->name('site-setings.storeMedia');
    Route::apiResource('site-setings', 'SiteSetingsApiController');

    // Bookings
    Route::apiResource('bookings', 'BookingsApiController', ['except' => ['store', 'update', 'destroy']]);

    // Subscribers
    Route::apiResource('subscribers', 'SubscribersApiController', ['except' => ['store', 'update', 'destroy']]);

    // Locations
    Route::apiResource('locations', 'LocationsApiController');

    // Reviews
    Route::apiResource('reviews', 'ReviewsApiController', ['except' => ['store', 'update', 'destroy']]);

    // New Companies
    Route::apiResource('new-companies', 'NewCompanyApiController', ['except' => ['store', 'update']]);

    // Aboutuses
    Route::post('aboutuses/media', 'AboutUsApiController@storeMedia')->name('aboutuses.storeMedia');
    Route::apiResource('aboutuses', 'AboutUsApiController');

    // Blogs
    Route::post('blogs/media', 'BlogApiController@storeMedia')->name('blogs.storeMedia');
    Route::apiResource('blogs', 'BlogApiController');

    // Comments
    Route::apiResource('comments', 'CommentsApiController', ['except' => ['store', 'update']]);
});
