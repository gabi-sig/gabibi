<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $nome = "Nome: Gabriela <br>";
        $nome2 = "Sobrenome: Zanchet<br>";
        echo "Olá Mundo!<br>".$nome.$nome2;

        $idade = 15;
        echo "Idade:".$idade;
        if($idade < 18){
            echo "<br>Menor de idade";
        }
        else{
            echo "<br>Maior de idade";
        }

        $pessoas = [
            "Ana","Chaves","Kiko"
        ];

        for($i = 0; $i < count(value: $pessoas); $i++){
            echo $pessoas[$i];
        }

        $idades = [15,16,18];

        foreach($idades as $item){
            echo $item . "<br>";
        }
        
        $num1 = 5;
        $num1 = 6;
        $opcao = 1;

        switch ($opcao) {
            case 1:
                echo "Soma: ". $num1+$num2;
                break;
            case 2:
                echo "Subtração: ". $num1-$num2;
                break;
            default:
                echo"opção invalida";

        }
  
  
    ?>
</body>
</html>
