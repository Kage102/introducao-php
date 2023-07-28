<?php
//exercicio 02

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
switch ($opcao == 1){
  case($opcao == 2){
	$resultado = "Legal, o que deseja saber?";
  break;
}
  case($opcao ==3){
    $resultado = "Puxa que pena...";
  break;
}
  case($opcao == 4){
    $resultado = "Bacana! Solta a voz";
  break;
  
  case($opcao == 5){
	  $resultado = "Vixi fiu esquece só amanha;"
  break;
  
  default:
  echo"desculpa, não entendi";
  break;

}


echo PHP_EOL;

//saida de dados
echo $resultado;
	
?>

