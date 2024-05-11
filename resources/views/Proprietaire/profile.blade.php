@extends('Proprietaire.layout.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="card border-0  p-3 rounded-4 shadow">
                    <h4 class="fw-bolder">Mes informations</h4>
                    <form action="" method="post">
                        <p>
                            <label for="">Nom</label>
                            <input type="text" class="form-control" name="nom" id="nom" value="{{ Auth::user()->nom }}">
                        </p>
                        <p>
                            <label for="">Prénom</label>
                            <input type="text" class="form-control" name="prenom" id="prenom"  value="{{ Auth::user()->prenom }}">
                        </p>
                        <p>
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                        </p>
                        <p>
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control" name="adresse" id="adresse" value="{{ Auth::user()->adresse }}">
                        </p>
                        <p>
                            <label for="telephone">Téléphone (WhatsApp)</label>
                            <input type="tel" class="form-control" name="telephone" id="telephone" value="{{ Auth::user()->telephone }}">
                        </p>
                        <p>
                            <button class="btn btn-success fw-bolder">Enregistrer les modifications</button>
                        </p>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card border-0  p-3 rounded-4 shadow">
                    <h4 class="fw-bolder">Modifier mot de passe</h4>
                    <form action="" method="post">
                        <p>
                            <label for="">Ancien mot de passe</label>
                            <input type="text" class="form-control" name="" id="" >
                        </p>
                        <p>
                            <label for="">Nouveau mot de passe</label>
                            <input type="text" class="form-control" name="" id=""  >
                        </p>
                        <p>
                            <label for="">Confirmer nouveau mot de passe</label>
                            <input type="text" class="form-control" name="" id=""  >
                        </p>


                        <p>
                            <button class="btn btn-success fw-bolder">Modifier mon mot de passe</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
