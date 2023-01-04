<?php

$id = $_GET['id'];
// $id_danh_muc = $_POST['id'];
// $ten_danh_muc = $_POST['ten_danh_muc'];
$so_luong = 1;
$don_gia = 0;
$thanh_tien = 0;
$kiem_tra = 0;
include '../connect.php';
// die($ket_noi);

// câu lệnh giúp mã hoá lại tiếng việt tốt hơn
mysqli_set_charset($ket_noi, 'utf8');
//$sql = "insert into khos (so_luong, don_gia, thanh_tien, kiem_tra) 
//                     value('$so_luong', '$don_gia', '$thanh_tien', '$kiem_tra')
//                     from danh_muc_san_phams
//                     where id = '$id'";
// INSERT INTO khos (so_luong, don_gia, thanh_tien, kiem_tra) 
//         VALUES ('$so_luong', '$don_gia', '$thanh_tien', '$kiem_tra')
//         UNION

$sql_get2elment = "select id, ten_danh_muc from danh_muc_san_phams order by id, ten_danh_muc desc limit 1";
$kq = mysqli_query($ket_noi, $sql_get2elment);
$row = mysqli_fetch_array($kq);
$id_danh_muc = $row['id'];
$ten_danh_muc = $row['ten_danh_muc'];

$sql = "insert into khos (id_danh_muc,ten_danh_muc ,so_luong, don_gia, thanh_tien, kiem_tra) 
                     value('$id_danh_muc','$ten_danh_muc','$so_luong', '$don_gia', '$thanh_tien', '$kiem_tra')";
echo $sql;
mysqli_query($ket_noi, $sql);
// die có nghĩa là echo để in ra câu chuỗi, và có tác dụng dừng ngay tại dòng khi đặt câu lệnh die
// die($sql);

// dùng cầu lệnh đống sql
// mysqli_close($ket_noi);
// header("Location: http://quan_ly_cafe.localhost/admin/PageQLKHO/QLKHO.php");
