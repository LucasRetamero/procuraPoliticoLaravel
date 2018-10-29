
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PesquisaPolitico</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('home.index') }}">Home </a>
            </li>
            @if($ativo == 1)
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Objetivo</a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects">{{ $nomeMenu }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contato">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
