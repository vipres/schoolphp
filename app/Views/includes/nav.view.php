<style>
    nav ul li a:hover{
        background-color: grey;
        color: white !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?=ROOT."img/logo.png"?>" alt="" class="" style="width:50px">
        My School
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">DASHBOARD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CLASSES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TESTS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            USER
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Profile</a></a></li>
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
