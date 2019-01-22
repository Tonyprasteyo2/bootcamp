<?php
$re=file_get_contents("http://localhost/bot/json/data.json");
$a=json_decode($re);
echo"nama :".$a->nama."<br>";
echo"alamat :".$a->alamat."<br>";
echo"hobi :".$a->hobi."<br>";
echo"status :".$a->status."<br>";
echo"sekolah :".$a->sekolah."<br>";
echo"skils :".$a->skils."<br>";
?>