<?php include 'header.html'; ?>

<h1>Taboada</h1>

<!-- Form for the selection of number -->
<form action="taboada.php" method="get">
    <label>Insert the desired multiplier: </label>

        <input type="text" name="numero"></input>

    <button>Send</button>         
</form>

<br>
<br>

<?php

//NULL variable correction
if ($_GET["numero"]== NULL){
    $number = 0;
}else{
    $number = $_GET["numero"];
}

//Show the selected number
echo "Number selected: ".$number;
echo '<br><br>';

//Show results
for ($i=0; $i <=10; $i++){
    echo "$i x $number = ". $number * $i;
echo '<br>';
}
?>

<?php include 'footer.html';


