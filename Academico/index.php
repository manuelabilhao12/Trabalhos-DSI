<!DOCTYPE html>
<html>
    <head>
        
       
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Sistema de ensino</title>   
        
    </head>
    <body>
        <h2>Sistema de ensino</h2>
        <form method="post" action="UserDetails.php">
            <table class="table-bordered">
                <tr>
                    <td>Matricula (número):</td>
                    <td>
                        <!-- int matricula = 1872150 -->
                        <input type="number" name="matricula"
                               placeholder="Matricula">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td>
                        <input type="text" name="nome"
                               placeholder="Nome do aluno">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Turmas:</td>
                    <td>
                        <input type="radio" name="turma" value="411">411
                        <input type="radio" name="turma" value="423">423
                        <input type="radio" name="turma" value="413">413
                        <br>
                        <input type="radio" name="turma" value="421">421
                        <input type="radio" name="turma" value="422">422
                        <input type="radio" name="turma" value="433">433
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td>
                        <input type="text" name="telefone"
                               placeholder="Telefone de contato">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td>
                         <input type="text" name="endereco" placeholder="Endereço">
                     </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                    <td>
                        <select name="estado">
                            <option value="">Selecione um estado</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Limpar campos">
                    </td>
                    <td></td>
                </tr>
            </table>
            <?php
            if ($_POST) {
                
                //print_r($_GET); //printa tudo do array
                @$matricula /*nome da variáve*/= $_GET['matricula'/*índice da variável*/];
                @$nome = $_POST['nome'];
                @$turma = $_POST['turma'];
                @$telefone = $_POST['telefone'];
                @$endereco = $_POST['endereco'];
                @$estado= $_POST['estado'];
                
               
                
                if(empty($matricula)||empty($nome)||empty($turma)||empty($telefone)||empty($endereco)||empty($estado)){
                    echo ('<div class="alert"> Todos os campos são obrigatórios</div>');
                } else {
                    $result = "<br>Matrícula: ".$matricula. "<br>Nome: ".$nome. "<br>Turma".$turma. "<br>Número de telefone: ".$telefone. "<br>Endereço: ".$endereco. "<br>Estado: ".$estado;
                echo($result);    
                }
                /*$nome = $_GET['nome']
                echo("Seu nome é: ". $nome);*/
            }
            ?>
        </form>
    </body>
</html>