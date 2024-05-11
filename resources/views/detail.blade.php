@extends('Template.template')


@section('content')
    <style>
        /* Slider */
        #similarPropertiesCarousel .carousel-inner {
            display: flex;
            flex-wrap: nowrap;
        }

        /* Card */
        #similarPropertiesCarousel .card {
            margin-right: 15px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        /* Card Hover Effect */
        #similarPropertiesCarousel .card:hover {
            transform: scale(1.05);
        }



        /* Apartment Details Title */
        .apartment-details h2 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        /* Apartment Description */
        .apartment-details p {
            color: #666;
            line-height: 1.6;
        }

        /* Features Title */
        .apartment-details h4 {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        /* Features List */
        .apartment-details ul {
            list-style-type: none;
            padding-left: 0;
        }

        /* Feature Item */
        .apartment-details ul li {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }

        /* Feature Icon */
        .apartment-details ul li i {
            margin-right: 10px;
            color: #043e7b;
            background-color: rgb(201, 201, 201);
            padding: 6px
        }

        .list-group-item {
            border: none !important;
            background-color: #f1f1f1
        }
    </style>
    <!-- Apartment Details -->
    <section class="apartment-details d-flex  mt-5 py-2">
      
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Title -->
                    <h2 style="color:black;font-weight:800" class="card p-2 shadow border-0">{{ $annonce->titre }}</h2>
                    <!-- Image Carousel -->
                    <div>
                        <div>
                            <div>
                                <img src="{{ $annonce->image }}" class="d-block img-fluid" alt="Apartment Image 1">
                            </div>
                        </div>
                        <!-- Description -->
                        <p class="mt-3">{{ $annonce->description }}</p>
                        <!-- Features -->

                    </div>
                </div>
                <div class="col-lg-3 card p-3 border-0 shadow">
                    <h4 style="color:blue;font-weight:800">Caractéristiques :</h4>
                    <ul class="list-group">
                        <li class="list-group-item text-dark"><i class="fas fa-bed"></i>Nombre chambres :
                            {{ $annonce->nbreChambres }}</li>
                        <li class="list-group-item text-dark"><i class="fas fa-bath"></i> Nombre salle de bain :
                            {{ $annonce->nbreBains }}</li>
                        <li class="list-group-item text-dark"><i class="fas fa-arrows-alt"></i> Surface :
                            {{ $annonce->surface }} m<sup>2</sup></li>
                        <li class="list-group-item text-dark"><i class="fas fa-map-marker-alt"></i> Localisation :
                            {{ $annonce->localisation }}</li>
                        <li class="list-group-item text-dark"><i class="fas fa-dollar-sign"></i>Prix :
                            {{ $annonce->prix }} FCFA / mois</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="card p-3 shadow border-0">
                        <h6></h6>
                        <div class="icone d-flex justify-content-center">
                            <img height="70" width="70"
                                src="https://media.istockphoto.com/vectors/user-vector-id1128484864?k=20&m=1128484864&s=612x612&w=0&h=r-UMp2M_iNQ9i_DrONzCzrckdsre3eBgzTw7yot1n-c="
                                alt="">
                        </div>
                        <small class="text-center" style="font-weight: 900;color:black"><a href="">
                            {{ $annonce->user->prenom }}  {{ $annonce->user->nom }}
                                </a></small><br>
                        <ul class="list-group">
                            <li class="list-group-item fw-bolder text-dark">Publié  le {{ $annonce->created_at->translatedFormat('d F Y \à  H\hi',) }}</li>
                            <li class="list-group-item text-dark"><a href="tel:{{$annonce->user->telephone}}" class="btn fw-bold "
                                    style="background-color: green;color:white"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" fill="currentColor" class="bi bi-whatsapp mx-2"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                    </svg>Contacter sur whatsapp</a></li>
                            <li class="list-group-item text-dark"><!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                  Launch demo modal
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Contacter l'annonceur {{ $annonce->user->prenom }} {{ $annonce->user->nom }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('message_traitement') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id_user" id="id_user" value="{{$annonce->user->id}}">
                                                    <div class="mb-3">
                                                        <label for="nom" class="form-label">Nom</label>
                                                        <input type="text" class="form-control" id="nom" name="nom" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="prenom" class="form-label">Prénom</label>
                                                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="sujet" class="form-label">Sujet</label>
                                                        <input type="text" class="form-control" id="sujet" name="sujet" required >
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message" class="form-label">Message</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required>Bonjour, je suis interessé par : " {{ $annonce->titre }} "</textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </li>
                            {{-- <li class="list-group-item text-dark"><i class="fas fa-arrows-alt"></i> 150 m<sup>2</sup></li> --}}
                        </ul>
                    </div>
                </div>

            </div>
    </section>

    <!-- Similar Properties Carousel -->
    <!-- Similar Properties Carousel -->
    <section class="similar-properties mt-5">
        <div class="container">
            <h5 style="color:black;font-weight:800">Propriétés Similaires</h5> <br> <br>
            <div id="similarPropertiesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            @forelse ($memesCategories as $row )
                            <div class="col-md-3">
                                <div class="card shadow border-0">
                                    <img src="{{ $row->image }}"
                                        class="card-img-top" alt="Similar Property 1">
                                    <div class="card-body">
                                        <h6 style="color:#000;font-weight:800" class="card-title">Appartement Moderne</h6>
                                        <p class="card-text"><strong>Prix</strong> : 350,000 €</p>
                                        <p>
                                            <small>Categorie: {{ $row->categorie->titre }}</small>
                                        </p>
                                        <a href="/detail/{{ $row->id }}" class="btn btn-primary border-0 rounded-0">Voir Détails</a>
                                    </div>
                                </div>
                            </div>
                            @empty
                                    <h1>Pas d'annonce similaire</h2>
                            @endforelse

                            <div class="pagination">
                                {{ $memesCategories->links() }}
                            </div>
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
