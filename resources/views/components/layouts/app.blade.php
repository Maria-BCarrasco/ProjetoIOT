<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto IOT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid text-bg-primary p-3">
    <a class="navbar-brand text-light fw-bold" href="#">Monitoramento de Sensores</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisa..." aria-label="Search"/>
        <button class="btn btn-outline-light" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>

<div class="d-flex" style="min-height: 100vh">
  <nav class="d-flex flex-column flex-shrink-0 p-3 bg-body border-end bg-primary-subtle" style="width: 260px" aria-label="Main navigation">
    <a href="#" class="d-flex align-items-center mb-3 text-decoration-none fs-5 fw-semibold">
      <i class="bi bi-hexagon-half me-2"></i>Menu
    </a>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item"><a class="nav-link" href={{ route ('dashboard') }}><i class="bi bi-cart me-2"></i>Início</a></li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-cart me-2"></i>Ambientes</a>
      <ul class="dropdown-menu">
            <li><a class="dropdown-item" href={{ route ('ambiente.create') }}>Cadastrar ambiente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href={{ route ('ambiente.index') }}>Visualizar ambientes</a></li>
          </ul>
        </li>
      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-cart me-2"></i>Sensores</a>
      <ul class="dropdown-menu">
            <li><a class="dropdown-item" href={{ route ('sensor.create') }}>Cadastrar sensor</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href={{ route ('sensor.index') }}>Visualizar sensores</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-cart me-2"></i>Registros</a>
      <ul class="dropdown-menu">
            <li><a class="dropdown-item" href=''>Realizar registro</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href=''>Visualizar registros</a></li>
          </ul>
        </li>
    </ul>
  </nav>
  <main class="flex-grow-1 p-4">{{ $slot }}</main>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    
</body>

</html>
