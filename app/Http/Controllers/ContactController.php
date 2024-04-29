<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;



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
        $contacts = auth()
            ->user()
            ->contacts()
            ->orderBy('name', 'asc')
            ->paginate(6); //para poner paginas de 6 en 6

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

        $data = $request->validated();

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profiles', 'public');
            $data['profile_picture'] = $path;
        }

        $contact = auth()->user()->contacts()->create($data);

        Cache::forget(auth()->id());
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

        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // Define otras reglas de validación para tus campos aquí
        ]);

        // Procesar el archivo de imagen si se ha proporcionado
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profiles', 'public');
            $validatedData['profile_picture'] = $path;
        }

        // Actualizar el contacto con los datos validados
        $contact->update($validatedData);

        Cache::forget(auth()->id());

        // Redirigir con un mensaje de alerta
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
        Cache::forget(auth()->id());

        return back()->with('alert', [
            'message' => "Contact $contact->name successfully deleted",
            'type' => 'success',
        ]);
    }
}
