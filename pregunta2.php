
<form method="post" >
	<input type="text" name="numP" placeholder="Ingrese numero"><br>
	<input type="submit" name="submit" value="verificar"><br>
</form>

<?php

function primo($num){
    $cont = 0;
    for($i = 1; $i <= $num; $i++){
    if($num % $i == 0){
    //echo «$i <br>»;
    $cont++;
    }
    }
    
    if($cont==2){
    return true;
    }
    else{
    return false;
    }
}

$num1 = $_POST["numP"];
$resp = primo($num1);
if ($resp == true) {
echo $num1." Es primo";
}
else {
echo $num1." No es primo";
}

?>