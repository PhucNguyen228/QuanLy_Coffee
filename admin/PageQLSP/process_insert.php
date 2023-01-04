<?php

$ten_san_pham =  $_POST['ten_san_pham'];
$slug_san_pham =  $_POST['slug_san_pham'];
$gia_ban =  $_POST['gia_ban'];
$gia_khuyen_mai =  $_POST['gia_khuyen_mai'];
$anh_dai_dien =  $_POST['anh_dai_dien'];
$mo_ta_ngan =  $_POST['mo_ta_ngan'];
$mo_ta_chi_tiet =  $_POST['mo_ta_chi_tiet'];
$id_danh_muc = $_POST['id_danh_muc'];
$trag_thai = $_POST['is_open'];

include '../connect.php';
// $ket_noi = new mysqli('localhost', 'root', '', 'j2school');

// die($ket_noi);

// câu lệnh giúp mã hoá lại tiếng việt tốt hơn
// echo '<a href="../PageDMSP/DanhMucSP.php">'.'về lại trang chủ'.'</a> </br>';
mysqli_set_charset($ket_noi, 'utf8');
$sql = "insert into san_phams(ten_san_pham, slug_san_pham, gia_ban, gia_khuyen_mai, anh_dai_dien, id_danh_muc, is_open) 
                        value('$ten_san_pham', '$slug_san_pham', '$gia_ban', '$gia_khuyen_mai', '$anh_dai_dien', '$id_danh_muc', '$trag_thai')";
// $trang_thai = "select * from danh_muc_san_phams where"
// die có nghĩa là echo để in ra câu chuỗi, và có tác dụng dừng ngay tại dòng khi đặt câu lệnh die
// die($sql);

mysqli_query($ket_noi, $sql);

// dùng cầu lệnh đống sql
// mysqli_close($ket_noi);
header("Location: http://quan_ly_cafe.localhost/admin/PageQLSP/QuanLySP.php");
