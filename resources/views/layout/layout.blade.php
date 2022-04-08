<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
  <header>
      <div class="shadow bg-light">
        <nav class="navbar navbar-expand-lg navbar-light container">
            <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="img_logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                @auth
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link noticia" href="/#noticia" >Notícias</a><!--#noticia-->
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/acoes">Ações</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Cadastrar_acao">Cadastrar Ação</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/anuncio_acoes">Anunciados</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/minhas_acoes">Minhas Ações</a>
                </li>
                <li class="nav-item">
                  <form action="/logout" method="post">
                    @csrf
                  <a class="nav-link" href="/logout" onclick="
                    event.preventDefault();
                    this.closest('form').submit()">Sair</a>
                  </form>
                </li>        
                @endauth
                @guest
                <li class="nav-item">
                  <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/register">Cadastrar</a>
                </li>
                @endguest
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
        </div>
  </header>
    @yield('content')


  <footer class="mt-5">
    <p class="m-0 p-5 text-center bg-dark text-light">&copy; DARKINVEST</p>
  </footer>










    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="/js/script.js"></script>
    
  </body>
</html>