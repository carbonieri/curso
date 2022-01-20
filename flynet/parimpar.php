<?php include 'header.html'; ?>

<h1>Par ou impar?</h1>

<form action="parimpar.php" method='get'>

<label for="numero"></label>
<input type="number" name="numero"></input>

<button>Send</button>

</form>
<?php

$number = $_GET['numero']/2;
if (is_float($number)) {
    echo "IMPAR";
}else{
    echo "PAR";
}

?>




<?php include 'footer.html'; ?>