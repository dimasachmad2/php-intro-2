<?php

/*
1. buat function dengan nama hitung dengan paramater $string)data
2. pecah nilai variabel menjadi 3 bagian dengan menggunakan explode() 
3. buat variabel dengan tipe data integer dan masukan setiap pecahan nilainya
4. gunakan ifelse untuk mengecek bagian operatornya 
5. lalu return nilai yang dihasilkan dari variable yang sudah dibuat
*/

function hitung($string_data){
    $pecah = explode(" ",$string_data);
    $satu = (int)$pecah[0];
    $operator = $pecah[1];
    $dua = (int)$pecah[2];
    $jumlah = 0;
    if($operator == "+"){
        $jumlah = $satu+$dua;
    }else if($operator == "*"){
        $jumlah = $satu*$dua;
    } else if($operator == ":"){
        $jumlah = $satu/$dua;
    } else if($operator == "%"){
        $jumlah = $satu%$dua;
    } else if($operator == "-"){
        $jumlah = $satu-$dua;
    }
    echo $string_data." = ".$jumlah;
    echo "<br>";
    echo "<br>";
    echo "tampil";
}

//
echo hitung("102 * 2"); //204
echo hitung("2 + 3"); //5
echo hitung("100 : 25"); //4
echo hitung("10 % 2"); //5
echo hitung("99 - 2"); //97
?>