<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil - Agence Immobilière</title>
    <style>
        /* Styles for Navbar */
        .navbar {
            background-color: #ffffff !important;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
        }

        /* Styles for Banner */
        .banner {
            background-image: url('{{ asset('images/acceuil 1.png') }}');
            color: #fff;

            padding: 50px 0;
        }

        .banner h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 900;
            text-shadow: 0px 2px 2Px black;
        }

        .banner p {
            font-size: 1.2rem;
        }

        /* Styles for Search Form */
        .search-form {
            padding: 60px 0;
        }

        .search-form input {
            background-color: #f2f2f2 !important;
            padding: 8px;
            color: black !important;
            border: #000000 !important;
        }

        .search-form input[type="text"],
        .search-form button[type="submit"] {
            border-radius: 0;
        }

        /* Styles for Recent Listings */
        .recent-listings {
            padding: 50px 0;
        }

        .recent-listings .card {
            transition: transform 0.3s ease-in-out;
        }

        .recent-listings .card:hover {
            transform: translateY(-5px);
        }

        .recent-listings .card-title {
            font-size: 1.3rem;
            font-weight: bold;
        }

        .recent-listings .card-text {
            font-size: 1rem;
        }

        /* Styles for Pagination */
        .pagination {
            margin-top: 50px;
        }

        /* Styles for Filter Form */
        .filter-form {
            padding: 50px 0;
        }

        .filter-form select {
            border-radius: 0;
        }

        .filter-form button[type="submit"] {
            border-radius: 0;
        }

        .faire_annonce {
            background-color: white !important;
            border: 1px solid #0470e4 !important;
            border-radius: 30px !important;
            font-weight: 800 !important;
            color: #0470e4 !important;
            /* text-shadow: 0px 1px 0.5px black !important; */
            width: 200px !important;
        }

        .faire_annonce:hover {
            background-color: rgb(203, 216, 253) !important;
        }

        .a_louer {
            background-color: white !important;
            border: 1px solid #ffacc6 !important;
            border-radius: 30px !important;
            font-weight: 800 !important;
            color: #c40000 !important;
            /* text-shadow: 0px 1px 0.5px black !important; */
            width: 200px !important;
        }

        .a_louer:hover {
            background-color: rgb(250, 200, 200) !important;
        }
        /* .navbar
        {
            position: fixed !important;
            width: 100%;
            z-index: 9999;
            margin-top: -56px;
        } */

    </style>
    <!-- Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Font Awesome -->

</head>

<body>

    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand mx-4" href="#"><img height="50" width="50"
                    src="https://www.creads.com/wp-content/uploads/2021/05/era-logo.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link a_louer active" aria-current="page" href="{{route('faire_une_annonce')}}" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Faire une annonce</a>
                    </li>
                </ul>
                <a href="{{ route('register') }}" class="btn btn-outline-primary rounded-5 fw-bolder mx-2">S'inscrire</a>/
                <a href="{{ route('login') }}" class="btn btn-danger rounded-5 fw-bolder mx-2">Se connecter</a>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: black;font-weight:800" class="modal-title" id="exampleModalLabel">Connectez-vous !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Votre formulaire de connexion ici -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"  required>

                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>




    <div>
        @yield('content')
    </div>





    <footer class="footer mt-auto py-3  " style="background-color: rgb(0, 40, 101);color:white">
        <div class="container p-5">
          <div class="row p-1">
            <!-- À propos de nous -->
            <div class="col-md-4">
              <h5>À propos de nous</h5>
              <p>Nous sommes une agence immobilière spécialisée dans la vente et la location de propriétés résidentielles et commerciales. Notre objectif est de vous aider à trouver la propriété de vos rêves.</p>
            </div>
            <!-- Liens utiles -->
            <div class="col-md-4">
              <h5>Liens utiles</h5>
              <ul class="list-unstyled">
                <li><a href="#">À vendre</a></li>
                <li><a href="#">À louer</a></li>
                <li><a href="#">Contactez-nous</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div>
            <!-- Contact -->
            <div class="col-md-4">
              <h5>Contact</h5>
              <ul class="list-unstyled">
                <li><i class="bi bi-geo-alt"></i> 123 Rue de la Liberté, Ville, Pays</li>
                <li><i class="bi bi-telephone"></i> +123 456 789</li>
                <li><i class="bi bi-envelope"></i> info@agenceimmobiliere.com</li>
              </ul>
            </div>
          </div>
          <hr>
          <!-- Copyright -->
          <div class="row">
            <div class="col-12 text-center">
              <p class=" text-white"><small>© 2024 Agence Immobilière. Tous droits réservés.</small></p>
            </div>
          </div>
        </div>
      </footer>




    <!-- Filter Form -->


    <!-- Bootstrap Bundle with Popper.js and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->

    <!-- Wow.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Initialize Wow.js -->
    <script>
        new WOW().init();
    </script>



</body>

</html>
