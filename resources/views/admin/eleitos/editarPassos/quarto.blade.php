@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Editar profissão do eleitor
                    </div>
                    <div class="card-body">
                     @foreach($dados as $obj)
                     <a href="{{ route('admin.eleitos.perfil',['id'=>$obj->eleito_id]) }}"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar info do eleitor</button></a>  
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

  <form method="post" action="{{ route('admin.eleitos.atualizar.profissao') }}">
   @foreach($dados as $item) 
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="form-group">
  <input type="hidden" value="{{ $item->eleito_id }}" name="eleito_id">
  <input type="hidden" value="{{ $item->id }}" name="id">
  <label for="exampleInputPassword1">Nome</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira o nome da profissão" name="nome" value="{{ $item->nome }}">
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnAcao" value="add">Editar profissão</button>
  <hr class="featurette-divider">
  @endforeach
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
