<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return view('saludo');
});

// Route::get('/suma', function () {
//     return view('suma');
// });


// Route::post('/suma', function (Request $request) {
//     $numero1 = $request->input('num1');
//     $numero2 = $request->input('num2');
//     $resultado = $numero1 + $numero2;

//     return view('suma', ['res' => $resultado]);
    
// });

Route::get('/suma', [SumaController::class, 'index']);

Route::post('/suma', [SumaController::class, 'Suma']);

Route::get('/productos', [ProductoController::class, 'index']);