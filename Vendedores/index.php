<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1">

        <title>Vendedores</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Empresa Binaria</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>

        <script>
            var vendedor = new Vendedor();
            $(document).ready(function () {
                vendedor.pesquisar(1);
            });
        </script>

        <div class="container">
            <div>
                <h2>Vendedores</h2>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form method="POST" action="">
                    <label>Vendedor</label><br><br>
                    <input type="text" name="vendedor" placeholder="Digite o vendedor" class="form-control"><br><br>

                    <input type="submit" name="btnCadastrar" value="Cadastrar"> 
                </form>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
