<?php
function tukar_besar_kecil($string){
    $teks = $string;
    for($i = 0; $i < strlen($teks); $i++){
        if(ctype_upper($teks[$i])){
            echo strtolower($teks[$i]);
        }else if(ctype_lower($teks[$i])){
            echo strtoupper($teks[$i]);
        }else{
            echo " ";
        }
    }
    echo "<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>