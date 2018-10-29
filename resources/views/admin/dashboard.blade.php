@extends('layouts.backend')
@section('content')
@include('admin.sidebar')
    <div class="container">
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Informações</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    <div class="row">
    <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Eleitos Cadastrados</div>
                                    <div class="huge">{{$dadoEleito}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.eleitos.lista') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>  
     <!-- // -->
    <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Presidentes Cadastrados</div>
                                    <div class="huge">{{$dadoPresidente}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.eleitos.lista') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>  
      <!-- // -->
     <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Deputado Federais Cadastrados</div>
                                    <div class="huge">{{$dadoDeputadoFederal}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.eleitos.lista') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>  
     <!-- // -->
     <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Senadores Cadastrados</div>
                                    <div class="huge">{{$dadoSenador}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.eleitos.lista') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>  
     <!-- // -->
     <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Governadores Cadastrados</div>
                                    <div class="huge">{{$dadoGovernador}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.eleitos.lista') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>  
     <!-- // -->
     <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Deputado Estaduais Cadastrados</div>
                                    <div class="huge">{{$dadoDeputadoEstadual}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.eleitos.lista') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>  
     <!-- // -->
     <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-circle fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Veradores Cadastrados</div>
                                    <div class="huge">{{$dadoVereador}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.eleitos.lista') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> 
     <!-- // -->
     <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-layer-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Partidos Cadastrados</div>
                                    <div class="huge">{{$dadoPartido}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.partidos.lista') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>   
     <!-- // -->
     <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-layer-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Cargos Cadastrados</div>
                                    <div class="huge">{{$dadoGrupo}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.grupos.lista') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
     <!-- // -->
     <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-file-contract fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Contatos Cadastrados</div>
                                    <div class="huge">{{$dadoContato}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.contato.lista') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
     <!-- // -->
     <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fas fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Usuarios Cadastrados</div>
                                    <div class="huge">{{$dadoUsuario}}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/admin/users') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Lista</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> 
                 
                 
    </div><!--End ROW-->
    </div><!--End CONTAINE-->
@endsection
