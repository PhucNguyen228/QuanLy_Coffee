<?php
include '../connect.php';
$id = $_POST['id'];
$ten_san_pham =  $_POST['ten_san_pham'];
$slug_san_pham =  $_POST['slug_san_pham'];
$gia_ban =  $_POST['gia_ban'];
$gia_khuyen_mai =  $_POST['gia_khuyen_mai'];
$anh_dai_dien =  $_POST['anh_dai_dien'];
$mo_ta_ngan =  $_POST['mo_ta_ngan'];
$mo_ta_chi_tiet =  $_POST['mo_ta_chi_tiet'];
$id_danh_muc = $_POST['id_danh_muc'];
$is_open = $_POST['is_open'];
// echo $ma.$tieu_de.$noi_dung.$anh;
// có thể dùng require để dừng khi có lỗi 
// có thể thay thế include bằng require
// require_once chỉ chèn file 1 lần nếu file đó có tồn tại trong file code thì nó ko cần chèn thêm nữa
// nên dùng require_once

$truy_van = "update san_phams
set ten_san_pham = '$ten_san_pham', slug_san_pham = '$slug_san_pham', 
gia_ban = '$gia_ban', gia_khuyen_mai = '$gia_khuyen_mai', anh_dai_dien = '$anh_dai_dien' , 
mo_ta_ngan = '$mo_ta_ngan', mo_ta_chi_tiet = '$mo_ta_chi_tiet', id_danh_muc = '$id_danh_muc', is_open = '$is_open'
where id = '$id'";

echo $truy_van;

mysqli_query($ket_noi,$truy_van);
header("Location: http://quan_ly_cafe.localhost/admin/PageQLSP/QuanLySP.php");