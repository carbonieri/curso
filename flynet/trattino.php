<?php include 'header.html';?>


<h1>Traços</h1>
Solucao 1:
<?php
echo '<br>';

echo '-';
echo '<br>';echo '-';echo '-';
echo '<br>';echo '-';echo '-';echo '-';
echo '<br>';echo '-';echo '-';echo '-';echo '-';
echo '<br>';echo '-';echo '-';echo '-';echo '-';echo '-';
echo '<hr>';
?>

Solucao 2:
<?php
//echo '-';


$a = 0; //to define that the counting starts from zero.


//echo $start=0;
$end = 1;
echo '<br>';

        
                     for ($i=0; $i<=$end; $i++) { 
                           echo $i;
                           if ($i <5){
                           $end = $end +1;
                           }else{echo 'fine';}
                     }



?>
<?php include 'footer.html';?>