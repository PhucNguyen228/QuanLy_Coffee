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
    <title>Quản lý bàn</title>
</head>

<body>
    <?php
    include '../connect.php';
    $sql = "select * from danh_muc_san_phams";
    $ket_qua = mysqli_query($ket_noi, $sql);
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
                    <a href="./QLHD.php">
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

            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>

                <div class="user">
                    <img src="../img/user.jpg">
                </div>
            </div>

            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
            </div>
            <div style="text-align: center">
                <b> Quản Lý Hóa Đơn </b>
                <div class="page-title-subheading">
                    <b>Sửa hóa đơn và xem hóa đơn</b>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Table Hóa Đơn Cafe</h5>
                            <table class="mb-0 table table-bordered" id="tableHoaDon">
                                <thead>
                                    <tr>
                                        <th class="text-center">Bàn</th>
                                        <th class="text-center">Tên Sản Phẩm</th>
                                        <th class="text-center">Giá</th>
                                        <th class="text-center">Số Lượng</th>
                                        <th class="text-center">Tổng Cộng</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ket_qua as $danh_muc_san_pham) { ?>
                                        <tr>
                                            <td> <?php echo $danh_muc_san_pham['id'] ?></td>
                                            <td> <?php echo $danh_muc_san_pham['ten_danh_muc'] ?></td>
                                            <td><p>25.000đ</p></td>
                                            <td><p>3</p></td>
                                            <td><p>75.000</p></td>
                                            <td><a href="delete.php?id=<?php echo $so_bans['id'] ?>"><button class="btn btn-danger delete mr-1" data-iddelete="'+ value.id +'" data-toggle="modal" datatarget="#deleteModal">Xoá</button></a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Xóa Hóa Đơn</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn muốn xóa? Điều này không thể hoàn tác.
                            <input type="text" class="form-control" placeholder="Nhập vào id cần xóa" id="idDeleteDanhMuc" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="accpectDelete" class="btn btn-danger" data-dismiss="modal">Xóa Danh Mục</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Chỉnh Sửa Hóa Đơn</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" id="id_edit" hidden>
                            <div class="position-relative form-group">
                                <label>Tên Sản Phẩm</label>
                                <input id="ten_san_pham_edit" placeholder="Nhập vào tên danh mục" type="text" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label>Giá Bán</label>
                                        <input type="number" class="form-control" id="gia_ban_edit" placeholder="Nhập vào giá bán">
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group">
                                        <label>Số Lượng</label>
                                        <input type="number" class="form-control" id="so_luong_edit" placeholder="Nhập vào số lượng">
                                    </fieldset>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" id="closeModalUpdate" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="accpectUpdate" class="btn btn-success">Cập Nhật Danh Mục</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../main.js"></script>
</body>

</html>