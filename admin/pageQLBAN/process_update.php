<?php
include '../connect.php';
$id = $_POST['id'];
$ma_ban =  $_POST['ma_ban'];
$is_open =  $_POST['is_open'];

// echo $ma.$tieu_de.$noi_dung.$anh;
// có thể dùng require để dừng khi có lỗi 
// có thể thay thế include bằng require
// require_once chỉ chèn file 1 lần nếu file đó có tồn tại trong file code thì nó ko cần chèn thêm nữa
// nên dùng require_once

$truy_van = "update bans
set ma_ban = '$ma_ban', is_open = '$is_open'
where id = '$id'";

// die ($truy_van);

mysqli_query($ket_noi,$truy_van);
header("Location: http://quan_ly_cafe.localhost/admin/pageQLBAN/QLBAN.php");