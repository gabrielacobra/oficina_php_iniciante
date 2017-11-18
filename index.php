<!DOCTYPE html> <!--Definição do documento em html-->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php

               //$cor="amarelo"; //cifrão define a variável
//             $cor="vermelho"; //atribui o valor do vermelho na mesma variável e subscreve o valor
//             echo $cor;            
      
              //var_dump("Hello World"); //o var dump mostra qual é o tipo de variável, quando é string ele mostra a qtdade de caracteres
              //var_dump(23.55);
              //var_dump(array("maçã",32.50,52)); //mostra o tipo de variável e a qtdade de caracteres
              //var_dump($cor);
      
//               $nome="Ana";
//               $sobrenome="Lima"
//               echo "Olá, " . $nome $sobrenome . "!"; //para a concatenação, utilizamos o ponto final    
      
//                 $a=3;
//                 $b=5;               
//                 $resultado = $a + $b;
//                 $resultado = $a - $b;
//                 $resultado = $a * $b;
//                 $resultado = $a / $b;
//                 $resultado = $a % $b;
//                 echo $resultado;
      
//       $a = 2;
//       $b = 6;
//       if ($a > $b) {
//       echo "A variável A é maior que B.";  
//       } else if ($a == $b) {
//         echo "A variável A é igual a B";
//       } else{
//         echo "A variável B é menor que B";
//       }
      
//       $i = 1;
//       while($i<10){
//         $i = $i + 1;
//         echo $i . "<br>";
//       }
  
      
//       $i = 1;
      
//       while($i < 10){
//         $i = $i + 1;
//         if($i % 2 == 0){
//         echo "O valor " . $i . " é par. <br>";
//         }else{
//             echo "O valor " . $i . " é ímpar. <br>";
//           }        
//       }
      
      /*for($i = 1; $i <10; $i++){
        echo "O valor de i é $i <br>";
      }*/
      
//       $nome = "Gabriela";
      
//       switch($nome){
//         case "Ana":
//           echo "Olá, Ana!";
//           break;
          
//         case "Pedro":
//           echo "Olá, Pedro!";
//           break;
        
//         default:
//           echo "Você não se chama Ana nem Pedro!";
//       }

      
//           function soma ($a,$b){
//             $resultado = $a + $b;
//             return $resultado;
//           }  
      
//       $x = 23;
//       $y = 20;
      
//       $resultadofuncao = soma($x, $y);
//       echo $resultadofuncao; 
      
//       function somar ($a, $b){
//         $result = $a + $b;
//         return $result;
//       }
      
//       $num1 = 1;
//       $num2 = 2;
      
//       $resultadofinal = somar($num1, $num2);
//       echo $resultadofinal;
      
//       $cores = ["azul","vermelho","amarelo"];
//       echo $cores[2];
      
//       $pessoa = ["nome" => "Ana", "idade" => 23 ];
//       echo $pessoa ["nome"];
      
//       $numeros = [1,2,3];
//       array_push ($numeros, 4);
//       echo $numeros[3];
      
//       $frutas = ["maçã", "laranja", "morango"];
//       foreach($frutas as $fruta){
//       echo "A fruta é $fruta <br>";
//       }
      
      $comidas = ["batata reacheada", "suflê de cenoura", "pizza de tomate seco"];
      foreach($comidas as $rango){
        echo "$rango <br>";
      }
      
      array_push($comidas, "sopa de cebola");
      
      foreach($comidas as $rango){
        echo "$rango <br>";
      }        
    //  echo $comidas[3] . "<br>";                
      array_pop($comidas);
          
        foreach($comidas as $rango){
          echo "$rango <br>";
        }                 
     
        ?>   
      
    </body>
</html>