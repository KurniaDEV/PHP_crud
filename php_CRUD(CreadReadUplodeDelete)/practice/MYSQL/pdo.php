<?php
$db=new PDO("mysql:dbname=kelas;host=localhost","root","");// memunculkan koneksi yang berOutPut object#

var_dump($db);
$simpan=$db->query("insert into kelas values('','IPA','SMA')");// memasukan input sql dan menyambungkan sql ke php dan mengOUTPUTnya#
// var_dump($simpan);

$tampil=$db->query("select * from kelas");

// $tampil_data=$tampil->fetch();// fetch-- untuk menangkap database (jika hanya fetch maka hanya menampulkan default)#
$tampil_data=$tampil->fetchAll();// memangil semua dalam database kelas //bisa ditamppakan pdo didalam ()#
$tampil_data=$tampil->fetchAll(PDO::FETCH_OBJ);
echo $tampil_data['kelas'];
// var_dump($tampil_data);

?>