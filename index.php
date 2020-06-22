<?php
include('crypt/TripleDES.php');
$des = new Crypt_TripleDES();
//Set the Key 
$des->setKey('abcdefghijklmnopqrstuvwx');
//Normal Text
echo "<h2>Triple DES algorithm example in PHP By clever geeks</h2>";
$plain="Clever Geeks";
echo "<br><b>Plain Text:- </b>".$plain."<br>";
$enc= $des->encrypt($plain);
echo "<b>Encrypted Text:- </b>".$enc."<br>";
$dec=$des->decrypt($enc);
echo "<b>Decrypted Text:- </b>".$dec."<br>";
?>