<?php   

$a='';
$b='';
$c='';
$x1='';
$x2='';
$delta='';
$alerta='';
$alerta2='';
$alerta3='';
$msg1='';
$msg2='';

if(isset($_POST["calcular"])){
    $botao = $_POST["calcular"];

    if(isset($_POST["a"])){
        $a= $_POST ["a"];
    }
    if(isset($_POST["b"])){
        $b= $_POST ["b"];
    }
    if(isset($_POST["c"])){
        $c= $_POST ["c"];
    
//Verificar se o campos está preenchido
        if (empty($_POST["a"]) || empty($_POST["b"]) || empty($_POST["c"])) {
            $alerta = "Preencha todos os campos corretamente";}

//Verificar se o campos é letra
        elseif (!is_numeric($a) || (!is_numeric($b)) || (!is_numeric($c))){
            $alerta2 = "Os campos devem ser preenchidos com números";}

//achar valor de delta
    else{
        $delta = ($b*$b)-((4*$a)*$c);}
        if($delta<0){
            $alerta3= "Delta não pode ser um número negativo";
        }else{
//achar valores de x1 e x2
            $x1= (($b*-1) + sqrt($delta))/2;
            $x2= (($b*-1) - sqrt($delta))/2; 
            $msg1= "O valor de X1 é " .$x1;
            $msg2= "O valor de X2 é " .$x2;

        }}}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da formula de bhaskara</title>

    <link rel="stylesheet" href="ListaExerc1_5.css">

</head>
<body>
<form action="ListaExerc1_1.php" method="post">

<!--Div para alertas de erro-->
<div class= "container-fluid msg"> 
    <img src="https://img.icons8.com/?size=512&id=EggHJUeUuU6C&format=png" alt="" class=icon>
<br> 
<?php echo $alerta?>
<br>
<?php echo $alerta2?>
</div>


<table>

        <tr>
            <td><label for="lb1" >Informe o valor de a: </td>
            <td><input type="text" name="a"> </td>
        </tr>
        <tr>
            <td><label for="lb2" >Informe o valor de b: </td>
            <td><input type="text" name="b"> </td>
        </tr>
        <tr>
            <td><label for="lb3" >Informe o valor de c: </td>
            <td><input type="text" name="c"> </td>
        </tr>



        <tr>
            <td colspan="2" class="mensagens"><?php echo $msg1; ?></td>
         </tr>
         <tr>
            <td colspan="2" class="mensagens"><?php echo $msg2; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="mensagens"><?php echo $alerta3; ?></td>
        </tr>
        </div>
   
        <tr>
            <td colspan="2" ><input type="submit" name="calcular" class="bt"> </td>
        </tr>

    </table>
</form>

    
</body>
</html>