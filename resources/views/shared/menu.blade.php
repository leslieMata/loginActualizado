<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">
                <i class="fa-solid fa-house"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('altasBajas') }}">
                <i class="fa-solid fa-money-bill-transfer"></i> Altas y bajas</a>
          </li>
        </ul>
      </div>
      <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg">
          <li>
            <a href="{{ route('logout')}}" class="btn btn-danger">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>