<?php
//04-condicional

/*Prototipo de chatbot*/
echo "\n==Chatbot da empresa Biribinha ==\n";
echo "Opções válidas: \n\n";
echo "1- Informação\n";
echo "2- Reclamação\n";
echo "3- Elogios\n";
echo "4- Status\n";

echo PHP_EOL;
$opcao = readline("Digite uma opção");

//Condicional encadeada
if($opcao == 1){
	$resultado = "Legal, o que deseja saber?";
} elseif($opcao == 2){
	$resultado = "Puxa que pena...";
}elseif($opcao == 3){
	$resultado = "Bacana! Solta a voz";
}elseif($opcao == 4){
	$resultado = "Tendeu, deixa eu ver";
}elseif($opcao == 5){
	$resultado = "Vixi fiu esquece só amanha;"
}

echo PHP_EOL;

//saida de dados
echo $resultado;
	
?>

