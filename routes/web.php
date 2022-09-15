<?php

use App\Models\Voucher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes(['register' => true]);

Route::middleware('guest')->group(function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
    Route::post('/save', [App\Http\Controllers\HomeController::class, 'save'])->name('home.save');
    Route::get('/sucesso', function () {
        return view('success');
    })->name('home.success');
    Route::post('/saveContato', [App\Http\Controllers\HomeController::class, 'saveContato'])->name('home.saveContato');

});

// require __DIR__.'/auth.php';
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')
//    ->name('io_generator_builder');
// Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')
//    ->name('io_field_template');
// Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')
//    ->name('io_relation_field_template');
// Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')
//    ->name('io_generator_builder_generate');
// Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')
//    ->name('io_generator_builder_rollback');
// Route::post('generator_builder/generate-from-file','\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile')
//    ->name('io_generator_builder_generate_from_file');

Route::resource('cursos', App\Http\Controllers\CursoController::class);
Route::resource('divulgadors', App\Http\Controllers\DivulgadorController::class);
Route::resource('vouchers', App\Http\Controllers\VoucherController::class);
Route::resource('alunos', App\Http\Controllers\AlunoController::class);
Route::post('/voucher/generate', [App\Http\Controllers\VoucherController::class, 'generate'])->name('vouchers.generate');
Route::get('/aluno/check/{id}', [App\Http\Controllers\AlunoController::class, 'check'])->name('alunos.check');
Route::get('/aluno/check', [App\Http\Controllers\AlunoController::class, 'index_ok'])->name('alunos.ok');
Route::resource('contatos', App\Http\Controllers\ContatoController::class);
Route::resource('locals', App\Http\Controllers\LocalController::class);

Route::get('clear_cache', function () {
    \Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('migrate', function () {
    \Artisan::call('migrate',['--force' => true]);
    return "Migrations are run";
});

});