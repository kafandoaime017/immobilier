@extends('Template.template')

@section('content')
<style>
    .error
    {
        background-color: rgb(255, 230, 230);
        margin: 3px;
        color: rgb(147, 4, 4);
        font-weight: 700;
        padding: 6px;
        border-top: 2px solid red;
    }
    form p small
    {
        color:red !important;
    }
</style>

    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            {{-- <div class="col-lg-4">
                <img src="{{ asset('images/Sign in to the account with username and password.png') }}" class="img-fluid" alt="">
            </div> --}}
            <div class="col-lg-5">
                {{-- @if($errors->any)
                    @foreach ($errors->all() as $error )
                       <div class="error">
                            <small>{{ $error }}</small>
                       </div>
                    @endforeach
                @endif <br> --}}
                <div class="card p-3 shadow border-0">
                    <form id="myform" action="{{ route('register') }}" method="post">
                        @csrf
                        <h5 style="font-weight: 800;color:black">creer un compte </h5>
                        <p>
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control @error('nom') border-danger @enderror" name="nom" id="nom" value="{{ old('nom') }}">
                            @error('nom')
                                <small>{{ $message }}</small>
                            @enderror
                        </p>
                        <p>
                            <label for="prenom">Prenom</label>
                            <input type="text" class="form-control @error('prenom') border-danger @enderror" name="prenom" id="prenom" value="{{ old('prenom') }}">
                            @error('prenom')
                            <small>{{ $message }}</small>
                        @enderror
                        </p>
                        <p>
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') border-danger @enderror" name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                        </p>

                        <p>
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control @error('adresse') border-danger @enderror" name="adresse" id="adresse" value="{{ old('adresse') }}">

                        </p>
                        <p>
                            <label for="telephone">Telephone(WhatsApp)</label>
                            <input type="tel" class="form-control @error('telephone') border-danger @enderror" name="telephone" id="telephone" value="{{ old('telephone') }}">

                        </p>
                        {{-- <p>
                            <label for="role">De quoi voulez vous aujourd'hui ?</label>
                            <select name="role" id="role" class="form-control">
                                <option disabled selected value="-- Veuillez selectionner --">-- Veuillez selectionner --</option>
                                <option value="proprietaire"> je veux publier mes propriétés</option>
                                <option value="client">je recherche une proprieté</option>
                            </select>
                            @error('role')
                            <small>{{ $message }}</small>
                        @enderror


                        </p> --}}
                        <p>
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control  @error('password') border-danger @enderror" name="password" id="password">
                            @error('password')
                            <small>{{ $message }}</small>
                        @enderror
                        </p>
                        <p>
                            <label for="password_confirmation">Confirmer votre mot de passe</label>
                            <input type="password" class="form-control  @error('password_confirmation') border-danger @enderror" name="password_confirmation" id="password_confirmation">
                        </p>
                        <p>
                           <button id="submitBtn" type="submit" class="btn btn-primary">Creer mon compte</button>
                        </p>
                        <hr>
                        <small style="color: black">Vous n'avez pas de compte? <a href="">Inscription</a></small>
                      <p class="text-center fw-bolder py-2">
                        <small style="color:black"> <a href="">Mot de passe oublié ?</a></small>
                      </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

