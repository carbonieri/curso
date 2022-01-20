<?php



require ('connect.php');




//Quando usar servidor, usar este codigo para saber em qual pasta estara indo o upload temporario.
echo '<pre>';
print_r($_FILES);
/* Mostra o resultado */


$tipospermitidos = ['image/jpeg', 'image/png', 'image/jpg'];


//Identificazione della stensione del file
//Counting the number of characters
echo strlen($_FILES['arquivo']['name']);
echo '<br>';

//Obtaining the last 4 characters.
$extensioncorrect = substr($_FILES['arquivo']['name'], strlen($_FILES['arquivo']['name']) - 4 , 4); //Neagativos nao precisam do segundo valor 4.
echo $extensioncorrect;
echo '<br>';

//Checking if the result starts with a '.' (period) what is the right result
if(substr($extensioncorrect,0,1) == '.'){
    echo "The file extension $extensioncorrect is correct: ";
}else{
//In this case the '.' (period) must be added and the same variable name can be used.
    $extensioncorrect = ".$extensioncorrect";
    echo "The file was treated and its extension is now $extensioncorrect: ";
}

//Leandro: identifiicacao da array e if+else
//Leandro: Upload de JPEG que muda para JPG automaticamente (?)

//If the file is the type expected
if(in_array($_FILES['arquivo']['type'], $tipospermitidos )){

//The file is codified. Usando o md5 e rand vai fazer que dois arquivos iguais nao sejam uploadeda. SHA1 si usa come md5*/
   $nome = sha1 (time()).rand(0,1000).'.' . substr($_FILES['arquivo']['name'], strlen($_FILES['arquivo']['name']) - 4 , 4);
/* Manda o arquivo no server */
   move_uploaded_file($_FILES ['arquivo']['tmp_name'], '../arquivos/'.$nome);
   echo 'salvo com sucesso';
}else{//Leandro colocou o elseif a assim tratar o -4
   echo 'arquivo não compativel';
}



/*Example about how to use arrays.
$array = [1,2,3,4];
echo $array [2]; */