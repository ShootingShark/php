<?php 

$nome = "Matheus";
$idade = "21";

$comidaPreferida =array("pizza","lasanha","hot-dog","macarrão");

$profissao =array("pedreiro", "carpinteiro", "programador", "policial");


echo "O individuo:". " " . $nome . " " . "com a idade de :". " " . $idade . " " . "trabalha como:". " " . $profissao[2]. " " .
"e gosta de comer ". " " . $comidaPreferida[0];


//var_dump($comidaPreferida);


$nome = (int)$_GET["a"];

echo "<br/>";
echo $nome;

$ip = $_SERVER["REMOTE_ADDR"];

echo "<br/>";
echo $ip;

$ip2 = $_SERVER["SCRIPT_NAME"];

echo "<br/>";
echo $ip2;
?>