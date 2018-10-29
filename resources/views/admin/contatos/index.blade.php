@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Contatos</div>
                    <div class="card-body">
                        <!--<a href="{{ route('admin.grupos.form.cadastrar') }}" class="btn btn-success btn-sm" title="Add New User">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar novo
                        </a>-->
                       
                        <form method="post" action="{{route('admin.contato.lista.filtrar')}}">
                        <br/>
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="assunto">
                        <option value="0">Pesquisar pelo Assunto</option>
                        <option value="Outros">Outros</option>
                        <option value="Sugestão">Sugestão</option>
                        <option value="Reclamação">Reclamação</option>
                        <option value="FeedBack">FeedBack</option>
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
                                        <th>ID</th><th>nome</th><th>e-mail</th><th>assunto</th><th>menssagem</th><th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($eleito as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nome }}</td>  
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->assunto }}</td>  
                                        <td>{{ $item->menssagem }}</td>               
                                        <td>
                                            <a href="{{ route('admin.contato.show',['id'=>$item->id])}}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <!--<a href="{{ route('admin.grupo.form.atualizar',['id'=>$item->id]) }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>-->
                                            {!! Form::open([
                                                'method' => 'get',
                                                'route' => ['admin.contato.deletar', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Deletar Contato',
                                                        'onclick'=>'return confirm("Deletar Contato?")'
                                                )) !!}
                                            {!! Form::close() !!}
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
