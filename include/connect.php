<?php
$host = "localhost";
$user= "root";
$pass ="";
$db="perkasa3";
$con=mysql_connect("$host","$user","$pass") or die ("<script>alert('Gagal Koneksi ke Server');history.go(-1);</script>");
mysql_select_db("perkasa3") or die ("<script>alert('Gagal Koneksi ke Database');history.go(-1);</script>");
?>