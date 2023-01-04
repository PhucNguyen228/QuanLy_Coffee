<?php

$id = $_GET['id'];

require '../connect.php';
// check id của từng sản phẩm
// echo $id; 
$sql = "delete from khos where id = '$id'";

// echo $sql;

mysqli_query($ket_noi ,$sql);

header("Location: http://quan_ly_cafe.localhost/admin/PageQLKHO/QLKHO.php");

