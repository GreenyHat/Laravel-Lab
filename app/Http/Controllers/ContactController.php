<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('contacts.index', ['contacts' => Contact::all()]); Esto da todos los contactos 
        //a todos los usuarios asi que no nos sirve
        //Llamo a la vista que acabo de crear en views/contacts desde el controlador
        $contacts = auth()->user()->contacts;

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create'); //esto es para seguir la logica de Ruta/Controlador/Funcion
        //en este caso localhost:port/contacts/create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        //Esto no hay que hacerlo asi es solo para testear que funciona, ahora mismo cualquiera puede crear un contacto, aunque no este logeado
        // Contact::create($request->all());

        // if (is_null($request->get('name'))) {
        //     return Response::redirectTo()->back()->withErrors([//Tambien seria valido usar el helper return back ()->whithError([]);
        //         'name'=>'This field is required',
        //     ]);
        // }



        // $data = $request->validate([
        //     'name' => 'required',
        //     'phone_number' => 'required|digits:9',
        //     'email' => 'required|email',
        //     'age' => 'required| numeric|min:1|max:255', //el max es 255 porque hemos puesto que como max adminta 1B
        // ]);




        // auth()->user()->contacts()->create($request->validated());

        // return redirect()->route('home');

        $contact = auth()->user()->contacts()->create($request->validated());

        return redirect('home')->with('alert', [
            'message' => "Contact $contact->name successfully saved",
            'type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $this->authorize('view', $contact);

        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $this->authorize('update', $contact); // OJO AQUI, QUE NO ES EDIT ES UPDATE, YA QUE REALMENTE ESTAS ACTUALIZANDO EN LA BBDD

        return view('contacts.edit', compact('contact'));
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
        $this->authorize('update', $contact);

        $contact->update($request->validated());

        return redirect('home')->with('alert', [
            'message' => "Contact $contact->name successfully updated",
            'type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $this->authorize('delete', $contact);
        //IMPORTANTE EL ORDEN DE LAS ORDENES, TIENE QUE ESTAS AUTORIZADO ANTES DE PODER ACCEDER AL COMANDO DE BORRADO
        $contact->delete();
        // return redirect()->route('home');

        return redirect('home')->with('alert', [
            'message' => "Contact $contact->name successfully deleted",
            'type' => 'success',
        ]);
    }
}
