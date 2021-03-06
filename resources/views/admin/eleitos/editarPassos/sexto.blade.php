@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Editar processo do eleitor
                    </div>
                    <div class="card-body">
                    @foreach($dados as $dd)
                    <a href="{{ route('admin.eleitos.perfil',['id'=>$dd->eleito_id])}}"><button class="btn btn-warning btn-sm" name="btnAcao" value="back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar info do eleitor</button></a>
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

  <form method="post" action="{{ route('admin.eleitos.atualizar.processo') }}">
  @foreach($dados as $item)
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <input type="hidden" name="id" value="{{ $item->id }}">
  <div class="form-group">
  <input type="hidden" value="{{ $item->eleito_id }}" name="eleito_id">
  <label for="exampleInputPassword1">Processo</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira a url do processo" name="processo" value="{{ $item->processo }}">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Descrição</label>
    <textarea class="form-control" id="text" rows="10"  placeholder="Insira a descrição do processo" name="descricao">{{ $item->descricao }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnAcao" value="add">Editar processo</button>
  <hr class="featurette-divider">
  @endforeach
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
