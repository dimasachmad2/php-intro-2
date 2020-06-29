<?php

function papan_catur($angka) {
    for($i = 0; $i < $angka;$i++){
        if($i%2 == 0){
            for($a = 0; $a < $angka; $a++){
                echo " #";
            }
        }else if($i%2 == 1){
            for($a = 1; $a < $angka; $a++){
                echo "&nbsp#";
            }
        }
        echo "<br>";
    }
    echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

?>