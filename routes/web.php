<?php

use Illuminate\Support\Facades\Route;
use app\Http\DogController;
use App\Models\Computer;
use App\Http\Controllers\CatController;
use Illuminate\Session\Store;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abel', function () {
    return view('miprimeravista');
});
Route::get('/perritos', function () {
    return view('misperritos');
});
Route::get('/gatitos', function () {
    return view('misgatitos');
});

Route::get('/gatocontrolador', [CatController::class, 'index']);

Route::get('/micomponente', function () {
    return view('componente');
});



Route::get('/miplantillaprimera', function () {
    return view('primeraforma');
});



Route::get('/miplantillasegunda', function () {
    return view('segundaforma');
});

Route::get('/bimbo', function () {
    return view('bimbo');
});

Route::get('/brayan', function () {

    //INSERTAR
    /*
    $computer = new Computer;
    $computer->model='Brayan Daniel Albornoz Ciau';
    $computer->mark='EcoHero';
    $computer->size=14;
    $computer->published_at='2024-10-27 13:11:00';
    $computer->is_active=true;
    $computer->size=14;
    $computer->save();
    return $computer;
    */

    //SELECCIÓN POR ID
    
    $computer = Computer::find(2);

    //return $computer->published_at;
    //return $computer->published_at->format('d-m-Y');
    return $computer->published_at->diffForHumans();
    

    //SELECCIÓN POR FILTRO-WHERE
    /*
    $computer = Computer::where('model','Envy 15')->first();
    $computer->model = 'Envy 15eeeeee';
    $computer->save();
    return $computer;
    */
    

    //SELECCION DE TODOS LOS REGISTROS
    /*
    $computer = Computer::all();
    return $computer;
    */

    //SELECCION DE UNA PARTE DE LOS REGISTROS
    /*
    $computer = Computer::where('id','>',1)->orderBy('id','desc')->get();
    return $computer;
    */
    
    //SELECCION DE CAMPOS A DESPLEGAR
    /*
    $computer = Computer::where('id','>=',1)
                ->select('model','size')
                ->orderBy('id','desc')
                ->get();
    return $computer;
    */
    //BORRAR REGISTRO
    /*
    $computer = Computer::find(1);
    $computer->delete();
    return $computer;
    */
});