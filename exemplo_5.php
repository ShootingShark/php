<?php 

$nome = "Matheus";

function teste() // funcão, tem a mesma ideia de um método, porém nao se utiliza modificadores, como public, private ou protected 
{

global $nome; //possibilita a instancia da variável, fora do escopo, simulando uma instância de objeto, classeTeste a = new ClasseTeste();
echo $nome; 

}


function teste2()
{

$nome = "Jennifer";

echo "</br>";
echo $nome; 
}

teste();

teste2(); 
?>