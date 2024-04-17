<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact'); //esto es para seguir la logica de Ruta/Controlador/Funcion
        //en este caso localhost:port/contacts/create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Esto no hay que hacerlo asi es solo para testear que funciona, ahora mismo cualquiera puede crear un contacto, aunque no este logeado
        // Contact::create($request->all());

        // if (is_null($request->get('name'))) {
        //     return Response::redirectTo()->back()->withErrors([//Tambien seria valido usar el helper return back ()->whithError([]);
        //         'name'=>'This field is required',
        //     ]);
        // }
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required|digits:9',
            'email' => 'required|email',
            'age' => 'required| numeric|min:1|max:255', //el max es 255 porque hemos puesto que como max adminta 1B
        ]);

        return response('Contact created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
