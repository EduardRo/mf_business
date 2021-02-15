

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</head>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="/logomarketingfocus.png" width="270" height="50" alt="">
          </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        @auth





      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Introducere date
        </a>
        <div class="dropdown-menu bg-primary text-light" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bg-primary text-light" href="#">Date Firma</a>
          <a class="dropdown-item bg-primary text-light" href="#">Prezentare Firma</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item bg-primary text-light" href="#">Comunicate De Presa</a>
          <a class="dropdown-item bg-primary text-light" href="#">Job-uri</a>
        </div>
      </li>
      @endauth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Vizualizare
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Date Firma</a>
          <a class="dropdown-item" href="#">Prezentare</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Comunicate De Presa</a>
          <a class="dropdown-item" href="#">Job-uri</a>
        </div>
      </li>

    </ul>
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/login">Login <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
    </ul>


  </div>
</nav>

@yield('content')




