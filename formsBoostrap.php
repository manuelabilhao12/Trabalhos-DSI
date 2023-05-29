<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Elementos de formulário do boostrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            .borda{
                border: 1px solid greenyellow;
            }
        </style>
    </head>
    <body class="container">
        <div class="row borda">
            <div class="col col-lg-12 text-center">
                MENU
            </div>
        </div>
        <div id="divForms" class="row borda">
            <div class="col col-lg-8">
                <form method="post" action="formsBoostrap.php">

                    <!-- Control matricula -->
                    <label for="matricula" class="form-label">Matricula:</label>
                    <input type="number" class="form-control" id="matricula" 
                           placeholder="Insira sua matricula" name="matricula">
                    <!-- Control nome -->
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" 
                           placeholder="Insira seu nome" name="nome">
                    <!-- Control turmas -->
                    <label for="divTurmas" class="form-label">Turmas:</label>
                    <div id="divTurmas" class="form-check">
                        <div class="row">
                            <div class="col col-lg-2">
                                <input type="radio" class="form-check-input" id="turma"
                                       name="turma" value="411" checked>411
                            </div>
                            <div class="col col-lg-2">
                                <input type="radio" class="form-check-input" id="turma"
                                       name="turma" value="421">421
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-2">
                                <input type="radio" class="form-check-input" id="turma"
                                       name="turma" value="431">431
                            </div>
                            <div class="col col-lg-2">
                                <input type="radio" class="form-check-input" id="turma"
                                       name="turma" value="423">423
                            </div>
                        </div>
                    </div>
                    <!-- Control telefone -->
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" 
                           placeholder="Insira seu telefone" name="telefone">
                    <!-- Control estado -->
                    <label for="estado" class="form-label">Estado:</label>
                    <select id="estado" name="estado" class="form-select">
                        <option value="RS">RS</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="ES">ES</option>
                    </select>
                    <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
                        <div class="col col-lg-12">
                            <input type="submit" class="btn btn-success btn-group-lg" value="Enviar">
                        </div>
                    </div>
                </form>
            </div><!-- final da div 8 -->
            <div class="col col-lg-4">
                <img src="img/livro.jpg" class="img-fluid rounded-circle" alt=""/>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-12 borda">
                <?php
                if ($_POST) {
                    print_r($_POST);
                    //Dei mais uma incrementada para ajudar vcs pessoal. Sigam com o PHP por aqui.
                    //Abraço.
                }
                ?>
            </div>
        </div>
    </body>
</html>
