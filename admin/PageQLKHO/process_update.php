<?php
include '../connect.php';
$id = $_POST['id'];
$so_luong =  $_POST['so_luong'];
$don_gia =  $_POST['don_gia'];
$thanh_tien =  $_POST['thanh_tien'];

// echo $ma.$tieu_de.$noi_dung.$anh;
// có thể dùng require để dừng khi có lỗi 
// có thể thay thế include bằng require
// require_once chỉ chèn file 1 lần nếu file đó có tồn tại trong file code thì nó ko cần chèn thêm nữa
// nên dùng require_once

$truy_van = "update khos
set so_luong = '$so_luong', don_gia = '$don_gia', thanh_tien = $so_luong * $don_gia
where id = '$id'";

echo $truy_van;

mysqli_query($ket_noi,$truy_van);
header("Location: http://quan_ly_cafe.localhost/admin/PageQLKHO/QLKHO.php");