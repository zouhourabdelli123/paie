@extends('dashbaord.main')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


<div class="container-fluid pt-3">
    <div class="card shadow-lg border-0 overflow-hidden modern-card">
        <div class="card-header py-4 border-bottom-0">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="d-flex align-items-center">
                        <div class="icon-badge me-3">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div>
                            <h3 class="text-dark mb-1 font-weight-bold">
                                Gestion des ensignants
                            </h3>
                            <p class="text-muted mb-0">
                                <i class="fa fa-check-circle me-1 text-success"></i>
                                <span class="font-weight-bold text-dark">30 projets terminés</span> ce mois-ci
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 text-end mt-3 mt-md-0">
                {{--     <button class="btn btn-outline-orange btn-modern me-2">
                        <i class="fa fa-filter me-1"></i> Filtrer
                    </button> --}}
                    <button class="btn btn-orange btn-modern" id="btnNouveau">
                        <i class="fa fa-plus me-1"></i> Nouveau ensignants
                    </button>
                </div>
            </div>
        </div>

        <!-- Table Body -->
        <div class="card-body px-4 pb-4 pt-3">
            <div class="table-responsive">
                <table id="projectsTable" class="table align-items-center mb-0 modern-table">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary font-weight-bolder ps-2">
                                <i class="fa fa-building me-2 text-orange"></i>Entreprises
                            </th>
                            <th class="text-uppercase text-secondary font-weight-bolder ps-2">
                                <i class="fa fa-users me-2 text-orange"></i>Membres
                            </th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder">
                                <i class="fa fa-dollar-sign me-2 text-orange"></i>Budget
                            </th>
                            <th class="text-center text-uppercase text-secondary font-weight-bolder">
                                <i class="fa fa-chart-line me-2 text-orange"></i>Achèvement
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover-row">
                            <td>
                                <div class="d-flex px-2 py-2 align-items-center">
                                    <div class="icon-wrapper">
                                        <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3"
                                            alt="xd">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 font-weight-bold project-title">Soft UI XD Version</h6>
                                        <span class="text-xs text-muted">Design System</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="avatar-group mt-2">
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                        <img src="../assets/img/team-1.jpg" alt="team1">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                        <img src="../assets/img/team-2.jpg" alt="team2">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                                        <img src="../assets/img/team-3.jpg" alt="team3">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                                        <img src="../assets/img/team-4.jpg" alt="team4">
                                    </a>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge badge-modern bg-orange-soft text-orange">$14,000</span>
                            </td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="me-2 text-sm font-weight-bold text-orange">60%</span>
                                    <div class="progress progress-modern">
                                        <div class="progress-bar bg-orange" style="width: 60%" role="progressbar"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Backdrop -->
<div class="modal-backdrop-custom" id="modalBackdrop"></div>

<!-- Modal Nouveau Projet -->
<div class="modal-custom" id="modalNouveau">
    <div class="modal-dialog-custom">
        <div class="modal-content-custom">
            <div class="modal-header-custom">
                <div>
                    <h4><i class="fa fa-plus-circle me-2"></i>Nouveau Projet</h4>
                    <p>Créer un nouveau projet pour votre entreprise</p>
                </div>
                <button class="btn-close-custom" id="btnCloseModal">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body-custom">
                <form id="formNouveau">
                    <div class="form-group-custom">
                        <label><i class="fa fa-briefcase"></i>Nom du Projet</label>
                        <input type="text" class="form-control-custom" placeholder="Ex: Refonte du site web" required>
                    </div>

                    <div class="form-group-custom">
                        <label><i class="fa fa-building"></i>Entreprise</label>
                        <input type="text" class="form-control-custom" placeholder="Ex: Design System Inc." required>
                    </div>

                    <div class="row-custom">
                        <div class="col-custom">
                            <div class="form-group-custom">
                                <label><i class="fa fa-dollar-sign"></i>Budget</label>
                                <input type="text" class="form-control-custom" placeholder="Ex: $25,000" required>
                            </div>
                        </div>
                        <div class="col-custom">
                            <div class="form-group-custom">
                                <label><i class="fa fa-calendar"></i>Date Limite</label>
                                <input type="date" class="form-control-custom" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-custom">
                        <label><i class="fa fa-align-left"></i>Description</label>
                        <textarea class="form-control-custom" placeholder="Décrivez votre projet..." required></textarea>
                    </div>

                    <div class="form-group-custom">
                        <label><i class="fa fa-users"></i>Membres de l'équipe</label>
                        <input type="text" class="form-control-custom" placeholder="Sélectionnez les membres...">
                    </div>
                </form>
            </div>
            <div class="modal-footer-custom">
                <button class="btn-custom btn-cancel-custom" id="btnCancel">
                    <i class="fa fa-times"></i>
                    Annuler
                </button>
                <button class="btn-custom btn-submit-custom" id="btnSubmit">
                    <i class="fa fa-check"></i>
                    Créer le Projet
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btnNouveau = document.getElementById('btnNouveau');
    const btnCloseModal = document.getElementById('btnCloseModal');
    const btnCancel = document.getElementById('btnCancel');
    const btnSubmit = document.getElementById('btnSubmit');
    const modalBackdrop = document.getElementById('modalBackdrop');
    const modalNouveau = document.getElementById('modalNouveau');
    const formNouveau = document.getElementById('formNouveau');

    // Ouvrir le modal
    btnNouveau.addEventListener('click', function() {
        modalBackdrop.classList.add('show');
        modalNouveau.classList.add('show');
        document.body.style.overflow = 'hidden';
    });

    // Fermer le modal
    function closeModal() {
        modalBackdrop.classList.remove('show');
        modalNouveau.classList.remove('show');
        document.body.style.overflow = 'auto';
    }

    btnCloseModal.addEventListener('click', closeModal);
    btnCancel.addEventListener('click', closeModal);

    // Fermer en cliquant sur le backdrop
    modalBackdrop.addEventListener('click', closeModal);

    // Soumettre le formulaire
    btnSubmit.addEventListener('click', function() {
        if (formNouveau.checkValidity()) {
            // Ici vous pouvez ajouter votre logique de soumission
            console.log('Formulaire soumis');
            closeModal();
            formNouveau.reset();

            // Afficher une notification de succès (optionnel)
            alert('Projet créé avec succès!');
        } else {
            formNouveau.reportValidity();
        }
    });

    // Fermer avec la touche Échap
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modalNouveau.classList.contains('show')) {
            closeModal();
        }
    });
});
</script>

@endsection
