<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\AnalyticalController;
use App\Http\Controllers\ApprovalFileController;
use App\Http\Controllers\CorruptionController;
use App\Http\Controllers\CorruptionTitleController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PresentationsController;
use App\Http\Controllers\StateBudgetController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'frontend/index')->name('index');
//Inspekisya haqida
Route::view('/general_information', 'frontend/inspeksiya_haqida/umumiy_maʼlumot')->name('general_information');
Route::get('/management', [ManagerController::class, 'index'])->name('management');
Route::view('/regional_department', 'frontend/inspeksiya_haqida/hududiy')->name('regional_department');
Route::view('/structure', 'frontend/inspeksiya_haqida/tashkiliy_tuzilma')->name('structure');
Route::view('/higher_authority', 'frontend/inspeksiya_haqida/yuqori_organ')->name('higher_authority');
Route::get('employee_info/{id}', [ManagerController::class, 'show'])->name('employee_info');

//Hujjatlar
Route::get('/approval_files', [ApprovalFileController::class,'index'])->name('approval_files');
Route::get('/approval_files_download/{id}', [ApprovalFileController::class,'download'])->name('approval_files_download');
Route::view('/decrees', 'frontend/hujjatlar/farmonlar')->name('decrees');
Route::view('/weak_norm_documents', 'frontend/hujjatlar/kuchsiz_meyoriy_hujjatlar')->name('weak_norm_documents');
Route::view('/standard_documents', 'frontend/hujjatlar/meyoriy_hujjatlar')->name('standard_documents');
Route::view('/laws', 'frontend/hujjatlar/qonunlar')->name('laws');
Route::view('/minister_law', 'frontend/hujjatlar/vazir_qonun')->name('minister_law');

//Axborot xizmatlari
Route::get('/state_budget', [StateBudgetController::class, 'index'])->name('state_budget');
Route::get('/state_budget_download/{id}', [StateBudgetController::class, 'download'])->name('state_budget_download');
Route::get('/ads_tenders', [AdvertisementController::class, 'index'])->name('ads_tenders');
Route::get('/ads_tenders_download/{id}', [AdvertisementController::class, 'download'])->name('ads_tenders_download');
Route::view('/photo_gallery', 'frontend/axborot_xizmatlari/foto_galereya')->name('photo_gallery');
Route::view('/publications', 'frontend/axborot_xizmatlari/nashrlar')->name('publications');
Route::view('/media_representatives', 'frontend/axborot_xizmatlari/OAV_vakillar')->name('media_representatives');
Route::view('/press_release', 'frontend/axborot_xizmatlari/press_reliz')->name('press_release');
Route::get('/presentations', [PresentationsController::class, 'index'])->name('presentations');
Route::get('/presentations_download/{id}', [PresentationsController::class, 'download'])->name('presentations_download');
Route::get('/video_gallery', [VideoController::class, 'index'])->name('video_gallery');
Route::get('/analytical_data', [AnalyticalController::class, 'index'])->name('analytical_data');
Route::get('/analytical_data_show/{id}', [AnalyticalController::class, 'show'])->name('analytical_data_show');


//Faoliyat
Route::get('corruption', [CorruptionTitleController::class, 'index'])->name('corruption');
Route::get('/corruptions/download/{id}', [CorruptionController::class, 'download'])->name('corruptions.download');
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
Route::view('/vacancy_show','frontend/vacancy/vacancy_show')->name('vacancy_show');

//Yoshlar siyosati
Route::view('/young','frontend/yoshlar/young')->name('young');
Route::view('/young_show','frontend/yoshlar/young_show')->name('young_show');
