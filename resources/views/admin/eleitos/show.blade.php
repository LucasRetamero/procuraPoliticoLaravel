@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Eleitos</div>
                    <div class="card-body">
                    @foreach($eleito as $item)
                    <a href="{{ url('/admin/eleitos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ route('admin.eleitos.form.cadastrar') }}" class="btn btn-success btn-sm" title="Add New User">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar novo
                        </a>
                        <!--<a href="{{ route('admin.eleitos.form.atualizar',['id'=>$item->id])}}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>-->   
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Deletar Eleitor?')" href="{{route('admin.eleitos.deletar', $item->id)}}"><i class="fa fa-trash"></i> Deletar</a>            
                        <br/>
                        <br/>

   <div class="form-group">
    <label for="exampleOutputName">Imagem</label><br>
    <img src="{{ $item->imagem }}"  width="200" height="200" class="img-thumbnail">
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Nome</label>
    <input type="text" class="form-control" id="exampleOutputName" aria-describedby="emailHelp" value="{{$item->nome}}" readonly>
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Partido</label>
    @foreach($buscarPartido as $nomePartido) 
    <input type="text" class="form-control" id="exampleOutputGrupo" aria-describedby="emailHelp" value="{{ $nomePartido->nome  }}" readonly>
    @endforeach
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Grupo</label>
    <input type="text" class="form-control" id="exampleOutputGrupo" aria-describedby="emailHelp" value="{{ $item->status}}" readonly>
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Naturalidade</label>
    <input type="text" class="form-control" id="exampleOutputCountry" aria-describedby="emailHelp" value="{{$item->naturalidade}}" readonly>
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Nascimento</label>
    <input type="date" class="form-control" id="exampleOutputCountry" aria-describedby="emailHelp" value="{{$item->nascimento}}">
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Sexo</label>
    <select class="form-control" id="exampleFormControlSelect1">
    <option selected="selected">{{ $item->sexo  }}</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Estado</label>
    <select class="form-control" id="exampleFormControlSelect1">
    <option selected="selected">{{ $item->estado  }}</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Gabinete</label>
    <input type="text" class="form-control" id="exampleOutputCountry" aria-describedby="emailHelp" value="{{$item->gabinete}}" readonly>
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Telefone</label>
    <input type="text" class="form-control" id="exampleOutputCountry" aria-describedby="emailHelp" value="{{$item->telefone}}" readonly>
  </div>
  <div class="form-group">
    <label for="exampleOutputName">E-mail</label>
    <input type="email" class="form-control" id="exampleOutputCountry" aria-describedby="emailHelp" value="{{$item->email}}" readonly>
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Site</label><br>
    <a href="{{$item->site}}" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block">Acessar Site(Nova Guia)</button></a>
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Escritorio</label>
    <input type="text" class="form-control" id="exampleOutputCountry" aria-describedby="emailHelp" value="{{$item->escritorio}}" readonly>
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Escolariade</label>
    <input type="text" class="form-control" id="exampleOutputCountry" aria-describedby="emailHelp" value="{{$item->escolaridade}}" readonly>
 <hr>
  <a class="btn btn-warning btn-lg btn-block" href="{{ route('admin.eleitos.form.atualizar',['id'=>$item->id])}}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar Infomações Pessoais</a>
 <hr>
  </div>

  <div class="form-group">  
  <label for="exampleOutputName">Biografia</label>
  @if(count($buscarBiografia) > 0)
    @foreach($buscarBiografia as $nomeBiografia)
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>{{$nomeBiografia->biografia}}</textarea>
    @endforeach
 <hr>
  <a class="btn btn-warning btn-lg btn-block" href="{{ route('admin.eleitos.form.atualizar.biografia',['id'=>$item->id]) }}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar Biografia</a>
 <hr> 
 @else
 <hr>
<div class="alert alert-danger" role="alert">
  Nenhuma biografia encontrada,adicione a biografia do eleitor!
</div>
  <a class="btn btn-success btn-lg btn-block" href="{{ route('admin.eleitos.ifnotexist.cadastrar.biografia.form',['id'=>$item->id])}}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Adicionar biografia</a>
 <hr> 
 @endif
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Historico Academico</label>
   @if(count($buscarAcademico) > 0)
    <div class="table-responsive">
  <table class="table">
     <thead>
       <tr>
         <th scope="col"><b>Curso</th>
         <th scope="col">Ação</b></th>
       </tr>
     </thead>
     <tbody>
     @foreach($buscarAcademico as $nomeAcademico)
            <tr>
         <td>{{$nomeAcademico->curso}}</td>
         <td><a class="btn btn-success btn-sm" href="{{ route('admin.eleitos.ifnotexist.cadastrar.academico.form',['id'=>$item->id])}}" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>/<a class="btn btn-warning btn-sm" href="{{ route('admin.eleitos.form.atualizar.academico',['id'=>$nomeAcademico->id]) }}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>/<a class="btn btn-danger btn-sm" href="{{ route('admin.eleitos.academico.remover',['id'=>$item->id,'idAcademico'=>$nomeAcademico->id])}}" role="button"><i class="fa fa-trash" aria-hidden="true"></i>Deletar</a></td>
       </tr>
     @endforeach     
         </tbody>
   </table>
      </div>
  @else
 <hr>
