@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Contatos</div>
                    <div class="card-body">
                    @foreach($eleito as $item)
                    <a href="{{ url('/admin/contatos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                       <!--<a href="{{ route('admin.eleitos.form.cadastrar') }}" class="btn btn-success btn-sm" title="Add New User">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar novo
                        </a>-->
                        <!--<a href="{{ route('admin.eleitos.form.atualizar',['id'=>$item->id])}}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>-->   
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Deletar Contato?')" href="{{route('admin.contato.deletar', $item->id)}}"><i class="fa fa-trash"></i> Deletar</a>            
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th><th>nome</th><th>e-mail</th><th>assunto</th><th>Menssagem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nome }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->assunto }}</td>
                                        <td>{{ $item->menssagem }}</td>          
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
