@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Editar informação academica do eleitor
                    </div>
                    <div class="card-body">
                       @foreach($dados as $item)
                        <a href="{{ route('admin.eleitos.perfil',['id'=>$item->eleito_id]) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar as informações do eleitor</button></a>
                       @endforeach
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

  <form method="post" action="{{ route('admin.eleitos.atualizar.academico') }}">
  @foreach($dados as $item)
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="form-group">
  <input type="hidden" value="{{ $item->id }}" name="id">
  <input type="hidden" value="{{ $item->eleito_id }}" name="eleito_id">
  <label for="exampleInputPassword1">Curso</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira o nome do curso" name="curso" value="{{ $item->curso }}">
  </div>
  <div class="form-group">
  <select class="form-control" id="exampleFormControlSelect2" name="grau">
      <option value="0">Escolher Grau</option>
      <option value="Nível Fundamental" {{ ( ("$item->grau" == "Nível Fundamental") ? "selected" : "" ) }}>Nível Fundamental</option>
      <option value="Nível Médio"       {{ ( ("$item->grau" == "Nível Médio") ? "selected" : "" ) }}>Nível Médio</option>
      <option value="Nível Superior"    {{ ( ("$item->grau" == "Nível Superior") ? "selected" : "" ) }}>Nível Superior</option>
      <option value="Pós-Graduação"     {{ ( ("$item->grau" == "Pós-Graduação") ? "selected" : "" ) }}>Pós-Graduação</option>
      <option value="Mestrado"          {{ ( ("$item->grau" == "Mestrado") ? "selected" : "" ) }}>Mestrado</option>
      <option value="Doutorado"         {{ ( ("$item->grau" == "Doutorado") ? "selected" : "" ) }}>Doutorado</option>
      <option value="Pós-Doutorado"     {{ ( ("$item->grau" == "Pós-Doutorado") ? "selected" : "" ) }}>Pós-Doutorado</option>
    </select>
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Estabelecimento</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira o nome do estabelecimento" name="estabelecimento" value="{{ $item->estabelecimento }}">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Local</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira o nome do local" name="local" value="{{ $item->local }}">
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnAcao" value="add">Editar informação academica</button>
  <hr class="featurette-divider">
 @endforeach
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
