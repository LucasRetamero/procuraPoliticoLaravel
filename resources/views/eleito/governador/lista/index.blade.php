@extends('eleito.governador.iniciar.index')
@section('content')
<div id="projects" class="container">
@include('eleito.governador.lista.filtro.index',compact('listaEstado','listaPartido'))
 <br>
 @if(isset($pesquisa))
 <div class="alert alert-danger" role="alert">
  {{ $pesquisa }}
</div>
@endif
<div class="alert alert-success" role="alert">
  Lista de Governadores
</div>
<br>
<div class="row">
        @foreach($listaDados as $lista)
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" width="200" height="200" src="{{ $lista->imagem }}" alt="">
          <h3>{{ $lista->nome }}
            <small>{{ $lista->status }}</small>
          </h3>
          <a href="{{ route('eleito.governador.conteudo',$lista->id) }}"><button type="button" class="btn btn-success">Conhecer</button></a>
        </div>
        @endforeach
</div>
</div>
       <!--<div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>-->
      
    <!-- /.container -->

@stop