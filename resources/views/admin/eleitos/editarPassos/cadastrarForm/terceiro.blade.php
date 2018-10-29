@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Adicionar nova informação academica do eleitor
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.eleitos.perfil',['id'=>$id])}}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar info do eleitor</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

  <form method="post" action="{{ route('admin.eleitos.ifnotexist.cadastrar.academico') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="form-group">
  <input type="hidden" value="{{ $id }}" name="eleito_id">
  <label for="exampleInputPassword1">Curso</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira o nome do curso" name="curso" value="{{old('curso')}}">
  </div>
  <div class="form-group">
  <select class="form-control" id="exampleFormControlSelect2" name="grau">
      <option value="0">Escolher Grau</option>
      <option value="Nível Fundamental" {{ ( old('grau') ? "selected" : "" ) }}>Nível Fundamental</option>
      <option value="Nível Médio"       {{ ( old('grau') ? "selected" : "" ) }}>Nível Médio</option>
      <option value="Nível Superior"    {{ ( old('grau') ? "selected" : "" ) }}>Nível Superior</option>
      <option value="Pós-Graduação"     {{ ( old('grau') ? "selected" : "" ) }}>Pós-Graduação</option>
      <option value="Mestrado"          {{ ( old('grau') ? "selected" : "" ) }}>Mestrado</option>
      <option value="Doutorado"         {{ ( old('grau') ? "selected" : "" ) }}>Doutorado</option>
      <option value="Pós-Doutorado"     {{ ( old('grau') ? "selected" : "" ) }}>Pós-Doutorado</option>
    </select>
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Estabelecimento</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira o nome do estabelecimento" name="estabelecimento" value="{{old('estabelecimento')}}">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Local</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira o nome do local" name="local" value="{{old('local')}}">
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnAcao" value="add">Inserir nova informação academica</button>
  <hr class="featurette-divider">
</form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
