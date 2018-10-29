@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Editar as informação do Eleitor</div>
                    <div class="card-body">
                       @foreach($eleito as $list)
                        <a href="{{ route('admin.eleitos.perfil',['id'=>$list->id]) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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
  @foreach($eleito as $list)
  <form method="post" action="{{ route('admin.eleitos.atualizar')}}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <input type="hidden" name="id" value="{{$list->id}}"/>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select class="form-control" id="exampleFormControlSelect1" name="partido_id">
      <option value="0">Selecionar Partido</option>
      @foreach($dadoPartidos as $item)
      <option value="{{$item->id}}" {{ ("$list->partido_id" == $item->id ? "selected":"") }}>{{$item->nome}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select class="form-control" id="exampleFormControlSelect2" name="grupo_id">
      <option value="0">Selecionar Grupo</option>
      @foreach($dadoGrupos as $item)
      <option value="{{$item->id}}" {{ ("$list->grupo_id" == $item->id ? "selected":"") }}>{{$item->nome}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Imagem</label>
    <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira a url da imagem" name="imagem" value="{{$list->imagem}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nome</label>
    <input type="text" class="form-control" id="exampleInputName1" placeholder="Insira o nome do eleitor" name="nome" value="{{$list->nome}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Naturalidade</label>
    <input type="text" class="form-control" id="exampleInputCountry1" placeholder="Insira a naturalidade do eleitor" name="naturalidade" value="{{$list->naturalidade}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nascimento</label>
    <input type="date" class="form-control" id="exampleInputBorn1" name="nascimento" value="{{$list->nascimento}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select class="form-control" id="exampleFormControlSelect3" name="sexo">
      <option value="0">Selecionar Sexo</option>
      <option value="Masculino" {{ ("$list->sexo" == 'Masculino' ? 'selected' : '') }}>Masculino</option>
      <option value="Feminino"  {{ ("$list->sexo" == 'Feminino' ? 'selected' : '') }}>Feminino</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select class="form-control" id="exampleFormControlSelect4" name="estado">
      <option value="0">Selecionar Unidade Federativa</option>
      @foreach($dadoEstados as $item)
      <option value="{{$item->nome}}" {{ ("$list->estado" == $item->nome ? "selected":"") }}>{{$item->nome}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Gabinete</label>
    <input type="text" class="form-control" id="exampleInputAddress1" placeholder="Insira o gabinete do eleitor" name="gabinete" value="{{$list->gabinete}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefone</label>
    <input type="text" class="form-control" id="exampleInputPhone1" placeholder="Insira o telefone do eleitor" name="telefone" value="{{$list->telefone}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o email do eleitor" name="email" value="{{$list->email}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Site</label>
    <input type="text" class="form-control" id="exampleInputWeb1" placeholder="Insira o site do eleitor" name="site" value="{{$list->site}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Escritorio</label>
    <input type="text" class="form-control" id="exampleInputBusiness1" placeholder="Insira o escritorio do eleitor" name="escritorio" value="{{$list->escritorio}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Escolaridade</label>
    <input type="text" class="form-control" id="exampleInputSchool1" placeholder="Insira a escolaridade do eleitor" name="escolaridade" value="{{$list->escolaridade}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select class="form-control" id="exampleFormControlSelect5" name="status">
      <option value="0">Selecionar Cargo</option>
      @foreach($dadoGrupos as $item)
      <option value="{{$item->nome}}" {{ ( "$list->status" == $item->nome ? "selected":"") }}>{{$item->nome}}</option>
      @endforeach
    </select>
  </div>
 @endforeach
  <button type="submit" class="btn btn-success btn-lg btn-block" name="btnAcao">Editar Eleitor</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
