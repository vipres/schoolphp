<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Manolo Cabrera">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ASSET?>css/app.css">
    <title>Home</title>
</head>
<body>
    <div style="min-width: 350px;">

    <style>
    nav ul li a:hover{
        background-color: grey;
        color: white !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?=ASSET."img/logo.png"?>" alt="" class="" style="width:50px">
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

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb justify-content-center">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>


{{ content }}


</div>

<script src="<?=ASSET?>/js/app.js"></script>
</body>
</html>
