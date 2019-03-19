<?php include('lib/constantes.php')?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('menu.php');?></div>
            <div id="contenido"></div>
        </div>
        
    </body>
    
    <pre>
        <?php
            var_dump(session_id());
            $_SESSION["hm"] = "Hola Mundo";
        ?>
    </pre>
    
    <script>
        $("#menusolicitudes").click(function(){
            
            if($("#subvacaciones").css("display")!="none"){
                $("#subvacaciones").hide();
            }else{
                $("#subvacaciones").show();
                $("#subvacaciones").css("display", "block");
            }

        });
    </script>
</html>
