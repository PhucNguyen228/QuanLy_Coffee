<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets_admin/">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Quản lý sản phẩm</title>
</head>

<body>
    <?php
    include '../connect.php';
    $id = $_GET['id'];
    $sql = "select * from khos where id = '$id'";
    $ket_qua = mysqli_query($ket_noi, $sql);
    $San_Pham_Nhap_khos = mysqli_fetch_array($ket_qua);
    ?>
    <div class="container">

        <!-- navigation left -->
        <div class="navigation">
            <ul>
                <li>
                    <a href="../index.php">
                        <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                        <span class="title">
                            <h2>Admin Cofe</h2>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="../PageQLNV/QuanLyNV.php">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">Quản lý nhân viên</span>
                    </a>
                </li>
                <li>
                    <a href="../PageDMSP/DanhMucSP.php">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title">Quản lý danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="../PageQLSP/QuanLySP.php">
                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span class="title">Quản lý sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="../pageQLBAN/QLBAN.php">
                        <span class="icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
                        <span class="title">Quản lý bàn</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                        <span class="title">Quản lý hoá đơn</span>
                    </a>
                </li>
                <li>
                    <a href="../PageQLKHO/QLKHO.php">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">Quản lý kho</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="main">

            <!-- top bar -->
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>
                <div class="user">
                    <img src="../img/user.jpg">
                </div>
            </div>

            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
            </div>

            <h3 style="margin: 13px 0px 0px 13px;">Quản Lý Nhập Kho</h3>
            <div class="row">
                
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="height: auto">
                            <h4 class="card-title">Nhập Kho Sản Phẩm</h4>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-header">
                                <h5>Chi Tiết Hóa Đơn Nhập Hàng</h5>
                                <span>Tổng tiền hàng: <span id="tongTien" class="text-danger font-weight-bold"></span></span>
                                <span>Tổng số sản phẩm: <span id="tongSanPham" class="text-danger font-weight-bold"></span></span>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered mb-0" id="tableBenPhai">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">#</th>
                                            <th class="text-center">Tên Sản Phẩm</th>
                                            <th class="text-center">Số Lượng</th>
                                            <th class="text-center">Đơn Giá</th>
                                            <th class="text-center">Thành Tiền</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form autocomplete="off" method="post" action="process_update.php" id="update_Khos">
                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                            <tr>
                                                <td><?php echo $San_Pham_Nhap_khos['id'] ?></td>
                                                <td>
                                                    <?php echo $San_Pham_Nhap_khos['ten_danh_muc']; ?>
                                                </td>
                                                <td>
                                                    <input name="so_luong" value="<?php echo $San_Pham_Nhap_khos['so_luong']; ?>">
                                                </td>
                                                <td>
                                                    <input name="don_gia" value="<?php echo $San_Pham_Nhap_khos['don_gia']; ?>">
                                                </td>
                                                <td>
                                                    <input name="thanh_tien" value="<?php echo $San_Pham_Nhap_khos['thanh_tien']; ?>">
                                                </td>
                                                <td class="test">
                                                    <a href="delete.php?id=<?php echo $San_Pham_Nhap_khos['id'] ?>"><button class="btn btn-danger delete mr-1" data-iddelete="'+ value.id +'" data-toggle="modal" datatarget="#deleteModal">Xoá</button></a>
                                                </td>
                                            </tr>
                                            <button class="mt-1 btn btn-primary" id="update_capnhat">Cập nhật</button>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <button id="creatNhapKho" class="m-1 btn btn-primary">Nhập Kho</button> -->
                    </div>
                </div>
            </div>

            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Xóa </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn muốn xóa? Điều này không thể hoàn tác.
                            <input type="text" class="form-control" placeholder="Nhập vào id cần xóa" id="idDelete" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="accpectDelete" class="btn btn-danger" data-dismiss="modal">Xóa </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../main.js"></script>
</body>

</html>