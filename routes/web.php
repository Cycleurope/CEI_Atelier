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
Auth::routes();

Route::get('/', function () {
    return view('login');
})->middleware('guest')->name('login.form');

Route::group(["namespace" => "Front"], function() {
    Route::get('/home', 'AppController@index')->name('home');

    // Vidéos 
    Route::get('/videos', 'VideoController@index')->name('front.videos.index');
    Route::get('/formations', 'MasterclassController@index')->name('front.masterclasses.index');
    Route::get('/formations/{id}', 'MasterclassController@show')->name('front.masterclasses.show');
    Route::post('/formations/{id}/register', 'MasterclassController@register')->name('front.masterclasses.register.post');
    //Exploded Views
    Route::get('/vues-eclatees/', 'ExplodedViewController@index')->name('front.explodedviews.index');
    Route::get('/vues-eclatees/{id}', 'ExplodedViewController@show')->name('front.explodedviews.show');
    // Documents
    Route::get('/documents', 'DocumentController@index')->name('front.documents.index');
    // FAQ
    Route::get('/foire-aux-questions', 'QuestionAnswerController@index')->name('front.faq.index');
    // Annuaire
    Route::get('/annuaire', 'PhonebookController@index')->name('front.phonebook.index');

});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {

    Route::get('/dashboard', 'AppController@dashboard')->name('dashboard');
    
    // Masterclasses
    Route::get('/masterclasses/archives', 'MasterclassController@archives')->name('masterclasses.archives');
    Route::resource('/masterclasses', 'MasterclassController');

    // Retours de Formation
    Route::get('/feedbacks/create/{id?}', 'FeedbackController@create')->name('feedbacks.create');
    Route::resource('/feedbacks', 'FeedbackController')->except(['create']);

    // Brands
    Route::resource('/brands', 'BrandController');

    // Seasons
    Route::resource('/seasons', 'SeasonController');

    // Families
    Route::resource('/families', 'FamilyController');

    // Products
    Route::get('/products/{id}/import-parts', 'ProductController@importPartsForm')->name('products.parts.import.get');
    Route::resource('/products', 'ProductController');
    Route::get('/products/{id}/empty-bom', 'ProductController@emptyBOM')->name('products.bom.empty');
    Route::post('/products/{id}/import-parts', 'ProductController@importParts')->name('products.parts.import.post');

    // Documents

    Route::resource('/documents', 'DocumentController');
    Route::resource('/doctypes', 'DoctypeController');

    Route::resource('/faq', 'QuestionAnswerController');
    Route::post('/faq/sort', 'QuestionAnswerController@sortQuestions')->name('faq.sort.post');
    /******************** Route pour trier l'ordre des questions/réponses */

    Route::resource('/videos', 'VideoController');

    Route::resource('/phonebook', 'PhonebookController');

    // Weblinks
    Route::resource('/weblinks', 'WeblinkController');
    Route::post('/weblinks/sort', 'WeblinkController@sortWeblinks')->name('weblinks.sort.post');


    // Comptes Utilisateurs
    Route::get('/users/cycleurope', 'UserController@cycleurope')->name('users.cycleurope');
    Route::get('/users/role/{role}', 'UserController@withRole')->name('users.withrole');
    Route::get('/users/outdated', 'UserController@outdatedAssortments')->name('users.outdated');
    Route::get('/users/last-logins', 'UserController@lastLogins')->name('users.logins.last');
    Route::resource('/users', 'UserController');
    Route::post('/users/by-username', 'UserController@byUsername')->name('users.by-username');
    Route::post('/users/activate/{id}', 'UserController@activate')->name('users.activate');
    Route::post('/users/desactivate/{id}', 'UserController@desactivate')->name('users.desactivate');

    // Import des mots de passe (PIN M3) pour les comptes n'ayant aucun mot de passe
    Route::get('/import-passwords', 'ChangePasswordController@importForm')->name('passwords.import.form');
    Route::post('/import-passwords/process', 'ChangePasswordController@import')->name('passwords.import');

});


















Route::get('/dashboard', 'AppController@dashboard')->name('dashboard');
Route::get('/profile', 'AppController@profile')->name('profile');

// Changement du mot de passe utilisateur
Route::get('/change-password', 'ChangePasswordController@index')->name('password.index');
Route::post('/change-password', 'ChangePasswordController@store')->name('password.store');

// Envoi d'un nouveau mot de passe

Route::get('/reset-password', 'ChangePasswordController@reset')->name('password.reset');
Route::post('/reset-password', 'ChangePasswordController@sendNewEmail')->name('password.send.new');

// Import des mots de passe (PIN M3) pour les comptes n'ayant aucun mot de passe

Route::get('/import-passwords', 'ChangePasswordController@importForm')->name('passwords.import.form');
Route::post('/import-passwords/process', 'ChangePasswordController@import')->name('passwords.import');

// Users
Route::get('/users/cycleurope', 'UserController@cycleurope')->name('users.cycleurope');
Route::get('/users/role/{role}', 'UserController@withRole')->name('users.withrole');
Route::get('/users/outdated', 'UserController@outdatedAssortments')->name('users.outdated');
Route::get('/users/last-logins', 'UserController@lastLogins')->name('users.logins.last');
Route::resource('/users', 'UserController');
Route::post('/users/by-username', 'UserController@byUsername')->name('users.by-username');
Route::post('/users/activate/{id}', 'UserController@activate')->name('users.activate');
Route::post('/users/desactivate/{id}', 'UserController@desactivate')->name('users.desactivate');

// Mots de passe
Route::get('/change-password', 'ChangePasswordController@index')->name('password.index');
Route::post('/change-password', 'ChangePasswordController@store')->name('password.store');
Route::get('/reset-password', 'ChangePasswordController@reset')->name('password.reset');
Route::get('/send-new-password', 'ChangePasswordController@send')->name('password.send');
Route::get('/import-passwords', 'ChangePasswordController@importForm')->name('passwords.import.form');
Route::post('/import-passwords/process', 'ChangePasswordController@import')->name('passwords.import');
Route::post('/reset-password', 'ChangePasswordController@sendNewEmail')->name('password.send.new');


// Brands
Route::resource('/brands', 'BrandController');

// Brands
Route::get('/products/{id}/import-parts', 'ProductController@importPartsForm')->name('products.parts.import.get');
Route::resource('/products', 'ProductController');
Route::get('/products/{id}/empty-bom', 'ProductController@emptyBOM')->name('products.bom.empty');
Route::post('/products/{id}/import-parts', 'ProductController@importParts')->name('products.parts.import.post');

// Retours de Formation
Route::get('/feedbacks/create/{id?}', 'FeedbackController@create')->name('feedbacks.create');
Route::resource('/feedbacks', 'FeedbackController')->except(['create']);

// Stats
Route::get('/stats/logins', 'UserLoginController@index')->name('stats.logins.index');
Route::get('/stats/logins/most-active', 'UserLoginController@mostActiveUsers')->name('stats.logins.most-active');






ctf0\MediaManager\MediaRoutes::routes();
