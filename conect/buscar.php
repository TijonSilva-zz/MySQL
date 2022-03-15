<?php 

include ("C:\wamp64\www\conect\conexao.php");



?>
      <?php
                $pesquisa = $mysqli -> real_escape_string($_GET['busca']);
                $sql_code = 
                "SELECT * FROM compras
                 WHERE nome LIKE '%pesquisa%' ";
                $sql_query = $mysqli -> query($sql_code) or die ("ERRO NA CONSULTA" . $mysqli-> error);
                ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ramal HBR</title>
    </head>
    <body>
        <h1>Resultado da Pesquisa:</h1>
        <table width = "600px" border="1">
            <tr>
                <td>nome</td>
                <td>ramal</td>
            </tr>
            <?php while ($dado = $sql_query -> fetch_assoc()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
       
                
        </table>
    </body>
    </html>