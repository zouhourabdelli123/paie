<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
      <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-dark">Gestion Paie</span>
    </a>
  </div>

  <hr class="horizontal dark mt-0 mb-2">

  <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <!-- DASHBOARD -->
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('dashboard') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-gauge {{ request()->routeIs('dashboard') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

      <!-- ENSEIGNANTS -->
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Enseignants</h6>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.enseignants.index') ? 'active' : '' }}" href="{{ route('admin.enseignants.index') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.enseignants.index') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-chalkboard-user {{ request()->routeIs('admin.enseignants.index') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Liste enseignants</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.enseignants.create') ? 'active' : '' }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.enseignants.create') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-user-plus {{ request()->routeIs('admin.enseignants.create') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Ajouter enseignant</span>
        </a>
      </li>

      <!-- HEURES -->
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Heures & Présences</h6>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.heures.*') ? 'active' : '' }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.heures.*') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-clock {{ request()->routeIs('admin.heures.*') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Saisie des heures</span>
        </a>
      </li>

      <!-- PAIE -->
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Paie</h6>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.salaires.*') ? 'active' : '' }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.salaires.*') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-money-check-dollar {{ request()->routeIs('admin.salaires.*') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Calcul salaires</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.paiements.validation') ? 'active' : '' }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.paiements.validation') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-circle-check {{ request()->routeIs('admin.paiements.validation') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Validation paiements</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.paiements.historique') ? 'active' : '' }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.paiements.historique') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-file-invoice-dollar {{ request()->routeIs('admin.paiements.historique') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Historique paiements</span>
        </a>
      </li>

      <!-- AVANCES & PRETS -->
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Avances & Prêts</h6>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.avances.*') ? 'active' : '' }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.avances.*') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-hand-holding-dollar {{ request()->routeIs('admin.avances.*') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Avances salaire</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.prets.*') ? 'active' : '' }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.prets.*') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-coins {{ request()->routeIs('admin.prets.*') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Prêts internes</span>
        </a>
      </li>

      <!-- PARAMETRES -->
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Paramètres</h6>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.primes.*') ? 'active' : '' }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.primes.*') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-gears {{ request()->routeIs('admin.primes.*') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Primes & Bonus</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.retenues.*') ? 'active' : '' }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.retenues.*') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-percent {{ request()->routeIs('admin.retenues.*') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Retenues</span>
        </a>
      </li>

      <!-- COMPTE -->
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Compte</h6>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.profil') ? 'active' : '' }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center {{ request()->routeIs('admin.profil') ? 'bg-gradient-primary' : 'bg-white' }}">
            <i class="fa-solid fa-user {{ request()->routeIs('admin.profil') ? 'text-white' : 'text-dark' }}"></i>
          </div>
          <span class="nav-link-text ms-1">Profil</span>
        </a>
      </li>

      <li class="nav-item mb-2">
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-right-from-bracket text-dark"></i>
          </div>
          <span class="nav-link-text ms-1">Déconnexion</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </li>

    </ul>
  </div>


</aside>
