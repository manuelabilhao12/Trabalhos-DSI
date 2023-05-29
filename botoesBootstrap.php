<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Botões boostrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            .col-sm-3{
                border: 1px solid red;
            }
            .col-sm-12{
                border: 1px solid red;
            }
            .col-sm-4{
                border: 1px solid red;
            }
        </style>
    </head>
    <body class="container-fluid">
        <form method="post">
            <div class="row">
                <div class="col-sm-3">
                    <input class="btn btn-success" type="submit">
                </div>
                <div class="col-sm-3">
                    <input class="btn btn-info" type="submit">
                </div>
                <div class="col-sm-3">
                    <input class="btn btn-warning" type="submit">
                </div>
                <div class="col-sm-3"> 
                    <input class="btn btn-danger" type="submit">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <input type="text">
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-dark" href="#">Link</a>
                </div>
                <div class="col-sm-4">
                    <input class="btn btn-link" type="submit" value="Enviar">
                </div>
            </div><!-- COMENTÁRIO -->
        </form>
    </body>
</html>
