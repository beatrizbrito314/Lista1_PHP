<?php

 $botao = '';
 $msg = '';
 $nota1 = '';
 $nota2 = '';
 $nota3 = '';
 $nota4= '';
 $media = '';
 $alerta='';
 $alerta2='';

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

    //Verificar se o campos está preenchido
    if (empty($_POST["nota1"]) || empty($_POST["nota2"]) || empty($_POST["nota3"]) || empty($_POST["nota4"])) {
        $alerta = "Preencha todos os campos corretamente";}

//Verificar se o campos é letra
    elseif (!is_numeric($nota1) || (!is_numeric($nota2)) || (!is_numeric($nota3)) || (!is_numeric($nota4))){
        $alerta2 = "Os campos devem ser preenchidos com números";}

     else {
        $media = ($nota1*2 + $nota2*3 + $nota3*4 + $nota4*5)/14;
        $msg= "O valor é da média ponderada é = ". $media;
    }}


 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cálculo da Média do IFRN</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
    <link rel="stylesheet" href="ListaExerc1_5.css">
</head>
<body>
    <form action="ListaExerc1_2.php" method="post">


<!--Div para alertas de erro-->
<div class= "container-fluid msg"> 
    <img src="https://img.icons8.com/?size=512&id=EggHJUeUuU6C&format=png" alt="" class=icon>
<br> 
<?php echo $alerta?>
<br>
<?php echo $alerta2?>
</div>

    <table>
       
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
            <td colspan="2" class="mensagens"> <?php echo $msg?> </td>
        </tr>
        <tr>
            <td colspan="2"> <input class = "bt" type="submit" name="calcular"></td>
        </tr>
    </table>

    </form>
    
</body>
</html>