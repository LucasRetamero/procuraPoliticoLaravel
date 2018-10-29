<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'presidente','namespace' => 'Eleito'], function () {

Route::get('/','PresidenteController@Index')->name('eleito.presidente.lista.home');    

Route::get('conteudo/{id}','PresidenteController@ExibirConteudo')->name('eleito.presidente.conteudo');
});

Route::group(['prefix' => 'deputadofederal','namespace' => 'Eleito'], function () {

Route::get('/','DeputadoFederalController@Index')->name('eleito.deputadofederal.home');

Route::get('conteudo/{id}','DeputadoFederalController@ExibirConteudo')->name('eleito.deputadofederal.conteudo'); 

Route::get('/filtrarlista','DeputadoFederalController@ListaFiltrada')->name('eleito.deputadofederal.filtrar.lista');
});

Route::group(['prefix' => 'senador','namespace' => 'Eleito'], function () {

Route::get('/','SenadorController@Index')->name('eleito.senador.home');

Route::get('conteudo/{id}','SenadorController@ExibirConteudo')->name('eleito.senador.conteudo');

Route::get('/filtrarlista','SenadorController@ListaFiltrada')->name('eleito.senador.filtrar.lista');
});

Route::group(['prefix' => 'governador','namespace' => 'Eleito'], function () {

Route::get('/','GovernadorController@Index')->name('eleito.governador.home');

Route::get('conteudo/{id}','GovernadorController@ExibirConteudo')->name('eleito.governador.conteudo');        

Route::get('/filtrarlista','GovernadorController@ListaFiltrada')->name('eleito.governador.filtrar.lista');
});

