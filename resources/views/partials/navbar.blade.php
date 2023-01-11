<nav class="navbar navbar-expand-lg bg-success navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">Warteg Sarirasa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/"><i class="fa-solid fa-house"></i> Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ Request::is('menu') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-rectangle-list"></i> Menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/menu"><i class="fa-regular fa-rectangle-list"></i> Daftar Harga</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" aria-current="page" href="/login"><i class="fa-solid fa-circle-user"></i> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>