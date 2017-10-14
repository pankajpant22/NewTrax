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

Route::group(array(),function(){
    Route::get('/', 'WelcomeController@index');

    Route::get('/portfolio', 'PortfolioController@index');

    Route::get('/resources', 'MaterialController@Index');

    Route::get('/blog', 'BlogController@Index');

    Route::post('/blog', 'BlogController@search');

    Route::get('/wordpressblog', 'RedirectBlogController@index');

});

Auth::routes();

Route::group(['middleware' => 'auth','prefix'=>'admin'], function()
{
    Route::get('/', 'Admin\WelcomeController@index')->name('admin');
    Route::get('/welcome/{id}/edit', 'Admin\WelcomeController@edit')->name('welcome.edit');
    Route::patch('/welcome/{id}', 'Admin\WelcomeController@update')->name('welcome.update');
    Route::get('/social', 'Admin\SocialController@index')->name('social');
    Route::get('/social/{id}/edit', 'Admin\SocialController@edit')->name('social.edit');
    Route::get('/social/{id}', 'Admin\SocialController@show')->name('social.show');
    Route::patch('/social/{id}', 'Admin\SocialController@update')->name('social.update');

    // PortFolio Profile //
    Route::get('/portProfile', 'Admin\PortfolioProfileController@index')->name('profile');
    Route::get('/portProfile/{profile}', 'Admin\PortfolioProfileController@show')->name('profile.show');
    Route::get('/portProfile/{profile}/edit', 'Admin\PortfolioProfileController@edit')->name('profile.edit');
    Route::patch('/portProfile/{profile}', 'Admin\PortfolioProfileController@update')->name('profile.update');


    // PortFolio Education //
    Route::get('/portEducation', 'Admin\PortfolioEducationController@index')->name('education');
    Route::get('/portEducation/create', 'Admin\PortfolioEducationController@create')->name('education.create');
    Route::post('/portEducation/create', 'Admin\PortfolioEducationController@store')->name('education.store');
    Route::get('/portEducation/{education}/edit', 'Admin\PortfolioEducationController@edit')->name('education.edit');
    Route::get('/portEducation/{education}', 'Admin\PortfolioEducationController@show')->name('education.show');
    Route::patch('/portEducation/{education}', 'Admin\PortfolioEducationController@update')->name('education.update');
    Route::post('/portEducation/{education}', 'Admin\PortfolioEducationController@destroy')->name('education.delete');

    // PortFolio Career //
    Route::get('/portCareer', 'Admin\PortfolioCareerController@index')->name('career');
    Route::get('/portCareer/create', 'Admin\PortfolioCareerController@create')->name('career.create');
    Route::post('/portCareer/create', 'Admin\PortfolioCareerController@store')->name('career.store');
    Route::get('/portCareer/{career}/edit', 'Admin\PortfolioCareerController@edit')->name('career.edit');
    Route::get('/portCareer/{career}', 'Admin\PortfolioCareerController@show')->name('career.show');
    Route::patch('/portCareer/{career}', 'Admin\PortfolioCareerController@update')->name('career.update');
    Route::post('/portCareer/{career}', 'Admin\PortfolioCareerController@destroy')->name('career.delete');

    // PortFolio Languages //
    Route::get('/portLang', 'Admin\PortfolioLangController@index')->name('lang');
    Route::get('/portLang/create', 'Admin\PortfolioLangController@create')->name('lang.create');
    Route::post('/portLang/create', 'Admin\PortfolioLangController@store')->name('lang.store');
    Route::get('/portLang/{id}/edit', 'Admin\PortfolioLangController@edit')->name('lang.edit');
    Route::get('/portLang/{id}', 'Admin\PortfolioLangController@show')->name('lang.show');
    Route::patch('/portLang/{id}', 'Admin\PortfolioLangController@update')->name('lang.update');
    Route::post('/portLang/{id}', 'Admin\PortfolioLangController@destroy')->name('lang.delete');

    // PortFolio Projects //
    Route::resource('portProject', 'Admin\PortfolioProjectController',
        ['names' => [
            'index' => 'portProject',
            'create' => 'portProject.create',
            'update' => 'portProject.update',
            'edit' => 'portProject.edit',
            'store' => 'portProject.store',
            'show' => 'portProject.show',
            'destroy' => 'portProject.delete',
        ]]);

    // PortFolio Skills //
    Route::resource('skill', 'Admin\PortfolioSkillController',
        ['names' => [
            'index' => 'portSkill',
            'create' => 'portSkill.create',
            'update' => 'portSkill.update',
            'edit' => 'portSkill.edit',
            'store' => 'portSkill.store',
            'show' => 'portSkill.show',
            'destroy' => 'portSkill.delete',
        ]]);

    // PortFolio Tools //
    Route::resource('tool', 'Admin\PortfolioToolController',
        ['names' => [
            'index' => 'portTool',
            'create' => 'portTool.create',
            'update' => 'portTool.update',
            'edit' => 'portTool.edit',
            'store' => 'portTool.store',
            'show' => 'portTool.show',
            'destroy' => 'portTool.delete',
        ]]);

    // PortFolio Volunteering //
    Route::resource('Volunteering', 'Admin\PortfolioVolunteeringController',
        ['names' => [
            'index' => 'portVolunteering',
            'create' => 'portVolunteering.create',
            'update' => 'portVolunteering.update',
            'edit' => 'portVolunteering.edit',
            'store' => 'portVolunteering.store',
            'show' => 'portVolunteering.show',
            'destroy' => 'portVolunteering.delete',
        ]]);

    // Tags//
    Route::resource('Tag', 'Admin\TagController',
            ['names' => [
                'index' => 'Tag',
                'create' => 'Tag.create',
                'store' => 'Tag.store',
                'destroy' => 'Tag.delete',
            ]]);

    // Blog //
    Route::resource('Blog', 'Admin\BlogController',
                ['names' => [
                    'index' => 'blog',
                    'create' => 'blog.create',
                    'update' => 'blog.update',
                    'edit' => 'blog.edit',
                    'store' => 'blog.store',
                    'show' => 'blog.show',
                    'destroy' => 'blog.delete',
                ]]);

    // Material //
    Route::resource('Material', 'Admin\MaterialController',
              ['names' => [
                                'index' => 'material',
                                'create' => 'material.create',
                                'update' => 'material.update',
                                'edit' => 'material.edit',
                                'store' => 'material.store',
                                'show' => 'material.show',
                                'destroy' => 'material.delete',
                            ]]);

    // Material Links //
    Route::resource('Link', 'Admin\LinkController',
                ['names' => [
                            'index' => 'link',
                            'create' => 'link.create',
                            'update' => 'link.update',
                            'edit' => 'link.edit',
                            'store' => 'link.store',
                            'show' => 'link.show',
                            'destroy' => 'link.delete',
                    ]]);


});

// ===============================================
    // 404 ===========================================
    // ===============================================

Route::any('{catchall}', function() {
    return Response::view('error', array(), 404);
})->where('catchall', '.*');
  