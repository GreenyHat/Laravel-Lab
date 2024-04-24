@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit Contact</div>

          <div class="card-body">
            <div class="d-flex justify-content-center mb-4">
              <img class="profile-picture"
                src="{{ Storage::url($contact->profile_picture) }}">
            </div>
            <form method="POST"
              action="{{ route('contacts.update', $contact->id) }}"
              enctype="multipart/form-data">
              <!--Con esto nos evitamos meter las rutas a mano. Lo enlazamos con un nombre de routes de web.php que luego se resuelve como un URI-->
              @csrf
              @method('PUT')

              <div class="row mb-3">
                <label for="name"
                  class="col-md-4 col-form-label text-md-end">Name</label>

                <div class="col-md-6">
                  <input value="{{ old('name') ?? $contact->name }}"
                    id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') ?? $contact->name }}"
                    autocomplete="name" {{-- el operador ?? es como el ternario, si es nulo izquierda se ejecuta derecha --}} autofocus>
                  @error('name')
                    <span class = "invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="phone_number"
                  class="col-md-4 col-form-label text-md-end">Phone Number</label>

                <div class="col-md-6">
                  <input
                    value="{{ old('phone_number') ?? $contact->phone_number }}"
                    id="phone_number" type="tel"
                    class="form-control @error('phone_number') is-invalid @enderror"
                    name="phone_number"
                    value="{{ old('phone_number') ?? $contact->phone_number }}"
                    autocomplete="phone_number">
                  @error('phone_number')
                    <span class = "invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email"
                  class="col-md-4 col-form-label text-md-end">Email</label>

                <div class="col-md-6">
                  <input id="email"
                    value="{{ old('email') ?? $contact->email }}" type="text"
                    class="form-control @error('email') is-invalid @enderror"
                    name="email" autocomplete="age">
                  @error('email')
                    <span class = "invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="age"
                  class="col-md-4 col-form-label text-md-end">Age</label>

                <div class="col-md-6">
                  <input value="{{ old('age') ?? $contact->age }}" id="age"
                    type="tel"
                    class="form-control @error('age') is-invalid @enderror"
                    name="age" value="{{ old('age') ?? $contact->age }}"
                    autocomplete="age">
                  @error('age')
                    <span class = "invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="age"
                  class="col-md-4 col-form-label text-md-end">Profile
                  Picture</label>

                <div class="col-md-6">
                  <input id="profile_picture" type="file"
                    class="@error('profile_picture') is-invalid @enderror form-control"
                    name="profile_picture">

                  @error('profile_picture')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>


              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
