<?php
include 'Database.php';

// Create object / instance
$db = new Database();
$con=$db->Connect();


$id = $_POST['id'];
$nama = $_POST['nama'];
$isi = $_POST['isi'];
$tgl = $_POST['tgl'];

mysqli_query($con,"insert into table_chat values('$id','$nama','$isi','$tgl')");

?>