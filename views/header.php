<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          
        </li>
        
      </ul>
      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <ul class="navbar-nav d-flex">
       
        <li class="nav-item dropstart">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-start">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><a class="dropdown-item" href="?controller=Dashboard">Admin</a></li>

          </ul>
        </li>
      </ul>

      
    </div>
  </div>


</nav>

<header>
    <div>
        <img id="logo" src="img/logo.jpg" alt="Logo">
    </div>

    <div id="search-bar">
        <input type="text" placeholder="Buscar productos...">
        <button type="button">Buscar</button>
    </div>

    <div class="header-buttons">
        <a href="?controller=User&action=login">Iniciar Sesión</a>
        <a href="?controller=Compras&action=list">Ver Cesta</a>
    </div>
</header>

<div class="alert alert-warning alert-dismissible fade show Envios" role="alert">
  <strong>Envios GRATIS > 5000€</strong> - Cambios y Reparaciones GRATIS la primera vez!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
