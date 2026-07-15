<?php
/*Uma fábrica deseja verificar se um funcionário atingiu sua meta semanal.
● armazene o nome do funcionário;
● armazene a quantidade produzida de segunda a sexta-feira;
● calcule o total produzido durante a semana;
● calcule a média diária de produção;
● a meta semanal, que será de 500 unidades;
● a diferença entre o total produzido e a meta.
Condição:
● Se o total produzido for maior ou igual a 500, exiba que a meta foi alcançada e calcule
um bônus de R$ 0,20 por unidade produzida acima da meta.
● Caso contrário, exiba que a meta não foi alcançada e informe quantas unidades
faltaram.
Exiba todos os resultados calculados.
*/

//Entradas - variáveis
$nomeFuncionario = "Talita";
$producaoSeg = 100;
$producaoTer = 100;
$producaoQua= 100;
$producaoQui= 100;
$producaoSex= 100;

$metaSemanal = 500;
$frase = "";

// -----------Processamento---------------

//calculo produção semanal
$totalProducaoSemana = $producaoSeg + $producaoTer + $producaoQua + $producaoQui + $producaoSex ;


//media de produção diária
$mediaSemanal = $totalProducaoSemana / 7;

// Diferença produção e meta 

$diferencaMetaEProducao = $totalProducaoSemana - 500;

// Bonus

$bonus = ;

if($totalProducaoSemana >= 500){
    $frase = "Meta Alcançada";
} else {
    $frase = "Meta NÃO Alcançada";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    
<h2> Calculo</h2>

<p> <?php echo ("Nome Funcionário" . $nomeFuncionario );?> </br></p>
<p> <?php echo ("Total unidades produzidas na semana" . $totalProducaoSemana );?> </br></p>
<p> <?php echo ("Total unidades produzidas na semana" . $totalProducaoSemana );?> </br></p>
<p> <?php echo ("Média diária de produção" . $mediaSemanal );?> </br></p>
<p> <?php echo ("Meta semanal de produção" . $metaSemanal );?> </br></p>
<p> <?php echo ("Diferença entre produção e meta" . $diferencaMetaEProducao );?> </br></p>
<p> <?php echo ("Bonus" . $bonus );?> </br></p>
<p> <?php echo ("Frase:" . $frase );?> </br></p>
</body>
</html>