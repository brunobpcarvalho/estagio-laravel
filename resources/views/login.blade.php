@extends('welcome')

@section('content')
<div id="divLogin">
  <div class="divLoginBox login-box">
    <div class="login-logo">
      <a style="color: white" href=""><b>Entrar</b></a>
    </div>
    <div class="divLoginBody login-box-body">
      <p class="login-box-msg">Faça login para iniciar sua sessão!</p>

      <form action="/usuarios/login" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            <br>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
