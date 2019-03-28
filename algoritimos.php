<?php include("cabecalho.php"); ?>

<h1>Formulário de Algorítimos</h1>
<form method="post">
    <table class="table">
        <tr>
            <td>Digite o Primeiro Valor:</td>
            <td><input class="form" name="X" /></td>
        </tr>
        <tr>
            <td>Digite o Segundo Valor:</td>
            <td><input class="form" name="Y" /></td>
        </tr>
        <tr>
            <td>Digite uma Palavra:</td>
            <td><input class="form" name="primeira-string" /></td>
        </tr>
        <tr>
            <td>Digite a segunda Palavra:</td>
            <td><input class="form"  name="segunda-string" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Calcular</button></td>
        </tr>
    </table>
</form>

<?php

//Recebimento
$X = 0;
if(isset($_POST['X'])){
    $X = $_POST['X'];
}

$Y = 0;
if(isset($_POST['Y'])){
    $Y = $_POST['Y'];
}

$primeiraString = "";
if(isset($_POST['primeira-string'])){
    $primeiraString = $_POST['primeira-string'];
}

$segundaString  = "";
if(isset($_POST['segunda-string'])){
    $segundaString = $_POST['segunda-string'];
}

//Operação
$Triangulo = $X * $Y / 2;

$Soma = $X + $Y;

if ($X % 2 == 0){
    $Par = "Par";
    $Impar = "";
} else {
    $Impar = "Impar";
    $Par = "";
}
		
//Primo
$div=0;
for ($cont = 1; $cont <= $X; $cont++) {
    if ($X % $cont == 0) { 
    $div++;
    }
}
  
if ($div == 2){
    $Primo = "Verdadeiro";
}else{
    $Primo = "Falso";
}

//Potencia
$Potencia = pow($X,$Y);

//Fatorial
$Fatorial = 1;
for ($cont=1; $cont<=$X; $cont++) {
    $Fatorial = $Fatorial * $cont;
}

// Cotação
$Real = $X * $Y;

// Círculo
$Cirulo = 3.14 * $X * 2;

// Milhas em Km
$KM = $X * 1.60934;

// Kg em Arroba
$Arroba = $X / 15;

// Cilindro
$Cilindro = ((2 * 3.14 * $X * $X) + (2 * 3.14 * $X * $Y));

// STRINGS
$palavraInvertida = strrev($primeiraString);

$concatenacao = $primeiraString . " " . $segundaString;

?>

<h1>Algoritimos</h1>
<table class="table table-striped">
    <tr>
        <td>Primeiro Valor:</td>
            <td><?= $X;?></td>
        </tr>
        <td>Segundo Valor:</td>
            <td><?= $Y; ?></td>
        </tr>
        <td>Primeira String:</td>
            <td><?= $primeiraString;?></td>
        </tr>
        <td>Segunda String:</td>
            <td><?= $segundaString;?></td>
        </tr>
        <td>Área de um Triângulo:</td>
            <td><?= $Triangulo; ?></td>
        </tr>
        <td>Área de um Círculo:</td>
            <td><?= $Cirulo; ?></td>
        </tr>
        <td>Área de um Cilindro:</td>
            <td><?= $Cilindro; ?></td>
        </tr>
        <td>Soma:</td>
            <td><?= $Soma; ?></td>
        </tr>
        <td>Par Ou Impar:</td>
            <td><?= $Par, $Impar; ?></td>
        </tr>
        <td>Potencia:</td>
            <td><?= $Potencia; ?></td>
        </tr>
        <td>Fatorial:</td>
            <td><?= $Fatorial; ?></td>
        </tr>
        <td>Cotação:</td>
            <td><?= $Real; ?></td>
        </tr>
        <td>Número Primo:</td>
            <td><?= $Primo; ?></td>
        </tr>
        <td>Milhas em Km:</td>
            <td><?= $KM; ?></td>
        </tr>
        <td>Kg Em Arroba:</td>
            <td><?= $Arroba; ?></td>
        </tr>
        <td>Palavra Inversa:</td>
            <td><?= $palavraInvertida; ?></td>
        </tr>
        <td>Palavras Concatenadas:</td>
            <td><?= $concatenacao; ?></td>
        </tr>
    </tr>
</table>

<?php
//Tabuada
echo "Tabuada: ";
for($cont = 1; $cont <= 10; $cont++):
    $res = $cont * $X; 
    echo $res . " ";   
endfor;
?>

<?php include("rodape.php"); ?>