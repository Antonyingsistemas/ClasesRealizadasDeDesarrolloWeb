<?php

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

/*rutas de la aplicacion con las vistas*/
Route::get('/', function () {
    return view('welcome'); //return 'hola mundo'; recuerda el welcome de view en resources
});

Route::get('hola', function () {//post get put 
    return 'Hola mundo'; // tambien '<h1>Hola Mundo</h1>'
});

Route::get('usuarios/{nombre}/{id}', function ($nombre, $id) {//usuarios/{nombre} es una ruta dinamica, se pone un parametro con nombre
    return 'Este es el usuario ' . $nombre . ' su id es: '.$id; // http://localhost/Laravel/MyApp/public/usuarios/Luis/2 por ejemplo
});

Route::get('usuarios/{nombre}/{id}', function ($nombre, $id) {//usuarios/{nombre} es una ruta dinamica, se pone un parametro con nombre
    return 'Este es el usuario ' . $nombre . ' su id es: '.$id; // http://localhost/Laravel/MyApp/public/usuarios/Luis/2 por ejemplo
    });

    // OJO debe aparecer todo esto en el TERMINAL 
    // Antony@DESKTOP-0MMQCCI MINGW64 /c/xampp/htdocs/Laravel/MyApp
    // $ php artisan serve
    // Starting Laravel development server: http://127.0.0.1:8000
    // [Sat Mar 13 20:49:53 2021] PHP 7.4.15 Development Server (http://127.0.0.1:8000) started
    
    Route::get('usuarios/{nombre}/{id}', function ($nombre, $id) {//usuarios/{nombre} es una ruta dinamica, se pone un parametro con nombre
    return 'Este es el usuario ' . $nombre . ' su id es: '.$id; // http://localhost/Laravel/MyApp/public/usuarios/Luis/2 por ejemplo
    });

    Route::get('cursos', function(){

        $nombre = 'Hola soy AxpeerD';
        $datos = array(
            'curso1' => 'javascript' ,
            'curso2' => 'java' ,
            'curso3' => 'php'

        );
        
        // return view('cursos', compact('nombre'));//regresa las vistas o cursos.php , compact('nombre') para pasar el nombre de la variable 
       
        // return view('cursos')->with('nombre', $nombre);//el mismo resultado que con compact, pasando valor
        
        return view('tutoriales.cursos')->with('datos', $datos);//pasando un arreglo a la vista / 'tutoriales.cursos' para encontrar la carpeta donde esta el archio
    
    });

    //para conecta a la base de datos y extraer los datos
    Route::get('cliente', function(){
        
        $cliente = App\Models\Cliente::find(2);     //first() resultado de la primera persona,para encontrar la carpeta con la conexion de la bd
        echo $cliente->nombre;                      //el dato del nombre

    });

    //haciendo la ruta dinamica
    Route::get('cliente/{id}', function($id){//ejemplo http://localhost/Laravel/MyApp/public/cliente/1
        
        $cliente = App\Models\Cliente::find($id);     //para encontrar la carpeta con la conexion de la bd
        echo $cliente->nombre;                      //el dato del nombre

    });


    Route::get('cliente_nombre', function(){//ejemplo http://localhost/Laravel/MyApp/public/cliente_nombre
        
            $cliente = App\Models\Cliente::where('nombre', '=', 'Luis')->first();    //vamos a extraer el nombre de la persona que tenga como nombre luis
            echo $cliente->id;                                                   //el dato del nombre
    
    });

    //traer la informacion de la tabla personas
    // Route::get('personas', function(){

    //     $personas = App\Models\Persona::all();

    //     // echo $personas;

    //     //mostrar solo los nombres de la persona
    //     foreach($personas as $persona){
    //         echo $persona->nombre . '<br/>';
    //     }
    // });

    //con controladores
    Route::get('personas', 'App\Http\Controllers\PersonaController@mostrarUsuarios');//ruta con contralador, con funcion mostrarUsuario

