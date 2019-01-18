@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Eleitos</div>
                    <div class="card-body">
                        <a href="{{ route('admin.eleitos.form.cadastrar') }}" class="btn btn-success btn-sm" title="Add New User">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar novo
                        </a>
                       
                        <form method="post" action="{{route('admin.eleitos.lista.filtrada')}}">
                        <br/>
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="grupo_id">
                        <option value="0">Pesquisar pelo Grupo</option>
                        @foreach($dadoGrupo as $item)
                        <option value="{{$item->id}}">{{$item->nome}}</option>
                        @endforeach
                       </select>
                       </div>
                       <div class="form-group">
                       <button type="submit" class="btn btn-warning btn-lg btn-block">Pesquisar</button>
                       </div>
                        </form>
                         
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>partido_id</th><th>grupo_id</th><th>Nome</th><th>Sexo</th><th>Estado</th><th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($eleito as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td><a href="{{ url('/admin/users', $item->id) }}">{{ $item->partido_id }}</a></td>
                                        <td>{{ $item->grupo_id }}</td>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ $item->sexo }}</td>
                                        <td>{{ $item->estado }}</td>              
                                        <td>
                                            <a href="{{ route('admin.eleitos.perfil',['id'=>$item->id])}}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Perfil</button></a>
                                            <!--<a href="{{ route('admin.eleitos.form.atualizar',['id'=>$item->id]) }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>-->
                                            <a class="btn btn-danger btn-sm" onclick="return confirm('Deletar Eleitor?')" href="{{route('admin.eleitos.deletar', $item->id)}}"><i class="fa fa-trash"></i> Deletar</a>   
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
