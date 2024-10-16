<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'frontend/index')->name('index');
//Inspekisya haqida
Route::view('/general_information', 'frontend/inspeksiya_haqida/umumiy_maʼlumot')->name('general_information');
Route::view('/management', 'frontend/inspeksiya_haqida/rahbariyat')->name('management');
Route::view('/regional_department', 'frontend/inspeksiya_haqida/hududiy')->name('regional_department');
Route::view('/structure', 'frontend/inspeksiya_haqida/tashkiliy_tuzilma')->name('structure');
Route::view('/higher_authority', 'frontend/inspeksiya_haqida/yuqori_organ')->name('higher_authority');
//Hujjatlar
Route::view('/approval_files', 'frontend/hujjatlar/maqullash_hujjatlari')->name('approval_files');
Route::view('/decrees', 'frontend/hujjatlar/farmonlar')->name('decrees');
Route::view('/weak_norm_documents', 'frontend/hujjatlar/kuchsiz_meyoriy_hujjatlar')->name('weak_norm_documents');
Route::view('/standard_documents', 'frontend/hujjatlar/meyoriy_hujjatalar')->name('standard_documents');
Route::view('/laws', 'frontend/hujjatlar/qonunlar')->name('laws');
Route::view('/minister_law', 'frontend/hujjatlar/vazir_qonun')->name('minister_law');
//Axborot xizmatlari
Route::view('/state_budget', 'frontend/axborot_xizmatlari/davlat_byudjet')->name('state_budget');
Route::view('/ads_tenders', 'frontend/axborot_xizmatlari/elonlar_tenderlar')->name('ads_tenders');
Route::view('/photo_gallery', 'frontend/axborot_xizmatlari/foto_galereya')->name('photo_gallery');
Route::view('/publications', 'frontend/axborot_xizmatlari/nashrlar')->name('publications');
Route::view('/media_representatives', 'frontend/axborot_xizmatlari/OAV_vakillar')->name('media_representatives');
Route::view('/press_release', 'frontend/axborot_xizmatlari/press_reliz')->name('press_release');
Route::view('/presentations', 'frontend/axborot_xizmatlari/taqdimotlar')->name('presentations');
Route::view('/video_gallery', 'frontend/axborot_xizmatlari/video_galereya')->name('video_gallery');
Route::view('/analytical_data', 'frontend/axborot_xizmatlari/tahliliy_malumotlar')->name('analytical_data');


//Faoliyat
Route::view('corruption', 'frontend/faoliyat/avtikorrupsiya')->name('corruption');
Route::view('state_control', 'frontend/faoliyat/davlat_nazorat')->name('state_control');
Route::view('application_accept', 'frontend/faoliyat/murojaat_qabul')->name('application_accept');

//Xizmatlar
Route::view('/export_help','frontend/xizmatlar/eksport')->name('export_help');
Route::view('/citizens','frontend/xizmatlar/fuqarolar')->name('citizens');
Route::view('/interactive_services','frontend/xizmatlar/interaktiv_xizmatlar')->name('interactive_services');
Route::view('/consumption_help','frontend/xizmatlar/istemol_yordam')->name('consumption_help');
Route::view('/open_data','frontend/xizmatlar/ochiq_malumotlar')->name('open_data');
Route::view('/complaint_application','frontend/xizmatlar/shikoyat_arizalar')->name('complaint_application');

//Vacancy
Route::view('/vacancy','frontend/vacancy/vacancy')->name('vacancy');

//Yoshlar siyosati
Route::view('/young','frontend/yoshlar/young')->name('young');