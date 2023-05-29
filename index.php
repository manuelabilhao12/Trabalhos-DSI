<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/default.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div>
            <h2>SISTEMA DE ENSINO</h2>
        </div>
        <form method="get" action="index.php">
            <fieldset>
                <legend>Cadastro de alunos</legend>
                <table class="table_min" border="1">
                    <tr>
                        <td class="texto">
                            Matricula
                        </td>
                        <td>
                            <!-- int matricula = 10 -->
                            <input type="number" id="matricula" name="matricula" placeholder="Insira a matricula">
                        </td>
                       
                    </tr>
                    <tr>
                        <td class="texto">
                            Nome
                        </td>
                        <td>
                            <input type="text" id="nome" name="nome" placeholder="Insira o seu nome">
                        </td>
                       
                    </tr>
                    <tr>
                        <td class="texto">
                            Turmas
                        </td>
                        <td>
                            <input type="radio" id="turma" name="turma" value="411">411
                            <input type="radio" id="turma" name="turma" value="412">412
                            <input type="radio" id="turma" name="turma" value="412">413
                            <input type="radio" id="turma" name="turma" value="421">421<br>
                            <input type="radio" id="turma" name="turma" value="422">422
                            <input type="radio" id="turma" name="turma" value="431">431
                            <input type="radio" id="turma" name="turma" value="432">432
                            <input type="radio" id="turma" name="turma" value="433">433
                        </td>
                    </tr>
                    <tr>
                        <td class="texto">
                            Telefone
                        </td>
                        <td>
                            <input type="text" id="fone" name="fone" placeholder="Informe seu telefone">
                        </td>
                    </tr>
                    <tr>
                        <td class="texto">
                            Endereço
                        </td>
                        <td>
                            <input type="text" id="endereco" name="endereco"
                                   placeholder="Informe seu endereço">
                        </td>
                    </tr>
                    <tr>
                        <td class="texto">
                            Estado
                        </td>
                        <td>
                            <select id="estado" name="estado">
                                <option value="">Selecione um estado</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="PR">PR</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Salvar">
                            <input type="reset" value="Limpar campos">
                        </td>
                    </tr>
                </table>
                <img style="float: left; width: 30%; min-width: 150px; padding-top: 15px;" src="img/UNI.png" alt=""/>
            </fieldset>
            <?php
            //Se o que vier do formulário vier por meio de um get...faça isso.
            if ($_GET) {
                
                //printf("%s",$_GET);
                //print_r($_GET);
                @$matricula = $_GET['matricula'];
                @$nome = $_GET['nome'];
                @$turma = $_GET['turma'];
                @$fone = $_GET['fone'];
                @$endereco = $_GET['endereco'];
                @$estado = $_GET['estado'];
                
                if (empty($matricula)||empty($nome) || empty($endereco)|| empty($turma) || empty($estado) || empty($fone)) {
                    echo('<div class="alert">Todos os campos do formulário são obrigatórios.</div>');
                }else{
                    echo('<fieldset>');
                        echo('<legend>');
                        echo('Dados cadastrados');
                        echo('</legend>');
                        //printf("Nome = %s",&nome); 
                        require_once './view/listarDadosAluno.php';
                    echo('</fieldset>');
                }
            }
            ?>
        </form>
    </body>
</html>
