<?php
function im_par($i){
    echo "a multiplicaçao de $i <br>";
            for ($j = 1; $j <= 10; $j++) {
                $resultado = $i * $j;
                echo "$i x $j = $resultado <br>";
            }
}
       echo im_par(4);
?>