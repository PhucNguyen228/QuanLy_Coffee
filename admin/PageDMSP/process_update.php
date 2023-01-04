<?php
include '../connect.php';
$id = $_POST['id'];
$ten_danh_muc = $_POST['ten_danh_muc'];
$slug_danh_muc = $_POST['slug_danh_muc'];
$id_danh_muc_cha = $_POST['id_danh_muc_cha'];
$is_open = $_POST['is_open'];
// echo $ma.$tieu_de.$noi_dung.$anh;
// có thể dùng require để dừng khi có lỗi 
// có thể thay thế include bằng require
// require_once chỉ chèn file 1 lần nếu file đó có tồn tại trong file code thì nó ko cần chèn thêm nữa
// nên dùng require_once

$truy_van = "update danh_muc_san_phams
set ten_danh_muc = '$ten_danh_muc', slug_danh_muc = '$slug_danh_muc', hinh_anh = '$hinh_anh', id_danh_muc_cha = '$id_danh_muc_cha', is_open = '$is_open'
where id = '$id'";

echo $truy_van;

mysqli_query($ket_noi,$truy_van);
header("Location: http://quan_ly_cafe.localhost/admin/PageDMSP/DanhMucSP.php");