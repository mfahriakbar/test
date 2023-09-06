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
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Formulir") ? 'active' : '' }}" href="/formulir">Formulir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Hasil") ? 'active' : '' }}" href="/hasil">Hasil</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Form") ? 'active' : '' }}" href="#form">Form</a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>