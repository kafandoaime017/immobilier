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
</style>

    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            {{-- <div class="col-lg-4">
                <img src="{{ asset('images/Sign in to the account with username and password.png') }}" class="img-fluid" alt="">
            </div> --}}
            <div class="col-lg-5">
                @if($errors->any)
                    @foreach ($errors->all() as $error )
                       <div class="error">
                            <small>{{ $error }}</small>
                       </div>
                    @endforeach
                @endif <br>

                @if(session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card p-3 shadow border-0">
                    <form id="myform" action="{{ route('login') }}" method="post">
                        @csrf
                        <h5 style="font-weight: 800;color:black">Connectez-vous </h5>
                        <p>
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') border-danger @enderror" name="email" id="email" value="{{ old('email') }}">

                        </p>
                        <p>
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control  @error('password') border-danger @enderror" name="password" id="password">
                        </p>
                        <p>
                           <button id="submitBtn" type="submit" class="btn btn-primary">Se connecter</button>
                        </p>
                        <hr>
                        <small>Vous n'avez pas de compte? <a href="">Inscription</a></small>
                      <p class="text-center fw-bolder py-2">
                        <small> <a href="">Mot de passe oublié ?</a></small>
                      </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

