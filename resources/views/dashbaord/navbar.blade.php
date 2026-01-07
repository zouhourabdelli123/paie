<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-modern">
                    <span class="input-group-text text-body bg-white">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" placeholder="Rechercher...">
                </div>
            </div>

            <ul class="navbar-nav justify-content-end">
                <!-- User Dropdown Menu -->
                <!-- Notifications Dropdown -->
                <li class="nav-item dropdown pe-2 d-flex align-items-center position-relative">
                    <a href="#" class="nav-link text-body p-0 icon-link" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="button">
                        <i class="fa fa-bell cursor-pointer"></i>
                        <span class="notification-badge"></span>
                    </a>
                <li class="nav-item dropdown d-flex align-items-center">
                    <a href="#" class="nav-link text-body font-weight-bold px-3 dropdown-toggle-custom"
                        id="userDropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                        role="button">
                        <i class="fa fa-user me-2 text-orange"></i>
                        <span class="d-sm-inline d-none">Mon Compte</span>
                        <i class="fas fa-chevron-down ms-2 dropdown-icon"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-modern dropdown-menu-end px-2 py-3"
                        aria-labelledby="userDropdown">
                        <li class="dropdown-header">
                            <div class="d-flex align-items-center">
                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm rounded-circle me-2"
                                    alt="User">
                                <div>
                                    <h6 class="mb-0 text-sm">John Doe</h6>
                                    <p class="mb-0 text-xs text-secondary">john@example.com</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider my-2">
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md dropdown-item-hover" href="javascript:;">
                                <i class="fa fa-user me-2 text-orange"></i>
                                <span>Mon Profil</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md dropdown-item-hover" href="javascript:;">
                                <i class="fa fa-cog me-2 text-orange"></i>
                                <span>Paramètres</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md dropdown-item-hover" href="javascript:;">
                                <i class="fa fa-question-circle me-2 text-orange"></i>
                                <span>Aide</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider my-2">
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md dropdown-item-hover text-danger"
                                href="javascript:;">
                                <i class="fa fa-sign-out-alt me-2"></i>
                                <span>Se Déconnecter</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Mobile Menu Toggle -->
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>





                <ul class="dropdown-menu dropdown-menu-modern dropdown-menu-end px-2 py-3 me-sm-n4"
                    aria-labelledby="dropdownMenuButton">
                    <li class="dropdown-header border-bottom pb-2 mb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Notifications</h6>
                            <span class="badge bg-orange-soft text-orange">3 nouvelles</span>
                        </div>
                    </li>

                    <li class="mb-2">
                        <a class="dropdown-item border-radius-md dropdown-item-hover" href="javascript:;">
                            <div class="d-flex py-1">
                                <div class="my-auto">
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-sm font-weight-normal mb-1">
                                        <span class="font-weight-bold">Nouveau message</span> de Laur
                                    </h6>
                                    <p class="text-xs text-secondary mb-0">
                                        <i class="fa fa-clock me-1"></i>
                                        Il y a 13 minutes
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="mb-2">
                        <a class="dropdown-item border-radius-md dropdown-item-hover" href="javascript:;">
                            <div class="d-flex py-1">
                                <div class="my-auto">
                                    <img src="../assets/img/small-logos/logo-spotify.svg"
                                        class="avatar avatar-sm bg-gradient-dark me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-sm font-weight-normal mb-1">
                                        <span class="font-weight-bold">Nouvel album</span> par Travis Scott
                                    </h6>
                                    <p class="text-xs text-secondary mb-0">
                                        <i class="fa fa-clock me-1"></i>
                                        Il y a 1 jour
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item border-radius-md dropdown-item-hover" href="javascript:;">
                            <div class="d-flex py-1">
                                <div class="avatar avatar-sm bg-gradient-success me-3 my-auto">
                                    <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1">
                                        <title>credit-card</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g transform="translate(453.000000, 454.000000)">
                                                        <path class="color-background"
                                                            d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                            opacity="0.593633743"></path>
                                                        <path class="color-background"
                                                            d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-sm font-weight-normal mb-1">
                                        Paiement effectué avec succès
                                    </h6>
                                    <p class="text-xs text-secondary mb-0">
                                        <i class="fa fa-clock me-1"></i>
                                        Il y a 2 jours
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider my-2">
                    </li>
                    <li>
                        <a class="dropdown-item border-radius-md text-center text-orange font-weight-bold"
                            href="javascript:;">
                            Voir toutes les notifications
                        </a>
                    </li>
                </ul>

                </li>
            </ul>
        </div>
    </div>
</nav>
