@extends('Proprietaire.layout.app')

@section('content')


    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <h4 class="fw-bolder">Faire une annonce</h4>
                <form action="" class="card p-3 shadow border-0">
                    <p>
                        <label for="titre">Titre</label>
                        <input class="form-control" type="text" name="titre" id="titre">
                    </p>
                    <p>
                        <label for="nbreChambres">Nombres de chambres</label>
                        <input class="form-control" type="number" name="nbreChambres" id="nbreChambres">
                    </p>
                    <p>
                        <label for="nbreBains">Nombre de salle de bain</label>
                        <input class="form-control" type="number" name="nbreBains" id="nbreBains">
                    </p>
                    <p>
                        <label for="surface">surface en m <sup>2</sup></label>
                        <input class="form-control" type="text" name="surface" id="surface">
                    </p>
                    <p>
                        <label for="localisation">Localisation</label>
                        <input class="form-control" type="text" name="localisation" id="localisation">
                    </p>
                    <p>
                        <label for="categorie">Type de proprieté</label>
                       <select class="form-control" name="categorie" id="categorie">
                        <option value="">--Veuillez selectionner --</option>
                        <option value="">Appartement</option>
                        <option value="">Chambre</option>
                       </select>
                    </p>
                    <p>
                        <label for="prix">Prix</label>
                        <input class="form-control" type="number" name="prix" id="prix">
                    </p>
                    <p>
                        <label for="image">Image</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </p>
                    <p>
                        <button class="btn btn-danger fw-bolder">Publier maintenant</button>
                    </p>
                </form>
            </div>
        </div>
    </div>


@endsection
