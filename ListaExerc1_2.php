<?php

 $botao = "";
 $msg = "";
 $nota1 = "";
 $nota2 = "";
 $nota3 = "";
 $nota4= "";
 $media = "";
 

 if(isset($_POST["calcular"])){
    $botao = $_POST["calcular"];

    if(isset($_POST["nota1"])){
        $nota1 = $_POST ["nota1"];
    }

    if(isset($_POST["nota2"])){
        $nota2 = $_POST ["nota2"];
    }

    if(isset($_POST["nota3"])){
        $nota3 = $_POST ["nota3"];
    }

    if(isset($_POST["nota4"])){
        $nota4 = $_POST ["nota4"];
    }

    if($nota1 == ""|| $nota2 == "" || $nota3 == "" || $nota4 == ""){
        echo("Preencha os campos corretamente");
    } else {
        $media = ($nota1*2 + $nota2*3 + $nota3*4 + $nota4*5)/14;
        $msg = "O valor é da média ponderada é = " . $media;
    }


 }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cálculo da Média do IFRN</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='ListaExerc1_2.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="ListaExerc1_2.php" method="post">

    <table>
        <tr>
            <th colspan="2">Mensagens: <?php echo $msg?> </th>
        </tr>
        <tr>
            <th colspan="2">Cálculo da Média Ponderada</th>
        </tr>
        <tr>
            <td><label for="lb1">Nota 1:</label></td>
            <td><input type="text" name="nota1"></td>
        </tr>
        <tr>
            <td><label for="lb2">Nota 2:</label></td>
            <td><input type="text" name="nota2"></td>
        </tr>
        <tr>
            <td><label for="lb3">Nota 3:</label></td>
            <td><input type="text" name="nota3"></td>
        </tr>
        <tr>
            <td><label for="lb4">Nota 4:</label></td>
            <td><input type="text" name="nota4"></td>
        </tr>
        <tr>
            <td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
        </tr>
    </table>

    </form>
    
</body>
</html>