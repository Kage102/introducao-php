<?PHP

$uc = readline ("Informe a uc/curso:");
$carga_horaria = readline("Qual a carga horária do curso: ");


//processamento
$limite_de_faltas = $carga_horaria /4;

echo"Para este uc/curso: ".$uc," com a carga horária de: ".$carga_horaria \n\n;
echo" tem o limite de: ".$limite_de_faltas," horas"; 
?>