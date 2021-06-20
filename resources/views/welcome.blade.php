<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{url('assets/AdminLTE-2.4.18/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('assets/AdminLTE-2.4.18/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('assets/AdminLTE-2.4.18/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('assets/AdminLTE-2.4.18/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="{{url('assets/AdminLTE-2.4.18/dist/css/skins/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{url('assets//style.css')}}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="skin-black wysihtml5-supported sidebar-collapse">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->

                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a style="color:black;" href="/register">Cadastre-se</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="content-wrapper">

            <section class="content">

                @yield('content')

            </section>
        </div>

        <div class="control-sidebar-bg"></div>
    </div>


    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="{{url('assets/AdminLTE-2.4.18/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{url('assets/AdminLTE-2.4.18/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- JQuery Mask -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <!-- Busca CEP -->
    <script src="{{url('assets/buscaCep.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('assets/AdminLTE-2.4.18/dist/js/adminlte.min.js')}}"></script>

    <script>
        $('#cnpj').mask('00.000.000/0000-00');
        $('#phone').mask('(00) 0000-0000');
        $('#cell').mask('(00) 00000-0000');
        $('#cpf').mask('000.000.000-00');
        $('#rg').mask('00.000.000-0');
    </script>

</body>

</html>
