@extends('eleito.presidente.iniciar.index')
@section('content')

<div id="projects" class="container">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><button type="button" class="btn btn-success">Dados Pessoais</button></a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><button type="button" class="btn btn-success">Biografia</button></a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><button type="button" class="btn btn-success">Projetos</button></a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-process" role="tab" aria-controls="nav-process" aria-selected="false"><button type="button" class="btn btn-success">Processos</button></a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-partido" role="tab" aria-controls="nav-partido" aria-selected="false"><button type="button" class="btn btn-success">Partido\Mandato</button></a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  @foreach($buscarInfo as $dado)
  <div class="table-responsive">
       <table class="table table-bordered">
        <tbody>
          <tr>
            <th scope="row">Nome Completo</th>
            <td>{{ $dado->nome }}</td>
          </tr>
          <tr>
            <th scope="row">Naturalidade</th>
            <td>{{ $dado->naturalidade }}</td>
          </tr>
          <tr>
            <th scope="row">Nascimento</th>
            <td>{{ date('d-m-Y', strtotime($dado->nascimento)) }}</td>
          </tr>
          <tr>
            <th scope="row">Escolaridade</th>
            <td>{{ $dado->escolaridade }}</td>
          </tr>
          <tr>
            <th scope="row">Telefone</th>
            <td>{{ $dado->telefone }}</td>
          </tr>
          <tr>
            <th scope="row">Cargo</th>
            <td>{{ $dado->status }}</td>
          </tr>
          <tr>
            <th scope="row">E-mail</th>
            <td>{{ $dado->email }}</td>
          </tr>
          <tr>
            <th scope="row">Gabinete</th>
            <td>{{ $dado->gabinete }}</td>
          </tr>
          <tr>
            <th scope="row">Site</th>
            <td><a href="{{ $dado->site }}" target="_blank">Acessar Site(Nova Aba)</td>
          </tr>
          <tr>
            <th scope="row">Escritorio</th>
            <td>{{ $dado->escritorio }}</td>
          </tr>
        </tbody>
      </table>
    
                            </div>
  @endforeach
  </div>
  
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
   @foreach($buscarBiografia as $dado)
<button class="butt js--triggerAnimation btn btn-outline-warning" onclick="responsiveVoice.speak('{{$dado->biografia}}','Brazilian Portuguese Female');" 
type="button" value="Play"><i class="fas fa-volume-up"></i> Ouvir Biografia</button>
<button class="butt js--triggerAnimation btn btn-outline-danger" onclick="responsiveVoice.cancel();" 
type="button" value="Play"><i class="fas fa-volume-off"></i> Parar o Audio</button>
  <p class="text-justify">{{$dado->biografia}}</p><br>
  @endforeach
  <div class="alert alert-success" role="alert"> 
   Historico Academico
  </div>
  <div class="table-responsive">
  <table class="table">
     <thead>
       <tr>
         <th scope="col">Curso</th>
         <th scope="col">Grau</th>
         <th scope="col">Estabelecimento</th>
         <th scope="col">Local</th>
       </tr>
     </thead>
     <tbody>
     @foreach($buscarAcademico as $dado)
       <tr>
         <td>{{ $dado->curso }}</td>
         <td>{{ $dado->grau }}</td>
         <td>{{ $dado->estabelecimento }}</td>
         <td>{{ $dado->local }}</td>
       </tr>
    @endforeach
     </tbody>
   </table>
      </div>
        <div class="alert alert-success" role="alert">
         Profissões
        </div>
<div class="table-responsive">
  <table class="table">
     <thead>
       <tr>
         <th scope="col">Nome</th>
       </tr>
     </thead>
     <tbody>
     @foreach($buscarProfissao as $dado)
       <tr>
         <td>{{ $dado->nome }}</td>
       </tr>
    @endforeach
     </tbody>
   </table>
      </div>
 </div>
  
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  @foreach($buscarProjeto as $dado)
  <table class="table table-bordered">
        <tbody>
          <tr>
            <th scope="row">Matéria:</th>
            <td><a href="{{ $dado->materia }}" target="_blanK">
      Acessar Projeto</a></td>
          </tr>
          <tr>
            <th scope="row">Ementa:</th>
            <td>{{ $dado->ementa }}</td>
          </tr>
          <tr>
            <th scope="row">Autor:</th>
            <td>{{ $dado->autor }}</td>
          </tr>
          <tr>
            <th scope="row">Data:</th>
            <td>{{ date('d-m-Y', strtotime($dado->data)) }}</td>
          </tr>
        </tbody>
      </table>
      <hr>
  @endforeach
  </div>
  
  <div class="tab-pane fade" id="nav-process" role="tabpanel" aria-labelledby="nav-process-tab">
  @if(count($buscarProcesso) <= 0)
  <div class="alert alert-success" role="alert">
  Não foi possivel encontrar nenhum processo.
  </div>
  @else
  @foreach($buscarProcesso as $dado)
  <table class="table table-bordered">
        <tbody>
          <tr>
            <th scope="row">Processo:</th>
            <td><a href="{{ $dado->processo }}" target="_blanK">
      Acessar Processo</a></td>
          </tr>
          <tr>
            <th scope="row">descricao</th>
            <td>{{ $dado->descricao }}</td>
          </tr>
        </tbody>
      </table>
      <hr>
  @endforeach
  @endif

  </div>

  <div class="tab-pane fade" id="nav-partido" role="tabpanel" aria-labelledby="nav-partido-tab"> <table class="table">
  <div class="table-responsive">
  <table class="table">
     <thead>
       <tr>
         <th scope="col">Partido</th>
         <th scope="col">Mandato</th>
         <th scope="col">Inicio</th>
         <th scope="col">Fim</th>
       </tr>
     </thead>
     <tbody>
     @foreach($buscarMandato as $dado)
       <tr>
         <td>{{ $dado->partido }}</td>
         <th scope="row">{{ $dado->mandato }}</th>
         <td>{{ $dado->inicio }}</td>
         <td>{{ (count($buscarMandato) > 0 ? $dado->fim : "---") }}</td>
       </tr>
    @endforeach
     </tbody>
   </table>
      </div>
   </div>

</div> <!-- tab-content-->
</div> <!-- containter -->

@stop