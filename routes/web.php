 <?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/page1', [PageController::class, 'affichepage1']);
Route::get('/page2', [PageController::class, 'affichepage2']);
Route::get('/affichage/donnees', [PageController::class, 'donnee']);
Route::post('/category/add', [CategoryController::class, 'AddCategory']);
Route::get('/category/form', [CategoryController::class, 'ShowFormCategory']);
Route::get('/category/list', [CategoryController::class, 'Liste']);
Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);
