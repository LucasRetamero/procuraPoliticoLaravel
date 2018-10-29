@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Adicionar um novo Partido</div>
                    <div class="card-body">
                        <a href="{{ route('admin.partidos.lista') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

  <form method="post" action="{{ route('admin.partidos.cadastrar') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="form-group">
    <label for="exampleInputPassword1">Nome</label>
    <input type="text" class="form-control" id="exampleInputName1" placeholder="Insira o nome do partido" name="nome" value="{{old('nome')}}">
  </div>
  <button type="submit" class="btn btn-success btn-lg btn-block" name="btnAcao">Cadastrar Partido</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
