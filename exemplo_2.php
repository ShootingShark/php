<?php 


$nome1 = "Matheus";

$sobrenome= "Silvino";

$nomeCompleto = $nome1 . " " . $sobrenome;

//echo $nomeCompleto; 


//exit;

echo $nome1 . " " . $sobrenome; 



echo "<br/>"; 


if(isset($nome1) && isset($sobrenome))
{
echo $nomeCompleto;
}


?> 