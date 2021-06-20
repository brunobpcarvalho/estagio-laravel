@extends('templates.template')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @csrf

                <table id="table" class="tbl table table-striped text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Endereço</th>
                            <th>Celular</th>
                            <th>Data de Cadastro</th>
                            <th>Status</th>
                            <th>Tipo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $users)
                        <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->cpf}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->address}}</td>
                            <td>{{$users->cell}}</td>
                            <td>{{$users->created_at->format('d/m/Y')}}</td>
                            <td>{{$users->status}}</td>
                            <td>{{$users->type}}</td>
                            <td>
                                <div class="toolbar-actions">
                                    <div class="btn-group">
                                        <a href="{{url("users/$users->id")}}">
                                            <button type="button" name="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="{{url("users/$users->id/edit")}}">
                                            <button type="button" name="button" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="{{url("users/$users->id")}}" class="delete">
                                            <button type="button" name="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
@endsection
