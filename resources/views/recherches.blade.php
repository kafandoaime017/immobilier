@extends('Template.template')

@section('content')

    <div class="container">
        <section class="search-form animate__animated animate__fadeInDown">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form class="card border p-3 shadow" action="{{ route('rechercher_2') }}" method="post">
                            @csrf
                            <div class="row ">
                                <div class="col-lg-6 mb-3">
                                    <input type="text" class="form-control " name="localisation" placeholder="Recherche par lieu" value="{{ old('localisation') }}">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <input type="number" class="form-control" name="prixMax" placeholder="Prix Max">
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn fw-bolder btn-dark">Rechercher</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

   
    @if(session('status'))
      <h4>{{ session('status') }}</h4>
    @endif
     <!-- Recent Listings -->
     <section class="recent-listings">
        <div class="container">
            <div class="row ">
               
                <div class="col-lg-4">
                    <section class="filter-form">
                        <div class="container">
                            <div class="row ">
                                <div class="col-lg-12">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <select class="form-select">
                                                    <option selected>Type de Propriété</option>
                                                    <option value="1">Appartement</option>
                                                    <option value="2">Maison</option>
                                                    <option value="3">Terrain</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <select class="form-select">
                                                    <option selected>Nombre de Chambres</option>
                                                    <option value="1">1 Chambre</option>
                                                    <option value="2">2 Chambres</option>
                                                    <option value="3">3+ Chambres</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-primary">Appliquer
                                                    Filtres</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-8">
                    <div class="container ">

                        <div class="column ">
                            <!-- Bootstrap Cards for Listings -->

                          @forelse ($annonces as $annonce )
                          <div class="col mb-3">
                            <div class="card shadow border-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5 p-4 " >
                                            <img src="{{ $annonce->image }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><i class="fas fa-home"></i>
                                                        <strong style="color:rgb(9, 9, 85)">Titre</strong> : {{ $annonce->titre }}
                                                    </li>
                                                    <li class="list-group-item"><i class="fas fa-building"></i>
                                                        <strong style="color:rgb(9, 9, 85)">Type</strong> : {{ $annonce->categorie->titre }}
                                                    </li>
                                                    <li class="list-group-item"><i
                                                            class="fa fa-solid fa-location-dot"></i> <strong
                                                            style="color:rgb(9, 9, 85)">{{ $annonce->localisation }}</strong> :
                                                        ddodjd</li>
                                                    <li class="list-group-item"><i
                                                            class="fas fa-money-bill-alt"></i> <strong
                                                            style="color:rgb(9, 9, 85)">Prix</strong> : {{ $annonce->prix }} FCFA /mois</li>
                                                </ul>

                                                <a href="/detail/{{ $annonce->id }}"
                                                    class="btn my-1 btn-outline-danger  btn-sm rounded-0 fw-bolder">Voir
                                                    Détails</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                          @empty
                            <h2>Pas d'annonce</h2>
                          @endforelse



                        </div>
                        <!-- Pagination -->
                        <section class="pagination">
                            {{ $annonces->links() }}
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection