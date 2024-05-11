@extends('Proprietaire.layout.app')

@section('content')
    <div class="container">
      <p class="text-center">
        <a href="{{ route('faire_une_annonce') }}" class="btn btn-danger fw-bolder">Ajouter une publication</a>
      </p>

        <div class="row d-flex justify-content-center">

            <div class="col-lg-10 card p-3 shadow-sm border-0">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12">
                            <form action="" method="post">
                                <p class="d-flex">
                                    <input type="search" name="" id="" class="form-control" placeholder="Rechercher...">
                                    <button class="btn btn-primary fw-bolder">Rechercher</button>
                                </p>
                            </form>
                        </div>
                    </div>
                  </div>
              <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Date publication</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ddd</td>
                            <td>diudhzidjio duhd zduz dihduà_</td>
                            <td>idhididnzdzd</td>
                            <td>
                                <button class="btn btn-primary">details</button>
                            </td>
                            <td>
                                <button class="btn btn-info">modifier</button>
                            </td>
                            <td>
                                <button class="btn btn-danger">supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>ddd</td>
                            <td>diudhzidjio duhd zduz dihduà_</td>
                            <td>idhididnzdzd</td>
                            <td>
                                <button class="btn btn-primary">details</button>
                            </td>
                            <td>
                                <button class="btn btn-info">modifier</button>
                            </td>
                            <td>
                                <button class="btn btn-danger">supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>ddd</td>
                            <td>diudhzidjio duhd zduz dihduà_</td>
                            <td>idhididnzdzd</td>
                            <td>
                                <button class="btn btn-primary">details</button>
                            </td>
                            <td>
                                <button class="btn btn-info">modifier</button>
                            </td>
                            <td>
                                <button class="btn btn-danger">supprimer</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>ddd</td>
                            <td>diudhzidjio duhd zduz dihduà_</td>
                            <td>idhididnzdzd</td>
                            <td>
                                <button class="btn btn-primary">details</button>
                            </td>
                            <td>
                                <button class="btn btn-info">modifier</button>
                            </td>
                            <td>
                                <button class="btn btn-danger">supprimer</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>


@endsection
