<nav class="navbar navbar-expand-lg navbar-dark" data-bs-theme="white"
style="background-color:gray;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=contact">contact</a>
        <li class="nav-item">
          <a class="nav-link" href="?page=about">about</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Macam-macam cina
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=tables">cina jawa</a></li>
            <li><a class="dropdown-item" href="?page=form">Form</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="?page=datatables">cina kuro</a></li>
          </ul>
        </li>
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>