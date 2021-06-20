@extends('templates.template')

@section('content')
<div class="box">
    <div class="box-header">
        <h1 class="box-title">Dados do Usuario</h1>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-5">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">{{$user->name}}</h3>
                    </div>
                    <div class="box-body">
                        <dl>
                            <p><b>Email: </b>{{$user->email}}</p>
                            <p><b>RG: </b>{{$user->rg}}</p>
                            <p><b>CPF: </b>{{$user->cpf}}</p>
                            <p><b>Data de Nascimento: </b>{{$user->birthDate}}</p>
                            <p><b>Genero: </b>{{$user->gender}}</p>
                            <p><b>Telefone: </b>{{$user->phone}}</p>
                            <p><b>Celular: </b>{{$user->cell}}</p>
                            <br>
                            <p><b>Status: </b>{{$user->status}}</p>
                            <p><b>Tipo: </b>{{$user->type}}</p>
                            <p><b>Data de Inclusão: </b>{{ $user->created_at->format('d/m/Y') }}</p>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Endereço</h3>
                    </div>
                    <div class="box-body">
                        <dl>
                            <p><b>CEP: </b>{{$user->cep}}</p>
                            <p><b>Rua: </b>{{$user->address}}</p>
                            <p><b>Nº: </b>{{$user->number}}</p>
                            <p><b>Bairro: </b>{{$user->district}}</p>
                            <p><b>Cidade: </b>{{$user->city}}</p>
                            <p><b>UF: </b>{{$user->state}}</p>
                            <p><b>Complemento: </b>{{$user->comp}}</p>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
