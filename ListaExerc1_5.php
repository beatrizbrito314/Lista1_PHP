<?php

$valor='';
$nota100='';
$nota50='';
$nota10='';
$nota5='';
$nota1='';
$msg= '';
$msg1='';
$msg2='';
$msg3='';
$msg4='';
$msg5='';
$alerta='';

if(isset($_POST["calcular"])) {
    $botao = $_POST["calcular"]; 

  
    if(isset($_POST["valor"])){
        $valor = $_POST["valor"];
    }
    if($valor== "" || !is_numeric($valor) ){   $alerta= "Por favor, verifique se o campo está preenchido corretamente";}
            else{

                
                
$nota100=$valor/100;
$nota100= intval ($nota100);


$nota50=$valor/50;
$nota50= intval ($nota50);

$nota10=$valor/10;
$nota10= intval ($nota10);

$nota5=$valor/5;
$nota5= intval ($nota5);


$nota1=$valor/1;
$nota1= intval ($nota1);


if($valor>=100){
$msg1 = "Quantidade mínima de notas de 100: ". $nota100;}
else {
     $msg1 = "Notas de 100 não estão disponíveis para o valor informado";
}
if($valor>=50){
$msg2 = "Quantidade mínima de notas de 50:". $nota50;}
else {
    $msg2 = "Notas de 50 não estão disponíveis para o valor informado";
}
if($valor>=10){
$msg3 = "Quantidade mínima de notas de 10: ". $nota10;}
else {
    $msg3 = "Notas de 10 não estão disponíveis para o valor informado";
}
if($valor>=5){
$msg4 = "Quantidade mínima de notas de 5: ". $nota5;}
else {
    $msg4 = "Notas de 5 não estão disponíveis para o valor informado";
}
if($valor>=1){
$msg5 = "Quantidade mínima de moedas de 1: ". $nota1;}
else {
    $msg2 = "Moedas de 1 não estão disponíveis para o valor informado";
}
$msg="Valor informado R$".$valor;}}

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="ListaExerc1_5.css">
    
</head>
<body>
<form action="ListaExerc1_5.php" method="post">

<table>
        <tr>
            <td><label for="lb1" >Informe o valor em reais: </td>
            <td><input type="text" name="valor"> </td>
        </tr>
        <tr>
            <td colspan="2" class="mensagens"><?php echo $msg1; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="mensagens"><?php echo $msg2; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="mensagens"><?php echo $msg3; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="mensagens"><?php echo $msg4; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="mensagens"><?php echo $msg5; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="mensagens"><?php echo $alerta; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="msg" ><?php echo $msg; ?></td>
        </tr>
        
        <tr>
            <td colspan="2" ><input type="submit" name="calcular" class="bt"> </td>
        </tr>

    </table>
</form>

</body>
</html>