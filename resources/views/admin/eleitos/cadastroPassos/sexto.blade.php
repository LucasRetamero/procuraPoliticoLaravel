@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Adicionar novo processo do eleitor
                    <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 84%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">84%</div>
                       </div>
                    </div>
                    <div class="card-body">
                    <a href="{{ route('admin.eleitos.cadastrar.projeto.voltar') }}"><button class="btn btn-warning btn-sm" name="btnAcao" value="back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar Formulario</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

  <form method="post" action="{{ route('admin.eleitos.cadastrar.processo') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="form-group">
  <input type="hidden" value="{{ ( isset($id) ? $id : redirect()->route('admin.eleitos.form.cadastrar') ) }}" name="eleito_id">
  <label for="exampleInputPassword1">Processo</label>
  <input type="text" class="form-control" id="exampleInputPicture1" placeholder="Insira a url do processo" name="processo" value="{{old('processo')}}">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Descrição</label>
  <textarea class="form-control" id="text" rows="10"  placeholder="Insira a descrição do processo" name="descricao" value="{{old('descricao')}}"></textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnAcao" value="add">Inserir novo processo</button>
  <hr class="featurette-divider">
</form>
<a href="{{ route('admin.eleitos.cadastrar.mandato.proximo') }}"><button class="btn btn-success btn-lg btn-block" name="btnAcao" value="next">Proximo Formulario</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
