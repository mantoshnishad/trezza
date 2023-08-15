<?php

use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use App\Imports\ExcelFileImport;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Categorytype;
use App\Models\Celebration;
use App\Models\Galleryfilter;
use App\Models\Message;
use App\Models\Role;
use App\Models\RoomUser;
use App\Models\Rotationalbutton;
use App\Models\Spotcollection;
use App\Models\Subcategory;
use App\Models\Swiperslider;
use App\Models\url;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('test', function () {
    
});

Route::get('exls', function () {
    Excel::import(new ExcelFileImport, public_path('files/Data Structure.xlsx'));
});

Route::get('/grid', function () {
    return view('livewire.component.chetak-grid');
});

Route::get('update-url', function () {
    $data = Url::all();
    foreach ($data as $d) {
        $url = str_replace("admin/", "", $d->url);
        Url::find($d->id)->update([
            'url' => $url,
        ]);
    }
});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/add-project', [HomeController::class, 'addProject'])->name('add.project');
Route::get('/custom-made-jewelry', [HomeController::class, 'customMadeJewelry'])->name('custom.made.jewelry');
Route::get('/our-services', [HomeController::class, 'ourServices'])->name('our.services');
Route::get('/casting', [HomeController::class, 'casting'])->name('casting');
Route::get('/clean-scrap-service', [HomeController::class, 'cleanScrapService'])->name('clean.scrap.service');
Route::get('/diamonds-gemstones', [HomeController::class, 'diamondsGemstones'])->name('diamonds.gemstones');
Route::get('/repairs-services', [HomeController::class, 'repairsServices'])->name('repairs.services');
Route::get('/loose-diamonds', [HomeController::class, 'looseDiamonds'])->name('loose.diamonds');
Route::get('/cad-printing-service-and-design', [HomeController::class, 'cadPrintingServiceAndDesign'])->name('cad.printing.service.and.design');
Route::get('/3d-printing', [HomeController::class, 'tdPrinting'])->name('th.printing');
Route::get('/molds', [HomeController::class, 'molds'])->name('molds');
Route::get('/stone-setting', [HomeController::class, 'stoneSetting'])->name('stone.setting');
Route::get('/cad-cam', [HomeController::class, 'cadCam'])->name('cad.cam');
Route::get('/line-developing', [HomeController::class, 'lineDeveloping'])->name('line.developing');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/upcoming-shows', [HomeController::class, 'upcomingShows'])->name('upcoming.shows');
Route::get('/frontend-register', [HomeController::class, 'frontendRegister'])->name('frontend.register');

Route::group(['prefix' => 'auth'],function(){
    Route::get('/', [HomeController::class, 'dashboard'])->name('home')->middleware('auth');
    Route::get('/workorder', [HomeController::class, 'workorder'])->name('workorder')->middleware('auth');
Route::controller(CustomerController::class)->group(function () {
    Route::get('customers', 'index')->name('customers');
});

Route::controller(EmployeeController::class)->group(function () {
    Route::get('employees', 'index')->name('employees');
});
Route::controller(ComplaintController::class)->group(function () {
    Route::get('complaints/{status?}', 'index')->name('complaints');
});

Route::controller(MasterController::class)->group(function () {
    Route::get('master/{component}', 'index')->name('master.index');
});
});
Route::get('message', function () {
    return Role::find(4)->users;
    $rooms = User::find(1)->rooms()->where('has_group', 0)->pluck('room_id');
    return $rooms;
    $room = RoomUser::whereIn('room_id', $rooms)->where('user_id', 1)->first();
});
