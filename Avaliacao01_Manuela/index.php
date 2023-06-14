<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário de ordem de serviço - oficina mecânica</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            body{
                background-color: gray
            }
            .img-fluid{
                border-bottom: 1px solid black;
                border-left: 1px solid black;
                border-top: 1px solid black;
                border-right: 1px solid black;
            }
            h1{
                font-size: 27px;
            }
        </style>
    </head>
    <body class="container">
        <form method="POST" action="index.php">
            <div class="container-fluid">
                <div class="col col-lg-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="img/chevrolet.jpg" class="img-fluid" alt=""/>
                        </div>
                    <div class="col-lg-4">
                        <img src="img/argo.jpeg" class="img-fluid" alt=""/>
                    </div>
                    <div class="col-lg-4">
                        <img src="img/touro.jpg" class="img-fluid" alt=""/>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-sm-8">
                <h1>Formulário de Ordem de Serviço - Oficina Mecânica</h1>
            </div>
                <br>
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="nome">Nome do Cliente: </label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome do cliente" name="nome">
                </div>
                <br>
                <div class="form-group">
                    <label for="telefone">Telefone: </label>
                    <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone do cliente" name="telefone">
                </div>
                <br>
                <div class="form-group">
                    <label for="modelo">Modelo do Veículo: </label>
                    <select class="form-control" id="modelo" name="modelo">
                        <option value="">Selecione o modelo do veículo</option>
                        <option value="suv">Suv</option>
                        <option value="hacth">Hacth</option>
                        <option value="sedan">Sedan</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="telefone">Placa do veículo: </label>
                    <input type="text" class="form-control" id="placa" placeholder="Digite a placa do veículo" name="placa">
                </div>
                <br>
                <div class="form-group">
                    <label>Serviços: </label>
                    <div class="checkbox">
                        <input type="checkbox" name="servicos[]" value="troca de oleo">Troca de óleo
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="servicos[]" value="alinhamento e balanceamento">Alinhamento e Balanceamento
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="servicos[]" value="revisao geral">Revisão Geral</label
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="servicos[]" value="troca de pneus">Troca de Pneus
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="data">Data: </label>
                        <input type="date" class="form-control" name="data">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="obs">Observações: </label>
                        <textarea class="form-control" name="obs" placeholder="Digite quaisquer observações"></textarea>
                    </div>
                    <br>
                    <input value="Enviar Ordem de Serviço" class="btn btn-primary" type="submit">
                    <?php
                    if ($_POST) {
                        @$nome = $_POST['nome'];
                        @$telefone = $_POST['telefone'];
                        @$modelo = $_POST['modelo'];
                        @$placa = $_POST['placa'];
                        @$servicos = $_POST['servicos'];
                        @$data = $_POST['data'];
                        @$obs = $_POST['obs'];
                        if (empty($nome) || empty($telefone) || empty($modelo) || empty($placa) || empty($data) || empty($obs)) {
                            echo('<div class="alert-danger">Preencher os campos obrigatórios. </div>');
                        } else {
                            echo("<fieldset> <legend class='alert-success'>Informações:</legend> "
                            . "Nome do Cliente: " . $nome . "<br>Telefone: " . $telefone . "<br>Modelo do Veículo: " . $modelo . "<br>Placa do veículo: " . $placa . "<br>Serviços: ".implode(" + ", $servicos). "<br>Data: " . $data .
                            "<br>Observações: " . $obs . "</fieldset>");
                        }
                    }
                    ?>
                    </form>
                    </body>
                    </html>
