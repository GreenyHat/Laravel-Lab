<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

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



Route::get('/', fn () => auth()->check() ? redirect('/home') : view('welcome'));

Auth::routes();

Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/billing-portal', [StripeController::class, 'billingPortal'])->name('billing-portal');
Route::get('/free-trial-end', [StripeController::class, 'freeTrialEnd'])->name('free-trial-end');

Route::middleware(['auth', 'subscription'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('contacts', ContactController::class);
});




// Route::get('/', fn () => auth()->check() ? redirect('/home') : view('welcome'));

// Auth::routes();

// Route::get('/checkout', function (Request $request) {
//     return $request->user()
//         ->newSubscription('default', config('stripe.price_id'))//esto accede a la carpeta config donde se almacenan las variables de entorno que devuelven arrays con ciertas configuraciones 
//         ->checkout();
// })->name('checkout');

// Route::get('/billing-portal', function (Request $request) {
//     return $request->user()->redirectToBillingPortal();
// });

// Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::middleware('auth')->resource('contacts', ContactController::class);


//TODAS ESTAS RUTAS TE LAS PUEDES AHORRAR CON EL COMANDO DE ARRIBA
// Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
// Route::post('/contacts/', [ContactController::class, 'store'])->name('contacts.store');
// Route::get('/contacts/{contact}/', [ContactController::class, 'show'])->name('contacts.show');
// Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
// Route::put('/contacts/{contact}/', [ContactController::class, 'update'])->name('contacts.update');
//esto es para seguir la logica de Ruta/Controlador/Funcion 
//en este caso localhost:port/contacts/create
// Route::delete('/contacts/{contact}/', [ContactController::class, 'destroy'])->name('contacts.destroy');

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