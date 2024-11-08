<?php

use App\Http\Controllers\AcceptController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\AnalyticalController;
use App\Http\Controllers\ApprovalFileController;
use App\Http\Controllers\CorruptionController;
use App\Http\Controllers\CorruptionTitleController;
use App\Http\Controllers\GeneralInfoController;
use App\Http\Controllers\HigherOrganController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OpenDataController;
use App\Http\Controllers\PresentationsController;
use App\Http\Controllers\PressRelizController;
use App\Http\Controllers\StateBudgetController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\YoungController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'frontend/index')->name('index');
//Inspekisya haqida
Route::get('/general_information', [GeneralInfoController::class, 'index'])->name('general_information');
Route::get('/management', [ManagerController::class, 'index'])->name('management');
Route::view('/regional_department', 'frontend/inspeksiya_haqida/hududiy')->name('regional_department');
Route::view('/structure', 'frontend/inspeksiya_haqida/tashkiliy_tuzilma')->name('structure');
Route::get('/higher_authority', [HigherOrganController::class, 'index'])->name('higher_authority');
Route::get('employee_info/{id}', [ManagerController::class, 'show'])->name('employee_info');

//Hujjatlar
Route::get('/approval_files', [ApprovalFileController::class, 'index'])->name('approval_files');
Route::get('/approval_files_download/{id}', [ApprovalFileController::class, 'download'])->name('approval_files_download');
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
Route::get('/media_representatives', [MediaController::class, 'index'] )->name('media_representatives');
Route::get('/press_release', [PressRelizController::class, 'index'])->name('press_release');
Route::get('/presentations', [PresentationsController::class, 'index'])->name('presentations');
Route::get('/presentations_download/{id}', [PresentationsController::class, 'download'])->name('presentations_download');
Route::get('/video_gallery', [VideoController::class, 'index'])->name('video_gallery');
Route::get('/analytical_data', [AnalyticalController::class, 'index'])->name('analytical_data');
Route::get('/analytical_data_show/{id}', [AnalyticalController::class, 'show'])->name('analytical_data_show');


//Faoliyat
Route::get('corruption', [CorruptionTitleController::class, 'index'])->name('corruption');
Route::get('/corruptions/download/{id}', [CorruptionController::class, 'download'])->name('corruptions.download');
Route::view('state_control', 'frontend/faoliyat/davlat_nazorat')->name('state_control');
Route::get('application_accept', [AcceptController::class, 'index'])->name('application_accept');

//Xizmatlar
Route::view('/export_help', 'frontend/xizmatlar/eksport')->name('export_help');
Route::view('/citizens', 'frontend/xizmatlar/fuqarolar')->name('citizens');
Route::view('/interactive_services', 'frontend/xizmatlar/interaktiv_xizmatlar')->name('interactive_services');
Route::view('/consumption_help', 'frontend/xizmatlar/istemol_yordam')->name('consumption_help');
Route::get('/open_data', [OpenDataController::class, 'index'])->name('open_data');
Route::get('/open_data_download/{id}', [OpenDataController::class, 'download'])->name('open_data_download');
Route::view('/complaint_application', 'frontend/xizmatlar/shikoyat_arizalar')->name('complaint_application');

//Vacancy
Route::get('/vacancy', [VacancyController::class, 'index'])->name('vacancy');
Route::get('/vacancy_show/{id}', [VacancyController::class, 'show'])->name('vacancy_show');

//Yoshlar siyosati
Route::get('/young', [YoungController::class, 'index'])->name('young');
Route::get('/young_show/{id}', [YoungController::class, 'show'])->name('young_show');

//News
Route::get('news', [NewsController::class, 'index'])->name('news');
Route::get('news_show/{id}', [NewsController::class, 'show'])->name('news_show');
Route::get('news_download/{id}', [NewsController::class, 'download'])->name('news_download');
