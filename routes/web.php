<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contacts/create', [ContactController::class, 'create']);
//esto es para seguir la logica de Ruta/Controlador/Funcion 
//en este caso localhost:port/contacts/create
Route::post('/contacts/', [ContactController::class, 'store'])->name('contacts.store');

// Route::get('contact', fn () => Response::view('contact'));

// Route::post('/contact', function (Request $request) {
//     $data = $request->all();

//     Contact::create($data);

//     // $contact = new Contact();
//     // $contact->name = $data["name"];
//     // $contact->phone_number = $data["phone_number"];
//     // $contact->save(); Esto si llamamos al metodo estatico create y  sobreescribimos la variables $fillable en el Contact.php y ponemos los campos admisibles, podemos relacionarlos con 


//     return "Contact Stored";
// });


    
// Route::get('/contact', function(){
//     return Response::view('contact');//Hay que importar de Iluminate Support Facade
// });                                     Cuando solo es un return y no tiene logica por medio se puede reducir:



//     DB::statement("INSERT INTO contacts (name, phone_number) VALUES (?,?)",[$data["name"], $data["phone_number"]]);