<?php

$ma_ban = $_POST['ma_ban'];
$is_open = $_POST['is_open'];
include '../connect.php';
// die($ket_noi);

// câu lệnh giúp mã hoá lại tiếng việt tốt hơn
mysqli_set_charset($ket_noi, 'utf8');
$sql = "insert into bans(ma_ban, is_open) 
                    value('$ma_ban', '$is_open')";
// die có nghĩa là echo để in ra câu chuỗi, và có tác dụng dừng ngay tại dòng khi đặt câu lệnh die
// die($sql);`

mysqli_query($ket_noi, $sql);

// dùng cầu lệnh đống sql
// mysqli_close($ket_noi);
header("Location: http://quan_ly_cafe.localhost/admin/pageQLBAN/QLBAN.php");
