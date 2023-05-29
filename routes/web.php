<?php

use App\Http\Controllers\AomaHome;
use App\Http\Controllers\AomaMasterData;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DeltasProduksiMf2WController;
use App\Http\Controllers\DeltasDataProdukController;
use App\Http\Controllers\HRPortal\AddJobDesc;
use App\Http\Controllers\HRPortal\AddKompetensiDept;
use App\Http\Controllers\HRPortal\AddLinesKompetensiDept;
use App\Http\Controllers\HRPortal\DashboardHP;
use App\Http\Controllers\HRPortal\KnowledgeManagemenList;
use App\Http\Controllers\HRPortal\OjtMasterDept;
use App\Http\Controllers\HRPortal\StrukturOrgHP;
use App\Http\Controllers\HRPortal\SubmitedStrukturOrgHP;
use App\Http\Controllers\HRPortal\ViewApprovalStrukturOrgDetailHP;
use App\Http\Controllers\HRPortal\ViewApprovalStrukturOrgHP;
use App\Http\Controllers\Komets\DashboardKomet;
use App\Http\Controllers\Komets\ToolMonitorAdmin;
use App\Models\StrukturHP;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login')
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return Inertia::render('Home');
    })->name('home');
});

Route::prefix('deltas')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->name('deltas.')->group(function () {
    Route::get('/produksi_mf2w', [DeltasProduksiMf2WController::class, 'index'])->name('produksi_mf2w');
});

Route::prefix('deltas')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->name('deltas.')->group(function () {
        Route::get('/data_produk', [DeltasDataProdukController::class, 'index'])->name('data_produk');
    });

Route::prefix('fams')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->name('fams.')->group(function () {
    Route::get('/homefams',[AomaHome::class,'index'])->name('homefams');
    Route::get('/masterdatafams',[AomaMasterData::class,'index'])->name('masterdatafams');
    Route::post('/addasset',[AomaMasterData::class,'addasset']);
});

Route::prefix('hrportal')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->name('hrportal.')->group(function () {
    Route::get('/dashboardhp',[DashboardHP::class,'index'])->name('dashboardhp');
    Route::get('/strukturorghp',[StrukturOrgHP::class,'index'])->name('strukturorghp');
    Route::post('/addstruktur',[StrukturOrgHP::class,'addstruktur']);
    Route::delete('/strukturorghp/{id}',[StrukturOrgHP::class,'destroy']);
    Route::post('/updatesruktur',[StrukturOrgHP::class,'updatesruktur']);
    Route::post('/submitstruktur',[StrukturOrgHP::class,'submitstruktur']);
    Route::get('/submitedstrukturorghp',[SubmitedStrukturOrgHP::class,'index'])->name('submitedstrukturorghp');
    Route::get('/viewapprovalstrukturorghp',[ViewApprovalStrukturOrgHP::class,'index'])->name('viewapprovalstrukturorghp');
    Route::get('/viewapprovalstrukturorgdetailhp/{dept}',[ViewApprovalStrukturOrgDetailHP::class,'index'])->name('viewapprovalstrukturorgdetailhp');
    Route::post('/approvestruktur',[StrukturOrgHP::class,'approvestruktur']);
    Route::get('/addjobdesc',[AddJobDesc::class,'index'])->name('addjobdesc');
    Route::post('/createjobdesc',[AddJobDesc::class,'createjobdesc']);
    Route::get('/addkompetensidept',[AddKompetensiDept::class,'index'])->name('addkompetensidept');
    Route::post('/createkompetensimaster',[AddKompetensiDept::class,'createkompetensimaster']);
    Route::get('/addlineskompetensidept/{id}',[AddLinesKompetensiDept::class,'index'])->name('addlineskompetensidept');
    Route::post('/createdkompetensilines',[AddLinesKompetensiDept::class,'createdkompetensilines']);
    Route::get('/ojtmasterdept',[OjtMasterDept::class,'index'])->name('ojtmasterdept');
    Route::get('/knowledgemanagementlist',[KnowledgeManagemenList::class,'index'])->name('knowledgemanagementlist');
});

Route::prefix('komets')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->name('komets.')->group(function () {
    Route::get('/dashboardkomet',[DashboardKomet::class,'index'])->name('dashboardkomet');
    Route::get('/toolmonitoradmin',[ToolMonitorAdmin::class,'index'])->name('toolmonitoradmin');
    Route::post('/addtool',[ToolMonitorAdmin::class,'addtool']);
    // Route::get('/strukturorghp',[StrukturOrgHP::class,'index'])->name('strukturorghp');
    // Route::post('/addstruktur',[StrukturOrgHP::class,'addstruktur']);
    // Route::delete('/strukturorghp/{id}',[StrukturOrgHP::class,'destroy']);
    // Route::post('/updatesruktur',[StrukturOrgHP::class,'updatesruktur']);
    // Route::post('/submitstruktur',[StrukturOrgHP::class,'submitstruktur']);
    // Route::get('/submitedstrukturorghp',[SubmitedStrukturOrgHP::class,'index'])->name('submitedstrukturorghp');
    // Route::get('/viewapprovalstrukturorghp',[ViewApprovalStrukturOrgHP::class,'index'])->name('viewapprovalstrukturorghp');
    // Route::get('/viewapprovalstrukturorgdetailhp/{dept}',[ViewApprovalStrukturOrgDetailHP::class,'index'])->name('viewapprovalstrukturorgdetailhp');
    // Route::post('/approvestruktur',[StrukturOrgHP::class,'approvestruktur']);
    // Route::get('/addjobdesc',[AddJobDesc::class,'index'])->name('addjobdesc');
    // Route::post('/createjobdesc',[AddJobDesc::class,'createjobdesc']);
    // Route::get('/addkompetensidept',[AddKompetensiDept::class,'index'])->name('addkompetensidept');
    // Route::post('/createkompetensimaster',[AddKompetensiDept::class,'createkompetensimaster']);
    // Route::get('/addlineskompetensidept/{id}',[AddLinesKompetensiDept::class,'index'])->name('addlineskompetensidept');
    // Route::post('/createdkompetensilines',[AddLinesKompetensiDept::class,'createdkompetensilines']);
    // Route::get('/ojtmasterdept',[OjtMasterDept::class,'index'])->name('ojtmasterdept');
});

