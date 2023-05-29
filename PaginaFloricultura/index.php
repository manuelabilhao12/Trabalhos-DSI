<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <title>Floricultura</title>
        <style>
            .borda{
                border: 4px solid black;
            }
            body{
                font-weight: bold;
                background-image: url("https://i.pinimg.com/originals/de/87/11/de87114c8cde97e81b3e101c089f3586.png");
            }
        </style>
    </head>
    <body class="container">
        <div class="row borda">
            <div class="col col-lg-12 text-center">
                <h2>Formulário de Pedidos - Floricultura</h2>
            </div>
        </div>
        <div style="padding-top: 30px;"></div>
        <div id="divForms">
            <div class="col col-lg-12">
                <form method="post" action="index.php">

                    <!-- Control nome -->
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome"
                           placeholder="Digite seu nome" name="nome">
                    <!-- Control email -->
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email"
                           placeholder="Digite seu email" name="email">
                    <!-- Control telefone -->
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="number" class="form-control" id="telefone"
                           placeholder="Digite seu telefone" name="telefone">
                    <!-- Control endereço -->
                    <label for="endereco" class="form-label">Endereço:</label>
                    <textarea class="form-control" id="endereco" rows="3"></textarea>
                    <!-- Control quantidade -->
                    <label for="quantidade" class="form-label">Quantidade:</label>
                    <input type="number" class="form-control" id="quantidade" />
                    <label class="form-check-label" for="divcorflor" >Cor da Flor:</label><br>
                    <div id="divcorflor" class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="corflor" value="vermelho" />Vermelho
                        <input type="radio" name="corflor" value="branco" />Branco
                        <input  type="radio" name="corflor" value="azul" />Azul
                    </div>
            </div>
        </div>
        <label for="divtipoflor">Tipo da Flor:</label>
        <div id="divtipoflor" class="form-check">
            <div class="col col-lg-2">
                <input type="checkbox" class="form-check-input" id="tipoflor"
                       name="tipoflor" value="rosas"/>Rosas
            </div>
            <div class="col col-lg-2">
                <input type="checkbox" class="form-check-input" id="tipoflor"
                       name="tipoflor" value="lirios"/>Lírios
            </div>
            <div class="col col-lg-2">
                <input type="checkbox" class="form-check-input" id="tipoflor"
                       name="tipoflor" value="tulipas"/>Tulipas
            </div>
        </div>
    </div>
</div>
</div>
</div>
<tr>
    <td>
        <form enctype="multipart/form-data" action="_URL_" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            Selecione uma imagem: <input name="arquivo" id="arquivo" type="file" />
        </form>
    </td>
</tr>
<div class="col-sm-3">
    <input class="btn btn-primary" type="submit" value="enviar Pedido">
</div>
</form>
<?php
if ($_POST) {
    @$nome = $_POST['nome'];
    @$email = $_POST['email'];
    @$telefone = $_POST['telefone'];
    @$endereco = $_POST['endereco'];
    @$quantidade = $_POST['quantidade'];
    @$divcorflor = $_POST['divcorflor'];
    @$divtipoflor = $_POST['divtipoflor'];
    @$arquivo = $_POST['arquivo'];

    print_r($_POST);
    if (empty($nome) || empty($email) || empty($telefone) || empty($endereco) || empty($quantidade) || empty($divcorflor) || empty($divtipoflor) || empty($arquivo)) {
        echo('<div class="alert-danger">Todos os campos do formulário são obrigatórios.</div>');
    } else {
        echo("<fieldset> <legend class='alert-success'>Informações:</legend> "
                     . "nome: ".$nome. "<br>email: ".$email. "<br>telefone: ".$telefone. "<br>endereço: ".$endereco. "<br>quantidade: ".$quantidade."<br>cor da flor: ".implode(" + ", $divtipoflor). "<br>tipo da flor: ".implode(" + ", $divtipoflor). "<br>arquivo: ".$arquivo."</fieldset>");
    }
    }
?>
</body>
</html>