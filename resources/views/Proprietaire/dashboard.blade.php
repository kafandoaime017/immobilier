@extends('Proprietaire.layout.app')

@section('content')
    <div class="container">
        <div class="row px-5">
            <h5 style="color: black;font-weight:700">Content de vous revoir  {{ Auth::user()->prenom }} !</h5> <hr>
            <div class="col-lg-4 mb-3">
                <div class="card p-3 shadow rounded-4  border-0">
                    <h5  class="text-center fw-bolder text-danger">Nombre d'annonces</h5>
                    <h1 class="text-center display-1 " style="font-weight: 900;color:black">10</h1>
                    <button style="font-weight: 900" class="btn btn-primary  btn-sm">Voir</button>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card p-3 shadow rounded-4  border-0">
                    <h5  class="text-center fw-bolder text-danger">Nombre de message</h5>
                    <h1 class="text-center display-1 " style="font-weight: 900;color:black">10</h1>
                    <button style="font-weight: 900" class="btn btn-primary  btn-sm">Voir</button>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card p-3 shadow rounded-4  border-0">
                    <h5  class="text-center text-danger fw-bolder">Nombre reservation</h5>
                    <h1 class="text-center display-1 " style="font-weight: 900;color:black">10</h1>
                    <button style="font-weight: 900" class="btn btn-primary  btn-sm">Voir</button>
                </div>
            </div>


        </div>
    </div>

@endsection
