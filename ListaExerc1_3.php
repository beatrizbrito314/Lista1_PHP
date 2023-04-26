<?php
$peso ='';
$altura = '';
$imc = '';
$msg = '';
$alerta='';
$condicao='';


if(isset($_POST["calcular"])){
    $botao = $_POST["calcular"];

    if(isset($_POST["peso"])){
        $peso = $_POST ["peso"];
    }

    if(isset($_POST["altura"])){
        $altura = $_POST ["altura"];
    }

    if($peso== "" || $altura=="" || !is_numeric($peso) || !is_numeric($altura) ){
        $alerta= "Por favor, verifique se o campo está preenchido corretamente";}
    else{

    $imc = $peso/($altura*$altura);
    

    if($imc<18.5){
        $condicao="Abaixo do peso";
    }else if ($imc>=18.5 && $imc<25){
        $condicao="Peso normal";
    }else if ($imc>=25 && $imc<30){
        $condicao="Acima do peso";
    }else if ($imc>=30){
        $condicao="Obesidade";
    }

    

    $msg = "O valor da IMC é = " . number_format($imc, 2);
    }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='ListaExerc1_3.css'>
    <title>Cálculo IMC</title>

    <link rel="stylesheet" href="ListaExerc1_5.css">
</head>
<body>
    <form action="ListaExerc1_3.php" method="post">
        <table>
          
            <tr>
                <th colspan="2" class="msg">Cálculo do IMC</th>
            </tr>
            <tr>
                <td><label for="lb1">Digite o peso:</label></td>
                <td><input type="text" name="peso"></td>
            </tr>
            <tr>
                <td><label for="lb2">Digite a altura:</label></td>
                <td><input type="text" name="altura"></td>
            </tr>
            <tr>
            <td colspan="2" class="mensagens"><?php echo $alerta?> </td>
            </tr>
            <tr>
               <td colspan="2" class="mensagens"><?php echo $msg?> </td>
               
            </tr>
            <tr>
               <td colspan="2" class="mensagens"><?php echo $condicao?> </td>
            </tr>
            <tr>
                <td colspan="2"> <input class = "bt" type="submit" name="calcular"></td>
            </tr>

        </table>
    
        </form>
    
</body>
</html>