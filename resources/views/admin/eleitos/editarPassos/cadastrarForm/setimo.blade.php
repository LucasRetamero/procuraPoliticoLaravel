@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Adicionar novo mandato do eleitor
                    </div>
                    <div class="card-body">
                    <a href="{{ route('admin.eleitos.perfil',['id'=>$id]) }}"><button class="btn btn-warning btn-sm" name="btnAcao" value="back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar Formulario</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

  <form method="post" action="{{ route('admin.eleitos.ifnotexist.cadastrar.mandato') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="form-group">
  <input type="hidden" value="{{ $id }}" name="eleito_id">
  <label for="exampleInputPassword1">Partido</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira o nome do partido" name="partido" value="{{old('partido')}}">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Mandato</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira o nome do mandato" name="mandato" value="{{old('mandato')}}">
   </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Inicio</label>
  <input type="date" class="form-control" id="exampleInputPicture1" name="inicio" value="{{old('inicio')}}">
   </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Fim</label>
  <input type="date" class="form-control" id="exampleInputPicture1" name="fim" value="{{old('fim')}}">
   </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnAcao" value="add">Inserir novo mandato</button>
  <hr class="featurette-divider">
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection