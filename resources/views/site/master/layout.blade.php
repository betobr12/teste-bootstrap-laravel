<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap-teste</title>
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
</head>
<body>  

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="#">SiteApp</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ (Route::current()->getName() === 'site.home' ? 'active' : '') }}"><a class="nav-link" href="{{route('site.home')}}">Home</a></li>
              <li class="nav-item {{ (Route::current()->getName() === 'site.courses' ? 'active' : '') }}"><a class="nav-link" href="{{route('site.courses')}}">Cursos</a></li>
              <li class="nav-item {{ (Route::current()->getName() === 'site.contact' ? 'active' : '') }}"><a class="nav-link" href="{{route('site.contact')}}">Contato</a></li>

            </ul>
            <form class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </header>
      
      <main role="main">
      
        @yield('content')
      
      
        <!-- FOOTER -->
        <footer class="container">
          <p class="float-right"><a href="#">Back to top</a></p>
          <p>&copy; {{ date('Y')}} Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
      </main>

<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>