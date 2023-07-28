<?php
// 03 arrays
/*Objetivos: como declarar, atribuir e acessar dados de vetores*/

//Declaração do array (OPCIONAL)
//Inicialmente vazio
$pessoas = []; //ou $pessoas = array{}

//Processos de atribuição de dados
$pessoas[0] = readline("Primeiro artista: ");
$pessoas[1] = readline("segundo artista: ");
$pessoas[2] = readline("terceiro artista: ");

//Saída
echo "\nPrimeira pessoa: ".$pessoas[0];
echo "\nSegunda pessoa: ".$pessoas[1];
echo "\nterceira pessoa: ".$pessoas[2];
/* Lembrete: use n\ (dentro da string para criar "quebras de linha".*/

?>