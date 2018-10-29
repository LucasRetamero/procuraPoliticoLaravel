@extends('eleito.presidente.iniciar.index')
@section('content')
@foreach($buscarInfo as $dado)
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
   <button type="button" class="btn btn-light"><i class="fas fa-user-circle fa-3x " style="color:green;"></i><p class="text-center">{{ $dado->nome }}<br>Ncme Completo</p></button>
   <button type="button" class="btn btn-light"><i class="fas fa-home fa-3x" style="color:green;"></i><p class="text-center">{{ $dado->naturalidade }}<br>Naturalidade</p></button> 
   <button type="button" class="btn btn-light"><i class="fas fa-calendar fa-3x" style="color:green;"></i><p class="text-center">{{ date('d-m-Y', strtotime($dado->nascimento)) }}<br>Nascimento</p></button>
   <button type="button" class="btn btn-light"><i class="fas fa-school fa-3x" style="color:green;"></i><p class="text-center">{{ $dado->escolaridade }}<br>Escolaridade</p></button>    
   <button type="button" class="btn btn-light"><i class="fas fa-phone fa-3x" style="color:green;"></i><p class="text-center">{{ $dado->telefone }}<br>Telefone</p></button> 
   <button type="button" class="btn btn-light"><i class="fas fa-user fa-3x" style="color:green;"></i><p class="text-center">{{ $dado->status }}<br>Status</p></button>
   <button type="button" class="btn btn-light"><i class="fas fa-envelope fa-3x" style="color:green;"></i><p class="text-center">{{ $dado->email }}<br>E-mail</p></button> 
   <button type="button" class="btn btn-light"><i class="fas fa-briefcase fa-3x" style="color:green;"></i><p class="text-center">{{ $dado->gabinete }}<br>Gabinete</p></button>  
   <a href="{{ $dado->site }}" target="_blank"><button type="button" class="btn btn-light"><i class="fas fa-globe fa-3x" style="color:green;"></i><p class="text-center">{{ $dado->site }}<br>Site</p></button></a>     
   <button type="button" class="btn btn-light"><i class="fas fa-id-badge fa-3x" style="color:green;"></i><p class="text-center">{{ $dado->escritorio }}<br>Escritorio</p></button>  
  </div>
  
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">{!! $dado->biografia !!}</div>
  
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">{!! $dado->projetos  !!}</div>
  
  <div class="tab-pane fade" id="nav-process" role="tabpanel" aria-labelledby="nav-process-tab">{!! $dado->processos !!}</div>

  <div class="tab-pane fade" id="nav-partido" role="tabpanel" aria-labelledby="nav-partido-tab">{!! $dado->partidos  !!}</div>

</div> <!-- tab-content-->
</div> <!-- containter -->
@endforeach
@stop