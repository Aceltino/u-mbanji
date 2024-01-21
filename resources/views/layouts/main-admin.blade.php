<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal de venda e aluguel de casas">

    <title>@yield('title')</title>

    <!-- /	Link dos Css do Bootstrap -->
    <link href={{URL::asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

    <!-- /	Link do Css do projecto -->
    <link href={{{URL::asset("css/config.css")}}} rel="stylesheet">
    <link href={{{URL::asset("css/main.css")}}} rel="stylesheet">
</head>
<body class="vw-100 overflow-x-hidden">

    @include('layouts.header-admin')

    @yield('conteudo')

    @include('layouts.footer-admin')


    <!-- /  Link dos js do bootstrap-->
    <script src={{{URL::asset("bootstrap/js/bootstrap.min.js")}}}></script>
</body>
</html>