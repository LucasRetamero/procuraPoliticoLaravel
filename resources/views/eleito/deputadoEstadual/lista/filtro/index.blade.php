<div class="card">
  <h5 class="card-header">Pesquisar</h5>
  <div class="card-body">
  <form method="get" action="{{ route('eleito.deputadoestadual.filtar.lista') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <label for="formGroupExampleInput" class="font-weight-bold">Nome:</label><br>
  <input type="text" name="nome" class="form-control-sm" id="formGroupExampleInput" placeholder="Pesquisar pelo nome...">
  <select name="partido" class="form-control-sm">
  <option value="0">Partido</option>
  @foreach($listaPartido as $listaPar)
  <option value="{{ $listaPar->id }}">{{ $listaPar->nome }}</option>
  @endforeach
  </select>
  <select name="estado" class="form-control-sm">
  <option value="0">Estado</option>
  @foreach($listaEstado as $lista)
  <option value="{{ $lista->nome }}">{{ $lista->nome }}</option>
  @endforeach
  </select>
  <select name="sexo" class="form-control-sm">
  <option value="0">Sexo</option>
  <option value="Masculino">Masculino</option>
  <option value="Feminino">Feminino</option>
</select><br>
<br><input type="submit" class="btn btn-success btn-lg btn-block" value="Realizar Pesquisa">
 </form> 
  </div><!-- card body-->
</div>