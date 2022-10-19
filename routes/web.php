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

Route::group(['middleware' => ['get.menu']], function () {

    Route::group(['middleware' => ['role:user']], function () {

    });
    Auth::routes();

    Route::resource('resource/{table}/resource', 'ResourceController')->names([
        'index'     => 'resource.index',
        'create'    => 'resource.create',
        'store'     => 'resource.store',
        'show'      => 'resource.show',
        'edit'      => 'resource.edit',
        'update'    => 'resource.update',
        'destroy'   => 'resource.destroy'
    ]);

    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('download-zip', 'ZipController@downloadZip');

        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('notes', 'NotesController');
        Route::resource('bread',  'BreadController');
        Route::resource('users',        'UsersController')->except( ['create', 'store'] );
        Route::resource('roles',        'RolesController');
        Route::resource('mail',        'MailController');
        Route::get('prepareSend/{id}',        'MailController@prepareSend')->name('prepareSend');
        Route::post('mailSend/{id}',        'MailController@send')->name('mailSend');
        Route::get('/roles/move/move-up',      'RolesController@moveUp')->name('roles.up');
        Route::get('/roles/move/move-down',    'RolesController@moveDown')->name('roles.down');

        Route::prefix('team-members')->group(function () {
            Route::get('/',         'TeamMembersController@index')->name('team_members.index');
            Route::get('/create',   'TeamMembersController@create')->name('team_members.create');
            Route::post('/store',   'TeamMembersController@store')->name('team_members.store');
            Route::get('/edit/{id}',     'TeamMembersController@edit')->name('team_members.edit');
            Route::post('/update/{id}',  'TeamMembersController@update')->name('team_members.update');
            Route::get('/show/{id}',         'TeamMembersController@show')->name('team_members.show');
            Route::delete('/delete/{id}',   'TeamMembersController@delete')->name('team_members.delete');
            Route::post('/remove-image',         'TeamMembersController@removeImage')->name('team_members.remove_image');
        });

        Route::prefix('projects')->group(function () {
            Route::get('/',         'ProjectController@index')->name('projects.index');
            Route::get('/create',   'ProjectController@create')->name('projects.create');
            Route::post('/store',   'ProjectController@store')->name('projects.store');
            Route::get('/edit/{id}',     'ProjectController@edit')->name('projects.edit');
            Route::post('/update/{id}',  'ProjectController@update')->name('projects.update');
            Route::get('/show/{id}',         'ProjectController@show')->name('projects.show');
            Route::delete('/delete/{id}',   'ProjectController@delete')->name('projects.delete');
            Route::post('/remove-file/',         'ProjectController@removeFile')->name('projects.remove_file');
        });

        Route::prefix('careers')->group(function () {
            Route::get('/',         'CareerController@index')->name('careers.index');
            Route::get('/create',   'CareerController@create')->name('careers.create');
            Route::post('/store',   'CareerController@store')->name('careers.store');
            Route::get('/edit/{id}',     'CareerController@edit')->name('careers.edit');
            Route::post('/update/{id}',  'CareerController@update')->name('careers.update');
            Route::get('/show/{id}',         'CareerController@show')->name('careers.show');
            Route::delete('/delete/{id}',   'CareerController@delete')->name('careers.delete');
        });

        Route::prefix('posts')->group(function () {
            Route::get('/',         'PostController@index')->name('posts.index');
            Route::get('/create',   'PostController@create')->name('posts.create');
            Route::post('/store',   'PostController@store')->name('posts.store');
            Route::get('/edit/{id}',     'PostController@edit')->name('posts.edit');
            Route::post('/update/{id}',  'PostController@update')->name('posts.update');
            Route::get('/show/{id}',         'PostController@show')->name('posts.show');
            Route::delete('/delete/{id}',   'PostController@delete')->name('posts.delete');
            Route::post('/remove-image/',         'PostController@removeImage')->name('posts.remove_image');
        });

        Route::prefix('collaborations')->group(function () {
            Route::get('/',         'CollaborationController@index')->name('collaborations.index');
            Route::get('/create',   'CollaborationController@create')->name('collaborations.create');
            Route::post('/store',   'CollaborationController@store')->name('collaborations.store');
            Route::get('/edit/{id}',     'CollaborationController@edit')->name('collaborations.edit');
            Route::post('/update/{id}',  'CollaborationController@update')->name('collaborations.update');
            Route::get('/show/{id}',         'CollaborationController@show')->name('collaborations.show');
            Route::delete('/delete/{id}',   'CollaborationController@delete')->name('collaborations.delete');
            Route::post('/remove-image/',         'CollaborationController@removeImage')->name('collaborations.remove_image');
        });

        Route::prefix('numbers')->group(function () {
            Route::get('/',         'NumberController@index')->name('numbers.index');
            Route::get('/create',   'NumberController@create')->name('numbers.create');
            Route::post('/store',   'NumberController@store')->name('numbers.store');
            Route::get('/edit/{id}',     'NumberController@edit')->name('numbers.edit');
            Route::post('/update/{id}',  'NumberController@update')->name('numbers.update');
            Route::get('/show/{id}',         'NumberController@show')->name('numbers.show');
            Route::delete('/delete/{id}',   'NumberController@delete')->name('numbers.delete');
        });

        Route::prefix('messages')->group(function () {
            Route::get('/',         'MessageController@index')->name('messages.index');
            Route::get('/show/{id}',         'MessageController@show')->name('messages.show');
            Route::delete('/delete/{id}',   'MessageController@delete')->name('messages.delete');

        });

        Route::prefix('data-requests')->group(function () {
            Route::get('/',         'DataRequestController@index')->name('data_request.index');
            Route::get('/show/{id}',         'DataRequestController@show')->name('data_request.show');
            Route::get('/send/{id}',         'DataRequestController@send')->name('data_request.send');
            Route::delete('/delete/{id}',   'DataRequestController@delete')->name('data_request.delete');

        });

        Route::prefix('technologies')->group(function () {
            Route::get('/',         'TechnologyController@index')->name('technologies.index');
            Route::get('/create',   'TechnologyController@create')->name('technologies.create');
            Route::post('/store',   'TechnologyController@store')->name('technologies.store');
            Route::get('/edit/{id}',     'TechnologyController@edit')->name('technologies.edit');
            Route::post('/update/{id}',  'TechnologyController@update')->name('technologies.update');
            Route::get('/show/{id}',         'TechnologyController@show')->name('technologies.show');
            Route::delete('/delete/{id}',   'TechnologyController@delete')->name('technologies.delete');
            Route::post('/remove-image/',         'TechnologyController@removeImage')->name('technologies.remove_image');
        });


        Route::prefix('menu/element')->group(function () {
            Route::get('/',             'MenuElementController@index')->name('menu.index');
            Route::get('/move-up',      'MenuElementController@moveUp')->name('menu.up');
            Route::get('/move-down',    'MenuElementController@moveDown')->name('menu.down');
            Route::get('/create',       'MenuElementController@create')->name('menu.create');
            Route::post('/store',       'MenuElementController@store')->name('menu.store');
            Route::get('/get-parents',  'MenuElementController@getParents');
            Route::get('/edit',         'MenuElementController@edit')->name('menu.edit');
            Route::post('/update',      'MenuElementController@update')->name('menu.update');
            Route::get('/show',         'MenuElementController@show')->name('menu.show');
            Route::get('/delete',       'MenuElementController@delete')->name('menu.delete');
        });
        Route::prefix('menu/menu')->group(function () {
            Route::get('/',         'MenuController@index')->name('menu.menu.index');
            Route::get('/create',   'MenuController@create')->name('menu.menu.create');
            Route::post('/store',   'MenuController@store')->name('menu.menu.store');
            Route::get('/edit',     'MenuController@edit')->name('menu.menu.edit');
            Route::post('/update',  'MenuController@update')->name('menu.menu.update');
            Route::get('/delete',   'MenuController@delete')->name('menu.menu.delete');
        });
        Route::prefix('media')->group(function () {
            Route::get('/',                 'MediaController@index')->name('media.folder.index');
            Route::get('/folder/store',     'MediaController@folderAdd')->name('media.folder.add');
            Route::post('/folder/update',   'MediaController@folderUpdate')->name('media.folder.update');
            Route::get('/folder',           'MediaController@folder')->name('media.folder');
            Route::post('/folder/move',     'MediaController@folderMove')->name('media.folder.move');
            Route::post('/folder/delete',   'MediaController@folderDelete')->name('media.folder.delete');;

            Route::post('/file/store',      'MediaController@fileAdd')->name('media.file.add');
            Route::get('/file',             'MediaController@file');
            Route::post('/file/delete',     'MediaController@fileDelete')->name('media.file.delete');
            Route::post('/file/update',     'MediaController@fileUpdate')->name('media.file.update');
            Route::post('/file/move',       'MediaController@fileMove')->name('media.file.move');
            Route::post('/file/cropp',      'MediaController@cropp');
            Route::get('/file/copy',        'MediaController@fileCopy')->name('media.file.copy');
        });
    });
});
