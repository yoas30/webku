<?php

$konek = mysqli_connect ("localhost","root","","wallpa11_homecontroller");

$sql = mysqli_query($konek, "SELECT * FROM tb_kontrol");
$data = mysqli_fetch_array($sql);
//ambil status relay
$relay = $data['relay'];

echo $relay;

?>