<section id="contato" class="contact-section bg-black">
 <!-- Inicio Saida do tratamento de erro -->
 @if(isset($errors) && count($errors) > 0)
 <div class="alert bg-warning" role="alert">
 <ul>
 @foreach($errors->all() as $erro)
<li class="font-weight-normal text-dark">{{ $erro }}</li>
 @endforeach
</ul>
</div>
 @endif
 <!-- Fim Saida do tratamento de erro -->
<form method="post" action="{{ route('home.contato.enviar') }}">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <div class="form-group">
    <label for="formGroupExampleInput" class="p-3 mb-2 bg-warning text-dark">Nome</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insira seu nome" value="{{ old('nome') }}" name="nome">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2" class="p-3 mb-2 bg-warning text-dark">Email</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Insira seu e-mail" value="{{ old('email') }}" name="email">
  </div>
  
  <div class="form-group">
  <label for="formGroupExampleInput2" class="p-3 mb-2 bg-warning text-dark">Assunto</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" value="{{ old('assunto') }}"name="assunto">
    <option>Escolher</option>
    <option {{ old('assunto') == 'Outros' ? 'selected' : ''}}>Outros</option>
    <option {{ old('assunto') == 'Sugestão' ? 'selected' : ''}}>Sugestão</option>
    <option {{ old('assunto') == 'Reclamação' ? 'selected' : ''}}>Reclamação</option>
    <option {{ old('assunto') == 'FeedBack' ? 'selected' : ''}}>FeedBack</option>
  </select>
  </div>

   <div class="form-group">
    <label for="formGroupExampleInput2" class="p-3 mb-2 bg-warning text-dark">Mensagem</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="menssagem">{{ old('menssagem') }}</textarea>
  </div>
  <button type="submit" class="btn btn-warning btn-lg btn-block">Enviar Contato</button>
</form>
    </section>