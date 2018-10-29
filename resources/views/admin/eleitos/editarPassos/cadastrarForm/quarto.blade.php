@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Adicionar nova profissão do eleitor
                    </div>
                    <div class="card-body">
                     <a href="{{ route('admin.eleitos.perfil',['id'=>$id])}}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar info do eleitor</button></a>  
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

  <form method="post" action="{{ route('admin.eleitos.ifnotexist.cadastrar.profissao') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="form-group">
  <input type="hidden" value="{{ $id }}" name="eleito_id">
  <label for="exampleInputPassword1">Nome</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira o nome da profissão" name="nome" value="{{old('nome')}}">
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnAcao" value="add">Inserir nova profissão</button>
  <hr class="featurette-divider">
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
