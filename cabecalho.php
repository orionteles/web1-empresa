<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bootstrap</title>

    <link rel="stylesheet" href="../js/bootstrap/css/bootstrap.min.css">

    <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $(function(){
            $('.data').mask('99/99/9999');
            $('.cpf').mask('999.999.999-99');
            $('.cep').mask('99.999-999');
        });
    </script>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Projeto Empresas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Cargo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Empresas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Funcionário</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style="margin-top: 60px;">