<?php
$dataProduk = array(

    //nama produk, merk, harga, status stok
    array("Galaxy S21", "Samsung", 19000000, true),

    array("Galaxy A71", "Samsung", 6999000, false),

    array("iPhone 12 Pro Max", "Apple", 20999000, true),

    array("iPhone 12 Mini", "Apple", 10999000, false),

);
    $n = count($dataProduk);

    for ($i=0; $i < $n; $i++){
        foreach ($dataProduk[$i] as $key => $value){
            if ($value != 3){
                echo "<br>".$value;
            }
            if ($value === true){
                echo ("<br>stok tersedia");
        } elseif ($value === false){
            echo ("stok habis<br>");
    }
}
    echo "<br>";
    }

?>