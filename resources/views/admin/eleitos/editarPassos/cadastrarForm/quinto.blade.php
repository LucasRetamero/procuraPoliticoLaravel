@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Adicionar novo projeto do eleitor
                    </div>
                    <div class="card-body">
                    <div class="card-body">
                    <a href="{{ route('admin.eleitos.perfil',['id'=>$id]) }}"><button class="btn btn-warning btn-sm" name="btnAcao" value="back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar info do eleitor</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

  <form method="post" action="{{ route('admin.eleitos.ifnotexist.cadastrar.projeto') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="form-group">
  <input type="hidden" value="{{ $id }}" name="eleito_id">
  <label for="exampleInputPassword1">Materia</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira a url do projeto" name="materia" value="{{old('materia')}}">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Ementa</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira a ementa" name="ementa" value="{{old('ementa')}}">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Autor</label>
  <textarea class="form-control" id="text" rows="10"  placeholder="Insira o(os/) autor(res)" name="autor" value="{{old('autor')}}"></textarea>
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Data</label>
  <input type="date" class="form-control" id="exampleInputPicture1" name="data" value="{{old('data')}}">
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnAcao"   value="add">Inserir novo projeto</button>
  <hr class="featurette-divider">
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
