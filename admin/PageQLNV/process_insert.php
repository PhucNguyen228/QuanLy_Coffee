<?php
$ho_va_ten = $_POST['ho_va_ten'];
$so_dien_thoai = $_POST['so_dien_thoai'];
$email = $_POST['email'];
$pw = $_POST['password'];
$password = password_hash($pw, PASSWORD_BCRYPT);
$dia_chi = $_POST['dia_chi'];
$thanh_pho = 'Đà Nẵng';

include '../connect.php';
// die($ket_noi);

// câu lệnh giúp mã hoá lại tiếng việt tốt hơn
mysqli_set_charset($ket_noi, 'utf8');
$sql = "insert into agents(ho_va_ten, so_dien_thoai, email, password, dia_chi, thanh_pho) 
                    value('$ho_va_ten', '$so_dien_thoai', '$email', '$password', '$dia_chi', '$thanh_pho')";
// die có nghĩa là echo để in ra câu chuỗi, và có tác dụng dừng ngay tại dòng khi đặt câu lệnh die
// echo($sql);
mysqli_query($ket_noi, $sql);


// dùng cầu lệnh đống sql
// mysqli_close($ket_noi);
header("Location: http://quan_ly_cafe.localhost/admin/PageQLNV/FormDKNV.php");
