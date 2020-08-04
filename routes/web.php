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

Route::get('/', function () {
    return view('landing');
});

Route::get('hakkimizda', function () {
    return view('aboutUs');
});

Route::get('danismanlik-hizmetleri', function () {
    return view('consultServices');
});

Route::get('kvkk-uyumluluk-cozumleri', function () {
    return view('kkvkServices');
});

Route::get('siber-guvenlik-cozumleri', function () {
    return view('cyberSecurity');
});

Route::get('veri-envanter-yonetimi-cozumleri', function () {
    return view('dataServices');
});

Route::get('bulut-cozumleri', function () {
    return view('cloudServices');
});

Route::get('erp-cozumleri', function () {
    return view('erpServices');
});

Route::get('cografi-bilgi-sistemi-danismanlik-hizmetleri', function () {
    return view('cbsServices');
});

Route::get('ozel-yazilim-ve-yazilim-gelistirme-cozumleri', function () {
    return view('softwareDev');
});

Route::get('is-analitigi-ve-is-zekasi-cozumleri', function () {
    return view('workAnalytics');
});

Route::get('crm-cozumleri', function () {
    return view('crmServices');
});

Route::get('blockchain-cozumleri', function () {
    return view('blockChain');
});

Route::get('iletisim', function () {
    return view('contactUs');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});