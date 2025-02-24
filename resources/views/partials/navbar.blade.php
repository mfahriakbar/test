<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">Web</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($tittle === "Formulir") ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Formulir
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item {{ ($tittle === "Formulir") ? 'active' : '' }}" href="/pernyataan/create">Formulir Pernyataan</a></li>
              <li><a class="dropdown-item" href="#">Formulir 2</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a>
          </li> --}}
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($tittle === "Tabel Formulir") ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tabel
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item {{ ($tittle === "Tabel Formulir") ? 'active' : '' }}" href="/pernyataan/index">Tabel Formulir Pernyataan</a></li>
              <li><a class="dropdown-item" href="#">Formulir 2</a></li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Form") ? 'active' : '' }}" href="#form">Form</a>
          </li> --}}
        </ul>

        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back,{{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> DashBoard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
          @else

            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($tittle === "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
            @endauth
          </ul>

      </div>
    </div>
  </nav>