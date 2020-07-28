<?php

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOTools;

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
Route::redirect('/','/en');
Route::group(['prefix' => '{language}'],function(){
    Route::get('/', function () {
        if(app()->getLocale() == 'sr'){
         
            SEOTools::setTitle('BelgradeYachting | Dobrodošli' );
            SEOTools::setCanonical('https://belgradeyachting.com/sr');
            SEOTools::setDescription('BelgradeYachting, krstarenje rekom Dunavom i Savom, iznajmnjivanje broda, organizujte dogadjaj, vencanje, ili rodjendan dok krstarite.');
            SEOMeta::addKeyword(['boat', 'belgrade', 'cruise','rent, Danube, Sava, river']);
            SEOTools::opengraph()->setUrl('https://belgradeyachting.com');
            SEOTools::opengraph()->addProperty('type', 'articles');
            // SEOTools::twitter()->setSite('@LuizVinicius73');
            SEOTools::jsonLd()->addImage('https://BelgradeYachting/img/belgrade_yachting-logo.png');

        }else{
            SEOTools::setTitle('BelgradeYachting | Welcome' );
            SEOTools::setCanonical(route(Illuminate\Support\Facades\Route::currentRouteName(),app()->getLocale()));
            SEOTools::setDescription('BelgradeYachting, crusing Danube and Sava river, rent a boat, have an event, wedding, or a birthday party while having a cruise.');
            SEOMeta::addKeyword(['brod', 'beograd', 'krstarenje','iznajmnjivanje, Dunav, Sava, reka']);
            SEOTools::opengraph()->setUrl('https://belgradeyachting.com');
            SEOTools::opengraph()->addProperty('type', 'articles');
            // SEOTools::twitter()->setSite('@LuizVinicius73');
            SEOTools::jsonLd()->addImage('https://BelgradeYachting/img/belgrade_yachting-logo.png');

        }
        

        return view('welcome');
    })->name('home');
   
    // Route::get('/about', function () {
    //     return view('about');
    // })->name('about');
             

});    