<div class="alert alert-danger" role="alert">
  Informações academica não encontrada,adicione as informações academica do eleitor!
</div>
  <a class="btn btn-success btn-lg btn-block" href="{{ route('admin.eleitos.ifnotexist.cadastrar.academico.form',['id'=>$item->id])}}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Adicionar informação academica</a>
 <hr> 
 @endif
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Historico Profissões</label>
  @if(count($buscarProfissao)>0)
    <div class="table-responsive">
  <table class="table">
     <thead>
       <tr>
         <th scope="col"><b>Nome</th>
         <th scope="col"><b>Ação</th>
       </tr>
     </thead>
     <tbody>
     @foreach($buscarProfissao as $nomeProfissao)
            <tr>
         <td>{{$nomeProfissao->nome}}</td>
          <td>
          	<a class="btn btn-success btn-sm" href="{{ route('admin.eleitos.ifnotexist.cadastrar.profissao.form',['id'=>$item->id])}}" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>/
          	<a class="btn btn-warning btn-sm" href="{{ route('admin.eleitos.form.atualizar.profissao',['id'=>$nomeProfissao->id])}}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>/
          	<a class="btn btn-danger btn-sm" href="{{ route('admin.eleitos.profissao.remover',['id'=>$item->id,'idProfissao'=>$nomeProfissao->id])}}" role="button"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a></td>
       </tr>
     @endforeach     
         </tbody>
   </table>
      </div>
 @else
 <hr>
<div class="alert alert-danger" role="alert">
  Profissões não encontrada,adicione as profissões do eleitor!
</div>
  <a class="btn btn-success btn-lg btn-block" href="{{ route('admin.eleitos.ifnotexist.cadastrar.profissao.form',['id'=>$item->id])}}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Adicionar Profissão</a>
 <hr> 
 @endif
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Historico Projetos</label>
    @if(count($buscarProjeto)>0)
    <div class="table-responsive">
  <table class="table">
     <thead>
       <tr>
         <th scope="col"><b>Ementa</th>
         <th scope="col">Ação</b></th>
       </tr>
     </thead>
     <tbody>
     @foreach($buscarProjeto as $nomeProjeto)
        <tr>
         <td><p class="text-sm-left" style="width: 18rem;">{{$nomeProjeto->ementa}}</p></td>
         <td><a class="btn btn-success btn-sm" href="#" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>/<a class="btn btn-warning btn-sm" href="#" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>/<a class="btn btn-danger btn-sm" href="#" role="button"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a></td>
       </tr>
     @endforeach     
         </tbody>
   </table>
      </div>
@else
 <hr>
<div class="alert alert-danger" role="alert">
  Projetos não encontradao,adicione os projetos do eleitor!
</div>
  <a class="btn btn-success btn-lg btn-block" href="#" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Adicionar projetos</a>
 <hr> 
 @endif
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Historico Processos</label>
   @if(count($buscarProcesso)>0)
    <div class="table-responsive">
  <table class="table">
     <thead>
       <tr>
         <th scope="col">Descrição</th>
         <th scope="col">Ação</b></th>
       </tr>
     </thead>
     <tbody>
     @foreach($buscarProcesso as $nomeProcesso)
            <tr>
         <td><p class="text-sm-left" style="width: 18rem;">{{$nomeProcesso->descricao}}</p></td>
         <td><a class="btn btn-success btn-sm" href="#" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>/<a class="btn btn-warning btn-sm" href="#" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>/<a class="btn btn-danger btn-sm" href="#" role="button"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a></td>
       </tr>
     @endforeach     
         </tbody>
   </table>
      </div>
@else
 <hr>
<div class="alert alert-danger" role="alert">
  Processos não encontrado,adicione os processos do eleitor!
</div>
  <a class="btn btn-success btn-lg btn-block" href="#" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Adicionar processo</a>
 <hr> 
 @endif
  </div>

  <div class="form-group">
    <label for="exampleOutputName">Historico Mandatos</label>
  @if(count($buscarMandato)>0)
    <div class="table-responsive">
  <table class="table">
     <thead>
       <tr>
         <th scope="col"><b>Partido</th>
         <th scope="col">Mandato</th>
         <th scope="col">Ação</b></th>
       </tr>
     </thead>
     <tbody>
     @foreach($buscarMandato as $nomeMandato)
            <tr>
         <td>{{$nomeMandato->partido}}</td>
         <td>{{$nomeMandato->mandato}}</td>
          <td><a class="btn btn-success btn-sm" href="#" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar</a>/<a class="btn btn-warning btn-sm" href="#" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>/<a class="btn btn-danger btn-sm" href="#" role="button"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a></td>
       </tr>
     @endforeach     
         </tbody>
   </table>
      </div>
   @else
 <hr>
<div class="alert alert-danger" role="alert">
  Mandatos não encontrado,adicione os mandatos do eleitor!
</div>
  <a class="btn btn-success btn-lg btn-block" href="#" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Adicionar mandato</a>
 <hr> 
 @endif
  </div>
                       </form>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
