@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Adicionar um novo Eleitor
                    <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 14%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">14%</div>
                       </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/eleitos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

  <form method="post" action="{{ route('admin.eleitos.cadastrar') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <input type="hidden" name="verifica" value="{{$verifica}}"/>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select class="form-control" id="exampleFormControlSelect1" name="partido_id">
      <option value="0">Selecionar Partido</option>
      @foreach($dadoPartidos as $item)
      <option value="{{$item->id}}" {{ (old("partido_id") == $item->id ? "selected":"") }}>{{$item->nome}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select class="form-control" id="exampleFormControlSelect2" name="grupo_id">
      <option value="0">Selecionar Grupo</option>
      @foreach($dadoGrupos as $item)
      <option value="{{$item->id}}" {{ (old("grupo_id") == $item->id ? "selected":"") }}>{{$item->nome}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Imagem</label>
    <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira a url da imagem" name="imagem" value="{{old('imagem')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nome</label>
    <input type="text" class="form-control" id="exampleInputName1" placeholder="Insira o nome do eleitor" name="nome" value="{{old('nome')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Naturalidade</label>
    <input type="text" class="form-control" id="exampleInputCountry1" placeholder="Insira a naturalidade do eleitor" name="naturalidade" value="{{old('naturalidade')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nascimento</label>
    <input type="date" class="form-control" id="exampleInputBorn1" name="nascimento" value="{{old('nascimento')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select class="form-control" id="exampleFormControlSelect3" name="sexo">
      <option value="0">Selecionar Sexo</option>
      <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : ''}}>Masculino</option>
      <option value="Feminino"  {{ old('sexo') == 'Feminino' ? 'selected' : ''}}>Feminino</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select class="form-control" id="exampleFormControlSelect4" name="estado">
      <option value="0">Selecionar Unidade Federativa</option>
      @foreach($dadoEstados as $item)
      <option value="{{$item->nome}}" {{ (old("estado") == $item->nome ? "selected":"") }}>{{$item->nome}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Gabinete</label>
    <input type="text" class="form-control" id="exampleInputAddress1" placeholder="Insira o gabinete do eleitor" name="gabinete" value="{{old('gabinete')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefone</label>
    <input type="text" class="form-control" id="exampleInputPhone1" placeholder="Insira o telefone do eleitor" name="telefone" value="{{old('telefone')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o email do eleitor" name="email" value="{{old('email')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Site</label>
    <input type="text" class="form-control" id="exampleInputWeb1" placeholder="Insira o site do eleitor" name="site" value="{{old('site')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Escritorio</label>
    <input type="text" class="form-control" id="exampleInputBusiness1" placeholder="Insira o escritorio do eleitor" name="escritorio" value="{{old('escritorio')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Escolaridade</label>
    <input type="text" class="form-control" id="exampleInputSchool1" placeholder="Insira a escolaridade do eleitor" name="escolaridade" value="{{old('escolaridade')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <select class="form-control" id="exampleFormControlSelect5" name="status">
      <option value="0">Selecionar Cargo</option>
      @foreach($dadoGrupos as $item)
      <option value="{{$item->nome}}" {{ (old("status") == $item->nome ? "selected":"") }}>{{$item->nome}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-success btn-lg btn-block" name="btnAcao">Proximo Formulario</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
