<?php
$peso = "";
$altura="";
$imc = "";
$msg = "";
$sexo= "";
$alerta="";

if(isset($_POST["calcular"])){
    $botao = $_POST["calcular"];

    if(isset($_POST["peso"])){
        $peso = $_POST ["peso"];
    }

    if(isset($_POST["altura"])){
        $altura = $_POST ["altura"];
    }
    if(isset($_POST["sexo"])){
        $sexo = $_POST ["sexo"];
    }

    if($peso== "" || $altura=="" || $sexo ==""){
        $alerta= "Por favor, verifique se o campo está preenchido corretamente";}
    else{

    $imc = $peso/($altura*$altura);

    if($sexo=="f"){
        if($imc<19.1){
            echo("Abaixo do peso");
        }else if ($imc>=19.1 && $imc<25.8){
            echo("Peso normal");
        }else if ($imc>=25.8 && $imc<27.3){
            echo("Marginalmente acima do peso");
        }else if ($imc>=27.3 && $imc<32.3){
                echo("Acima do peso ideal");
        }else if ($imc>=32.3){
            echo("Obesidade");
        }
    }

    if($sexo=="m"){
        if($imc<20.7){
            echo("Abaixo do peso");
        }else if ($imc>=20.7 && $imc<26.4){
            echo("Peso normal");
        }else if ($imc>=26.4 && $imc<27.8){
            echo("Marginalmente acima do peso");
        }else if ($imc>=27.8 && $imc<31.1){
                echo("Acima do peso ideal");
        }else if ($imc>=31.1){
            echo("Obesesidade");
        }
    }

    $msg = "O valor do seu IMC é = " . number_format($imc, 2);
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC</title>

    <link rel="stylesheet" href="ListaExerc1_5.css">
</head>
<body>
    <form action="ListaExerc1_4.php" method="post">
        <table>
            <tr>
                <td colspan="2">Cálculo do IMC</td>
            </tr>
            <tr>
                <td><label for="lb1">Informe o peso:</label></td>
                <td><input type="text" name="peso"></td>
            </tr>
            <tr>
                <td><label for="lb2">Informe a altura:</label></td>
                <td><input type="text" name="altura"></td>
            </tr>
            <tr>
                <td><label for="lb3">Informe seu sexo:</label></td>
                <td><input type="radio" id="f" name="sexo" value="f" <?php echo ($sexo=="f")?> >
                        <label for="f"> F </label>
                    <input type="radio" id="m" name="sexo" value="m" <?php echo ($sexo=="m")?> >
                        <label for="m"> M </label>
                </td>
                </tr>
                <tr>
               <td colspan="2"><?php echo $alerta?> </td>
            </tr>
            <tr>
               <td colspan="2"><?php echo $msg?> </td>
               
            </tr>
            <tr>
                <td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
            </tr>
        </table>
    
        </form>
    
</body>
</html>