Route::group(['prefix' => 'deputadoEstadual','namespace' => 'Eleito'], function () {

Route::get('/','DeputadoEstadualController@Index')->name('eleito.deputadoestadual.home');

Route::get('conteudo/{id}','DeputadoEstadualController@ExibirConteudo')->name('
	eleito.deputadoestadual.conteudo');

Route::get('/filtrarlista','DeputadoEstadualController@ListaFiltrada')->name('eleito.deputadoestadual.filtar.lista');
});

Route::group(['prefix' => 'vereador','namespace' => 'Eleito'], function () {

Route::get('/','VereadorController@Index')->name('eleito.vereador.home');

Route::get('conteudo/{id}','VereadorController@ExibirConteudo')->name('eleito.vereador.conteudo');          

Route::get('/filtrarlista','VereadorController@ListaFiltrada')->name('eleito.vereador.filtrar.lista');
});

Route::group(['namespace'=>'Home'], function () {

Route::post('/contato','ContatoController@EnviarContato')->name('home.contato.enviar');    

Route::get('/','HomeController@Index')->name('home.index');
});

Route::group(['middleware'=>'auth','prefix'=>'admin','namespace'=>'Admin'],function(){

//DashBoard -------------    

Route::get('/', 'AdminController@index')->name('admin.home');
//Eleitos ------------
Route::get('/eleitos', 'EleitoController@Index')->name('admin.eleitos.lista');

Route::post('/eleitoslistafiltrada','EleitoController@show')->name('admin.eleitos.lista.filtrada');

//Cadastro Eleito

Route::get('/eleitos/cadastrar','EleitoController@IndexFormCadastro')->name('admin.eleitos.form.cadastrar');

Route::post('/eleitos/cadastrareleitor','EleitoController@store')->name('admin.eleitos.cadastrar');

//Cadastro Info do Eleito

Route::post('/eleitos/cadastrarbiografia','EleitoController@storeBiografia')->name('admin.eleitos.cadastrar.biografia');

Route::post('/eleitos/cadastrarAcademico','EleitoController@storeAcademico')->name('admin.eleitos.cadastrar.academico');

Route::post('/eleitos/cadastrarProfissao','EleitoController@storeProfissao')->name('admin.eleitos.cadastrar.profissao');

Route::post('/eleitos/cadastrarProjeto','EleitoController@storeProjeto')->name('admin.eleitos.cadastrar.projeto');

Route::post('/eleitos/cadastrarProcesso','EleitoController@storeProcesso')->name('admin.eleitos.cadastrar.processo');

Route::post('/eleitos/cadastrarMandato','EleitoController@storeMandato')->name('admin.eleitos.cadastar.mandato');

//Proximo Cadastro info do Eleito

Route::any('/eleitos/cadastrarAcademicoProximo','EleitoController@IndexCadastroAcademico')->name('admin.eleitos.cadastrar.academico.proximo');

Route::any('/eleitos/cadastrarProfissaoProximo','EleitoController@IndexCadastroProfissao')->name('admin.eleitos.cadastrar.profissao.proximo');

Route::any('/eleitos/cadastrarProjetoProximo','EleitoController@IndexCadastroProjeto')->name('admin.eleitos.cadastrar.projeto.proximo');

Route::any('/eleitos/cadastrarProcessoProximo','EleitoController@IndexCadastroProcesso')->name('admin.eleitos.cadastrar.processo.proximo');

Route::any('/eleitos/cadastrarMandatoProximo','EleitoController@IndexCadastroMandato')->name('admin.eleitos.cadastrar.mandato.proximo');

//Voltar Cadatro Info do Eleito

Route::any('/eleitos/cadastrarAcademicoVoltar','EleitoController@IndexCadastroAcademico')->name('admin.eleitos.cadastrar.academico.voltar');

Route::any('/eleitos/cadastrarProfissaoVoltar','EleitoController@IndexCadastroProfissao')->name('admin.eleitos.cadastrar.profissao.voltar');

Route::any('/eleitos/cadastrarProjetoVoltar','EleitoController@IndexCadastroProjeto')->name('admin.eleitos.cadastrar.projeto.voltar');

Route::any('/eleitos/cadastrarProcessoVoltar','EleitoController@IndexCadastroProcesso')->name('admin.eleitos.cadastrar.processo.voltar');

//Routa teste of page

Route::get('/teste','EleitoController@teste');

//Form atualizar Eleito

Route::any('/eleitos/atualizar/{id}','EleitoController@IndexFormAtualiza')->name('admin.eleitos.form.atualizar');

Route::any('/eleitos/atualizar/biografia/{id}','EleitoController@IndexEditarBiografia')->name('admin.eleitos.form.atualizar.biografia');

Route::any('/eleitos/atualizar/academico/{id}','EleitoController@IndexEditarAcademico')->name('admin.eleitos.form.atualizar.academico');

Route::any('/eleitos/atualizar/profissao/{id}','EleitoController@IndexEditarProfissao')->name('admin.eleitos.form.atualizar.profissao');

//Atualizar info do eleitor

Route::post('/eleitos/atualizareleitor','EleitoController@edit')->name('admin.eleitos.atualizar');

Route::post('/eleitos/atualizareleitorbiografia','EleitoController@editBiografia')->name('admin.eleitos.atualizar.biografia');

Route::post('/eleitos/atualizareleitoracademico','EleitoController@editAcademico')->name('admin.eleitos.atualizar.academico');

Route::post('/eleitos/atualizareleitorprofissao','EleitoController@editProfissao')->name('admin.eleitos.atualizar.profissao');

//Mostrar info do eleitor

Route::get('/eleitos/visualizar/{id}','EleitoController@showEleito')->name('admin.eleitos.perfil');

//Form do Eleito para cadastrar caso vazio

Route::any('/eleitos/cadastrar/biografia/{id}','EleitoController@IndexCadastrarBiografiaForm')->name('admin.eleitos.ifnotexist.cadastrar.biografia.form');

Route::any('/eleitos/cadastrar/academico/{id}','EleitoController@IndexCadastrarAcademicoForm')->name('admin.eleitos.ifnotexist.cadastrar.academico.form');

Route::any('/eleitos/cadastrar/profissao/{id}','EleitoController@IndexCadastrarProfissaoForm')->name('admin.eleitos.ifnotexist.cadastrar.profissao.form');

//Cadastrar eleito caso vazio

Route::post('/eleitos/cadastrar/biografiaifnotexist','EleitoController@storeIfNotExistBiografia')->name('admin.eleitos.ifnotexist.cadastrar.biografia');

Route::post('/eleitos/cadastrar/academicoifnotexist','EleitoController@storeIfNotExistAcademico')->name('admin.eleitos.ifnotexist.cadastrar.academico');

Route::post('/eleitos/cadastrar/profissaoifnotexist','EleitoController@storeIfNotExistProfissao')->name('admin.eleitos.ifnotexist.cadastrar.profissao');

//Deletar info do eleito

Route::get('/eleitos/deletar/{id}','EleitoController@Destroy')->name('admin.eleitos.deletar');

Route::get('/eleitos/deletar/academico/{id}/{idAcademico}','EleitoController@destroyEleitoAcademico')->name('admin.eleitos.academico.remover');

Route::get('/eleitos/deletar/profissao/{id}/{idProfissao}','EleitoController@destroyEleitoProfissao')->name('admin.eleitos.profissao.remover');


//Grupo--------------------

Route::get('/grupos','GrupoController@Index')->name('admin.grupos.lista');

Route::post('/gruposlistafiltrada','GrupoController@FiltrarLetra')->name('admin.grupos.lista.filtrada');

Route::get('/grupos/cadastrar','GrupoController@IndexFormCadastrar')->name('
	admin.grupos.form.cadastrar');

Route::post('/grupos/cadastrargrupo','GrupoController@store')->name('admin.grupos.cadastrar');

Route::get('/grupos/atualizar/{id}','GrupoController@IndexFormAtualizar')->name('admin.grupo.form.atualizar');

Route::post('/grupos/atualizargrupo','GrupoController@edit')->name('admin.grupo.editar');

Route::get('/grupos/deletar/{id}','GrupoController@destroy')->name('
	admin.grupos.deletar');

//Partido ------------------

Route::get('/partidos','PartidoController@Index')->name('admin.partidos.lista');

Route::post('/partidos/filtrarlista','PartidoController@FiltrarLista')->name('admin.partidos.lista.filtrar');

Route::get('/partidos/cadastrar','PartidoController@IndexFormCadastrar')->name('admin.partidos.form.cadastrar');

Route::post('/partidos/cadastrarpartido','PartidoController@store')->name('admin.partidos.cadastrar');

Route::get('/partidos/editar/{id}','PartidoController@IndexFormAtualizar')->name('admin.partidos.form.editar');

Route::post('/partidos/editar','PartidoController@edit')->name('admin.partidos.editar');

Route::get('/partidos/deletar/{id}','PartidoController@destroyer')->name('admin.partidos.deletar');

//Contatos ----------------

Route::get('/contatos','ContatoController@Index')->name('admin.contato.lista');

Route::get('/contatos/show/{id}','ContatoController@ShowContatos')->name('
	admin.contato.show');

Route::get('/contatos/deletar/{id}','ContatoController@Destroyer')->name('admin.contato.deletar');

Route::post('/contatos/filtrarlista','ContatoController@IndexFiltrada')->name('admin.contato.lista.filtrar');


//Usuario -----------------

Route::resource('/users', 'UsersController');
});

//Route::resource('admin/settings', 'Admin\SettingsController');

Auth::routes();

Route::get('/home', 'Home\HomeController@Index')->name('home');


