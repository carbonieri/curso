- <br>
-- <br>
--- <br>
---- <br> 
----- <br>

fazer tabuada;
variavel = 4

tabuada do 2
1 x 4 = 2
2 x 4 = 4
...

<?php
$traco = '-';
$idade = 18;

if($idade >= 18){
   echo 'maior de idade <br>' ;
} else{
   echo 'menor de idade <br>';
}

$condicao = ($idade >= 18)? 'maior de idade' : 'menor de idade';
echo $condicao . '<br> <hr>';

$carro = 'rosa';
switch ($carro) {
   case 'azul':
      echo 'meu carro é azul <br>';
      break;
   case 'rosa':
      echo 'meu carro é rosa <br>';
      break;
}
echo '<hr>';

$n1 = 0;

while ($n1 < 5){
   echo 'faça isso <br>';
   //$n1 = $n1 + 1;
   //$n1 += $n1;
   $n1++;
}


for ($x = 0; $x < 5; $x++){
   echo '-';
   echo '<br>';
}


echo '<hr>';


$a = 0;
while ($a < 5){
   for ($i=0; $i < 5 ; $i++) { 
      echo '-';
   }
   echo '<br>';
   $a++;
}

for ($i=0; $i < 5 ; $i++) { 
   for ($s=0; $s < 5 ; $s++) { 
      echo '-';
   }
   echo '<br>';
}

echo '-';

function somar ($n1, $n2){
   $total = $n1 * $n2;
   return;
}


?>

<hr>
<hr>

<table>
   <?php
      for ($i=0; $i < 5; $i++) { 
         echo '<tr>';
         for ($a=0; $a < 5; $a++) { 
            echo '<td>' . $traco  .  '</td>';
         }
         echo '<tr>';
      }
   ?>
</table>
