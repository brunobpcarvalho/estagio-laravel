@extends('templates.template')

@section('content')

<form name="formEdit" id="formEdit" method="post" action="{{url("users/$user->id")}}">
    @method('PUT')
    <div id="divLogin">
        <div class="modal-dialog modal-lg" role="document">
            @if(isset($errors) && count($errors)>0)
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Atenção!</h4>
                @foreach($errors->all() as $erro)
                {{$erro}} &nbsp
                @endforeach
            </div>
            @endif
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Usuario</h4>
                </div>
                <div class="box-body">

                    @csrf
                    <div class="row">
                        <div class="col-xs-8">
                            <input type="hidden" class="form-control" name="id" id="id" value="{{$user->id}}">
                            <span>Nome</span><span class="obrigatorio"> *</span>
                            <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                        </div>
                        <div class="col-xs-4">
                            <span>Genero</span><span class="obrigatorio"> *</span>
                            <input class="form-control" type="text" name="gender" id="gender" value="{{$user->gender}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-4">
                            <span>CPF/CNPJ</span><span class="obrigatorio"> *</span>
                            <input type="text" class="form-control" name="cpf" id="cpf" value="{{$user->cpf}}">
                        </div>
                        <div class="col-xs-4">
                            <span>RG</span><span class="obrigatorio"> *</span>
                            <input type="text" class="form-control" name="rg" id="rg" value="{{$user->rg}}">
                        </div>
                        <div class="col-xs-4">
                            <div class="dataNas input-group">
                                <span>Data de Nascimento</span><span class="obrigatorio"> *</span>
                                <input class="form-control" type="date" name="birthDate" id="birthDate" value="{{$user->birthDate}}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-8">
                            <span>Email</span>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                        </div>
                        <div class="col-xs-2">
                            <span>Tipo</span>
                            <select id="type" name="type" class="form-control">
                                <option value="{{$user->type}}">{{$user->type}}</option>
                                <option value='admin'> Admin </option>
                                <option value='user'> Usuario </option>
                            </select>
                        </div>
                        <div class="col-xs-2">
                            <span>Satus</span>
                            <select id="status" name="status" class="form-control">
                                <option value="{{$user->status}}">{{$user->status}}</option>
                                <option value='active'> Ativo </option>
                                <option value='inactive'> Inativo </option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_endereco" data-toggle="tab">Endereço</a></li>
                            <li><a href="#tab_contato" data-toggle="tab">Contato</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_endereco">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <span>CEP</span>
                                            <input class="form-control" name="cep" type="text" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);" value="{{$user->cep}}" />
                                        </div>
                                        <div class="form-group col-md-8">
                                            <span>Rua</span>
                                            <input class="form-control" name="address" type="text" id="address" size="60" value="{{$user->address}}" />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <span>N°</span>
                                            <input class="form-control" name="number" type="text" id="number" size="4" value="{{$user->number}}" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <span>Bairro</span>
                                            <input class="form-control" name="district" type="text" id="district" size="30" value="{{$user->district}}" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <span>Cidade</span>
                                            <input class="form-control" name="city" type="text" id="city" size="40" value="{{$user->city}}" />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <span>Estado</span>
                                            <select id="state" name="state" class="form-control">
                                                <option value="{{$user->state}}">{{$user->state}}"</option>
                                                <option value='AC'> AC </option>
                                                <option value='AL'> AL </option>
                                                <option value='AP'> AP </option>
                                                <option value='AM'> AM </option>
                                                <option value='BA'> BA </option>
                                                <option value='CE'> CE </option>
                                                <option value='DF'> DF </option>
                                                <option value='ES'> ES </option>
                                                <option value='GO'> GO </option>
                                                <option value='MA'> MA </option>
                                                <option value='MT'> MT </option>
                                                <option value='MS'> MS </option>
                                                <option value='MG'> MG </option>
                                                <option value='PA'> PA </option>
                                                <option value='PB'> PB </option>
                                                <option value='PR'> PR </option>
                                                <option value='PE'> PE </option>
                                                <option value='PI'> PI </option>
                                                <option value='RJ'> RJ </option>
                                                <option value='RN'> RN </option>
                                                <option value='RS'> RS </option>
                                                <option value='RO'> RO </option>
                                                <option value='RO'> RR </option>
                                                <option value='RO'> SC </option>
                                                <option value='RO'> SP </option>
                                                <option value='RO'> SE </option>
                                                <option value='RO'> TO </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <span>Complemento</span>
                                            <input class="form-control" name="comp" type="text" id="comp" size="60" value="{{$user->comp}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Contato -->
                            <div class="tab-pane" id="tab_contato">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <span>Telefone</span>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
                                        </div>
                                        <div class="col-xs-6">
                                            <span>Celular</span>
                                            <input type="text" class="form-control" id="cell" name="cell" value="{{$user->cell}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="/users/{{$user->id}}"><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button></a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
