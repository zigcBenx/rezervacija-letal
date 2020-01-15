<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Task Statuses
    Route::apiResource('task-statuses', 'TaskStatusApiController');

    // Task Tags
    Route::apiResource('task-tags', 'TaskTagApiController');

    // Tasks
    Route::post('tasks/media', 'TaskApiController@storeMedia')->name('tasks.storeMedia');
    Route::apiResource('tasks', 'TaskApiController');

    // Tasks Calendars
    Route::apiResource('tasks-calendars', 'TasksCalendarApiController', ['except' => ['store', 'show', 'update', 'destroy']]);
});

Route::get('/flight','FlightController@flights');
Route::get('/flight/{id}','FlightController@flights');
Route::post('/flight','FlightController@flightSave');
Route::put('/flight/{flight}','FlightController@flightUpdate');
Route::delete('/flight/{flight}','FlightController@flightDelete');