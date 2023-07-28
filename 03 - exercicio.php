<?PHP
//Exercicio 03

echo PHP_EOL;


$produto = readline("Digite o nome do produto: ");
echo PHP_EOL;

$preco = readline("Preço do produto: ");

if(($preco >= 1000 && $preco <= 1500)){
	$preco = "O preco: ".$preco." Terá desconto 10%";
} else{
	$preco = "O preco: ".$preco." Terá desconto 5%";
}

echo PHP_EOL;

echo $preco;
?>