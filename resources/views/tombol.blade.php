<?php
    //koneksi ke database
    $konek = mysqli_connect ("localhost","root","","wallpa11_homecontroller");

    //tangkap parameter stat yang dikirim dari ajax
    $stat = $_GET ['stat'];

    if($stat == "ON"){
        mysqli_query($konek, "UPDATE tb_kontrol SET relay=1");
        //berikan respon
        echo "ON";
    }else{
        mysqli_query($konek, "UPDATE tb_kontrol SET relay=0");
        //berikan respon
        echo "OFF";
    }

?>