<?php

$ten_danh_muc = $_POST['ten_danh_muc'];
$slug_danh_muc = $_POST['slug_danh_muc'];
$id_danh_muc_cha = $_POST['id_danh_muc_cha'];
$trag_thai = $_POST['is_open'];
include '../connect.php';
// $ket_noi = new mysqli('localhost', 'root', '', 'j2school');

// die($ket_noi);

// câu lệnh giúp mã hoá lại tiếng việt tốt hơn
// echo '<a href="../PageDMSP/DanhMucSP.php">'.'về lại trang chủ'.'</a> </br>';
mysqli_set_charset($ket_noi, 'utf8');
$sql = "insert into danh_muc_san_phams(ten_danh_muc, slug_danh_muc, hinh_anh, id_danh_muc_cha, is_open) value('$ten_danh_muc', '$slug_danh_muc', '$hinh_anh','$id_danh_muc_cha', '$trag_thai')";
// $trang_thai = "select * from danh_muc_san_phams where"
// die có nghĩa là echo để in ra câu chuỗi, và có tác dụng dừng ngay tại dòng khi đặt câu lệnh die
// die($sql);

mysqli_query($ket_noi, $sql);

// dùng cầu lệnh đống sql
// mysqli_close($ket_noi);
header("Location: http://quan_ly_cafe.localhost/admin/PageDMSP/DanhMucSP.php");
