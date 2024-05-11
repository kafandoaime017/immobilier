@extends('Template.template')


@section('content')
<style>
    .search-form input{
        border: 2px solid rgb(118, 118, 246) !important;
        border-radius: 30px !important;
        color: black;
        font-weight: 800;
    }
    .search-form input::placeholder
    {
        color:rgb(163, 163, 252);
        font-weight: 800;
        padding: 6px
    }
    .search-form input:focus
    {
        box-shadow: none !important;
        border: 2px solid black;
    }
    .search-form
    {
        border-radius: 20px !important;
    }
    .list-group-item
{
    border: none !important;
    background-color: #f1f0f0;
    margin: 2px;
}
</style>

@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
@endif
    <!-- Banner -->
    <section class="banner">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <h1 class="animate__animated text-center animate__fadeInDown">Trouvez Votre Maison de Rêve</h1>
                    <p class="animate__animated text-center animate__fadeInDown">Découvrez notre large sélection de propriétés à
                        vendre et à louer.</p>
                        <p class="text-center animate__animated animate__fadeInDown">
                            <button style="width: 300px;border:2px solid rgb(212, 4, 4);color:red" class="btn btn-danger fw-bolder p-3  text-white rounded-5">Parcourir les propriétés</button>
                        </p>
                </div>
                {{-- <div class="col-lg-5">
                    <img src="{{ asset('images/house.png') }}" class="img-fluid animate__animated animate__fadeInRight"
                        alt="Banner Image">
                </div> --}}
            </div>
             <!-- Search Form -->
    <section class="search-form animate__animated animate__fadeInDown">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form class="card border p-3 shadow" action="{{ route('rechercher_traitement') }}" method="post">
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
    </section>



    <!-- Recent Listings -->
    <section class="recent-listings">
        <div class="container">
            <div class="row ">
                <h2 class="text-center fw-bolder mb-5">Appartements publiés recemement</h2>
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
