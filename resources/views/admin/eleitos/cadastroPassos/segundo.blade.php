@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Adicionar nova biografia do eleitor
                    <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 28%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">28%</div>
                       </div>
                    </div>
                    <div class="card-body">
                     <!--<a href="#"><button class="btn btn-warning btn-sm" name="btnAcao" value="back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar Formulario</button></a>-->
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <!-- Script for read text of textarea -->
                        <script type="text/javascript">
function tocar(){
  if(document.getElementById('text').value == "")
  alert('É necessario que digite a biografia!');
  else
  responsiveVoice.cancel();
  responsiveVoice.speak(document.getElementById('text').value, 'Brazilian Portuguese Female');
}
function parar(){
  responsiveVoice.cancel();
}
      </script>
                        <!-- End of Script -->
<button class="btn btn-primary" id="playbutton" onclick="tocar()"><i class="fas fa-volume-up"></i> Ouvir Biografia</button>
<button class="btn btn-danger" id="stopbutton"   onclick="parar()"><i class="fas fa-volume-off"></i> Parar o Audio</button>
<div class="alert alert-warning" role="alert">
  <b><i>Recomendamos <i>ouvir biografia</i> para verificar se o texto pode ser lido,siga algumas instruções para o bom funcionamento.</i></b>
  <ul>
  <li>Remova os espaçamento muito grande do texto.</li>
  <li>Remova os caractere diferente do normal. Exemplo [3] e etc</li>
  <ul>
</div>
<!-- -->
  <form method="post" action="{{ route('admin.eleitos.cadastrar.biografia') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="form-group">
  <input type="hidden" value="{{ ( isset($id) ? $id : redirect()->route('admin.eleitos.form.cadastrar') ) }}" name="eleito_id">
  <label for="exampleFormControlTextarea1">Escreva Biografia</label>
 <textarea class="form-control" id="text" rows="10" name="biografia"></textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnAcao"   value="next">Inserir nova biografia do eleitor</button>
  <hr class="featurette-divider">
</form>
<a href="{{ route('admin.eleitos.cadastrar.academico.proximo') }}"><button class="btn btn-success btn-lg btn-block">Proximo Formulario</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
