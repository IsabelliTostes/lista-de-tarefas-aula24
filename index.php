<?php


echo date ('Y-m-d H:i:s') . "<br/>";
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i');


echo date('d');
echo date('D');

date_default_timezone_set('Asia/Tokyo');
echo date('d/m/Y H:i');


$nomes=['nomeum', 'nomedois', 'nometres'];
echo $nomes[1];



$palavras = array("maçã", "banana", "laranja", "uva", "manga", "abacaxi", "pêssego",
"kiwi","morango", "melancia");
echo $palavras[5];

$usuarioHiago= [ 
"nome" => "Hiago Silva", 
"email" => "hiagolindo@gmail.com", 
"idade" => 15, "cidade" => "São Paulo" 
];
print_r ($usuarioHiago);

?>