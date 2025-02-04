<?php
function sum ($N_1 , $N_2){
    if ($N_1 > $N_2){
        return $N_1
    }
    elseif($N_1 == $N_2){
        return -1
    }
    else{
        return $N_2
    }

}
$Sum = sum(8,9)
echo ($Sum)



?>