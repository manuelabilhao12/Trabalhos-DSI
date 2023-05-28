<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário de Seleção de Acessorios - Montadora HONDA veículos</title>
        <link href="css/default.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
    </head>
    <body class="container">
        <form method="POST" action="index.php">
                <div class="col-sm-12">
                    <h1>Formulário de Seleção de Acessorios - Montadora HONDA veículos</h1>
                </div>                
            </div>
        <div class="col-sm-12">
                    <div class="form-group">
                        <label for="cor">Cor do Veículo: </label>
                        <input type="text" class="form-control" id="cor" placeholder="Digite a cor do veículo" name="cor">
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo do Veículo: </label>
                        <select class="form-control" id="modelo" name="modelo">
                            <option value="">Selecione um modelo</option>
                            <option value="civic">Civic</option>
                            <option value="accord">Accord</option>
                            <option value="CR-V">CR-V</option>
                            <option value="HR-V">HR-V</option>
                            <option value="Fit">Fit</option>
                            <option value="City">City</option>
                            <option value="WR-V">WR-V</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Pilot">Pilot</option>
                            <option value="Odyssey">Odyssey</option>
                        </select>
                    </div>
            <div class="form-group">
                        <label>Acessórios: </label>
                        <div class="checkbox">
                            <label><input type="checkbox" name="acessorios[]" value="rodas de liga leve"><b>Rodas de Liga leve</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="acessorios[]" value="teto solar"><b>Teto Solar</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="acessorios[]" value="banco em couro"><b>Banco em Couro</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="acessorios[]" value="Ar-condicionado Digital"><b>Ar-condicionado Digital</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="acessorios[]" value="central multimidia"><b>Central Multimídia</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="acessorios[]" value="sensor de estacionamento"><b>Sensor de Estacionamento</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="acessorios[]" value="banco de ré"><b>Banco de Ré</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="acessorios[]" value="farois de led"><b>Faróis de Led</b></label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="acessorios[]" value="bancos com aquecimento"><b>Bancos com Aquecimento</b></label>
                        </div>
                        <div class="form-group">
                            <label for="obs">Observações: </label>
                            <textarea class="form-control" name="obs" placeholder="Digite quaisquer observações"></textarea>
                        </div>
                        <input value="Confirmar seleção de acessórios" class="btn btn-danger" type="submit">
                        
                   
        <?php
            if($_POST){
         @$cor = $_POST['cor'];
         @$modelo = $_POST['modelo'];
         @$acessorios = $_POST['acessorios'];
         @$obs = $_POST['obs'];
         if(empty($cor) || empty($modelo) || empty($acessorios) || empty($obs)){
             echo('<div class="alert-danger">Preencher os campos obrigatórios. </div>');
         }else {
             echo("<fieldset> <legend class='alert-success'>Informações:</legend> "
                     . "Cor do veículo: ".$cor. "<br>Modelo do veículo: ".$modelo. "<br>Acessórios escolhidos: ".implode(" + ", $acessorios).                           
                         "<br>Observações: ".$obs."</fieldset>");
         }
         
    }
    
        ?>
    </body>
</html>
