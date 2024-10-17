<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>results</title>
</head>
<body>

<?php

$nome =$_POST["nome"];
echo "Nome: " . $nome . "<br>";

$sobrenome =$_POST["sobrenome"];
echo "Sobrenome: " . $sobrenome . "<br>";

$eh_aluno =$_POST["eh_aluno"];
if ($eh_aluno ==1){
    echo "É aluno de informática: Sim <br>";
}else{
    echo "É aluno de informática: Não <br>";
}

$idade =$_POST["idade"];
if ($idade == 1 ){
    echo "Idade: Menos de 18 anos <br>";
}elseif ($idade == 2){
    echo "Idade: Entre 18 e 30 anos <br>";
}elseif ($idade == 3){
    echo "Idade: Entre 31 e 50 anos <br>";
}else{
    echo "Idade: Mais de 50 anos <br>";
}

$localidade =$_POST["localidade"];
{
    if ($localidade == "Chaves"){
        echo "Localidade: Chaves <br>";
    }elseif ($localidade == "Bragança"){
        echo "Localidade: Bragança <br>";
    }else{
        echo "Localidade: Mirandela <br>";

    }
}

$sugestoes =$_POST["sugestoes"];
echo "Sugestões: " . $sugestoes . "<br>";

?>

</body>
</html>