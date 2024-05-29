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
        <a href="http://localhost/motos/?controller=Articulo">
            <img id="logo" src="img/logo.jpg" alt="Logo">
        </a>
    </div>

    <div class="header-buttons">
        <a href="?controller=User&action=login">Iniciar Sessió</a>
        <a href="?controller=usuario&action=register">Registrar-te</a>
        <a href="?controller=Compras&action=list">Veure Cistella</a>
    </div>
</header>

<div class="alert alert-warning alert-dismissible fade show Envios" role="alert">
  <strong>EN STOCK</strong> Por tiempo limitado tenemos las siguientes motos aprovecha y ven!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
