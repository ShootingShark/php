<?php 

$nome = "Matheus"; 
$nome2 = 'Teste Aspas'; 

$ano = 1900; 

$salario = 3400.30; 

$bloqueado = false;

$frutas = array("abacaxi","laranja","mamão");

echo  "Aluno:". $nome . " ". "Nascido no ano de "  ." " . $ano . " recebe:" . " " .$salario. " " ."reais". " ". 
"e gosta de comer : ". " " .$frutas[1] ;  


echo "<br/>";
$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo  = fopen("exemplo_3.php", "r");

var_dump($arquivo);

$nulo = null; // variável nula não existe nada

$vazio = "";  // variável vazia existe, ela foi iniciada e esta esperando dados a serem alocados
?>