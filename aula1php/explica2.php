<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "explica2.php" method= "get">
        
    Digite o primeiro numero <br/>
        <input type="text" name= "numero1" id= "" />
        <br/> <br/>

        <input type="text" name= "numero2" id= "" />
        <br/> <br/>

        <input type="submit" value="Calcular">

</form>


<?php
//entrada


// inicio de processamento

$n1 = $GET ["numero1"]
$n2 = $GET ["numero2"]

$auxsoma = $n1 + $n2;
$auxsub = $n1 - $n2;
$auxmulti = $n1 * $n2;
$auxdiv = $n1 / $n2;
$auxpotencia = $n1**2;
$auxpotencia2 = $n1**$n2;




// fim de processamento


echo "Primero numero digitado : ".$n1;
echo "<br/> Segundo numero digitido :".$n2;

echo "</br> A soma dos dois numeros digitados é :".$auxsoma
echo "</br> A subtração dos dois numeros digitados é :".$auxsub 
echo "</br> A  multiplicação dos dois numeros digitados é :".$auxmulti 
echo "</br> A divisão dos dois numeros digitados é :".$auxdiv
echo "</br> O primeiro numero elevado ao quadrado : ".$auxpotencia
echo "</br> O primeiro numero elevado ao segundo numero :".$auxpotencia2


//saida
?>


</body>
</html>