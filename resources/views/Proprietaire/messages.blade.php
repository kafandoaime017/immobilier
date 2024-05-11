@extends('Proprietaire.layout.app')

@section('content')
<style>
    .envoyer
    {
        position: relative;
        top: -6px !important;
        color: rgb(116, 116, 116);
    }
    .modal
    {
        z-index: 9999;
    }
</style>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10">

            <div class="container my-2">
                <div class="row">
                    <h5 style="color:black;font-weight:800"> Mes messages </h5><hr>
                    <div class="col-lg-8 mb-3">
                        <div class="card p-3 shadow border-0">
                            <div class="profile">
                                <div class="avatar d-flex">
                                    <img src="https://th.bing.com/th/id/R.a38d2d1637658c755b4e5bf15aa4162a?rik=fTEMD%2bkCxkRHtg&riu=http%3a%2f%2fgetdrawings.com%2ffree-icon-bw%2favatar-icon-images-14.png&ehk=mWmYQyNCT3q9PMfW3qiC56tcdNA%2fuB7%2bEigcMiUockM%3d&risl=&pid=ImgRaw&r=0" height="50" width="50" alt="">
                                    <div class="infos mx-2">
                                        <h6 style="color: black;font-weight:800">Aimé Kafando</h6>
                                        <h6 class="envoyer"><small>Envoyé le 20 mars 2024</small></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="contenu px-3">
                                <p>
                                    Lorem ipsum dolopsa sci sapiente odit labore nam corporis itaque nesciunt enim doloremque perspiciatis deserunt aspernatur dolore facere at, officia modi minima.
                                </p>
                                <p>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Repondre
                                      </button>
                                    <button class="btn btn-outline-danger fw-bolder">Supprimer</button>
                                </p>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Repondre à Aimé via email</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post">
                                                <p>
                                                    <label for="sujet">sujet</label>
                                                    <input type="text" class="form-control" name="" id="">
                                                </p>
                                                <p>
                                                    <label for="contenu">Contenu</label>
                                                   <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                                                </p>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                        <button type="button" class="btn btn-primary">Envoyer</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mb-3">
                        <div class="card p-3 shadow border-0">
                            <div class="profile">
                                <div class="avatar d-flex">
                                    <img src="https://th.bing.com/th/id/R.a38d2d1637658c755b4e5bf15aa4162a?rik=fTEMD%2bkCxkRHtg&riu=http%3a%2f%2fgetdrawings.com%2ffree-icon-bw%2favatar-icon-images-14.png&ehk=mWmYQyNCT3q9PMfW3qiC56tcdNA%2fuB7%2bEigcMiUockM%3d&risl=&pid=ImgRaw&r=0" height="50" width="50" alt="">
                                    <div class="infos mx-2">
                                        <h6 style="color: black;font-weight:800">Aimé Kafando</h6>
                                        <h6 class="envoyer"><small>Envoyé le 20 mars 2024</small></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="contenu px-3">
                                <p>
                                    Lorem ipsum dolopsa sci sapiente odit labore nam corporis itaque nesciunt enim doloremque perspiciatis deserunt aspernatur dolore facere at, officia modi minima.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mb-3">
                        <div class="card p-3 shadow border-0">
                            <div class="profile">
                                <div class="avatar d-flex">
                                    <img src="https://th.bing.com/th/id/R.a38d2d1637658c755b4e5bf15aa4162a?rik=fTEMD%2bkCxkRHtg&riu=http%3a%2f%2fgetdrawings.com%2ffree-icon-bw%2favatar-icon-images-14.png&ehk=mWmYQyNCT3q9PMfW3qiC56tcdNA%2fuB7%2bEigcMiUockM%3d&risl=&pid=ImgRaw&r=0" height="50" width="50" alt="">
                                    <div class="infos mx-2">
                                        <h6 style="color: black;font-weight:800">Aimé Kafando</h6>
                                        <h6 class="envoyer"><small>Envoyé le 20 mars 2024</small></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="contenu px-3">
                                <p>
                                    Lorem ipsum dolopsa sci sapiente odit labore nam corporis itaque nesciunt enim doloremque perspiciatis deserunt aspernatur dolore facere at, officia modi minima.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Détails du message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Contenu du message -->
                <p>Date de réception : 2024-03-23</p>
                <p>Nom et prénom de l'auteur : Kafando Aime</p>
                <p>Email : aime@gmail.com</p>
                <!-- Vous pouvez remplir le reste des détails du message ici -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

@endsection
