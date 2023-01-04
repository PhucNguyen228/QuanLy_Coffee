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
                    <a href="./QuanLySP.php">
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
                    <a href="../pageQLHD/QLHD.php">
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

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <input type="text" name="" id="idCanXoa" class="form-control" hidden>
                            <h5 class="modal-title text-white" id="exampleModalLabel">Xoá Sản Phẩm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="taoChinhLaThangXoa" class="btn btn-danger" data-dismiss="modal">Xóa Sản Phẩm</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Thêm mới sản phẩm</h5>
                        <form class="" id="formCreate" method="post" action="process_insert.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label>Tên Sản Phẩm</label>
                                        <input id="ten_san_pham" name="ten_san_pham" placeholder="Nhập vào tên sản phẩm" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label>Slug Sản Phẩm</label>
                                        <input id="slug_san_pham" name="slug_san_pham" placeholder="Nhập vào slug sản phẩm" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label>Giá Bán</label>
                                        <input id="gia_ban" name="gia_ban" placeholder="Nhập vào giá bán" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label>Giá Khuyến Mãi</label>
                                        <input id="gia_khuyen_mai" name="gia_khuyen_mai" placeholder="Nhập vào giá khuyến mãi" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label>Ảnh Đại Diện</label>
                                        <div class="input-group">
                                            <input id="anh_dai_dien" name="anh_dai_dien" class="form-control" type="text">
                                            <input type="button" class="btn-info lfm" data-input="anh_dai_dien" data-preview="holder" value="Upload">
                                        </div>
                                        <img id="holder" style="margin-top:15px;max-height:100px;">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label>Danh Mục</label>
                                        <select id="id_danh_muc" name="id_danh_muc" class="form-control">
                                            <?php foreach ($ket_qua as $danh_muc) {
                                                if ($danh_muc['is_open'] == 1) {
                                                    echo '<option value=' . $danh_muc['id'] . '>' . $danh_muc['ten_danh_muc'] . '</option>';
                                                }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label>Tình Trạng</label>
                                        <select id="is_open" name="is_open" class="form-control">
                                            <option value=1>Hiển Thị</option>
                                            <option value=0>Tạm tắt</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button class="mt-1 btn btn-primary" id="createSanPham">Thêm Mới Sản Phẩm</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-response">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Table bordered</h5>
                            <table class="mb-0 table table-bordered" id="tableSanPham">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap text-center">#</th>
                                        <th class="text-nowrap text-center">Tên Sản Phẩm</th>
                                        <!-- <th class="text-nowrap text-center">Slug Sản Phẩm</th> -->
                                        <th class="text-nowrap text-center">Giá Bán</th>
                                        <th class="text-nowrap text-center">Giá Khuyến Mãi</th>
                                        <th class="text-nowrap text-center">Danh Mục</th>
                                        <th class="text-nowrap text-center">Tình Trạng</th>
                                        <th class="text-nowrap text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select * from san_phams";
                                    $ket_qua = mysqli_query($ket_noi, $sql);
                                    foreach ($ket_qua as $tung_san_pham) { ?>
                                        <tr>
                                            <td><?php echo $tung_san_pham['id'] ?></td>
                                            <td>
                                                <?php echo $tung_san_pham['ten_san_pham']; ?>
                                            </td>
                                            <td>
                                                <?php echo $tung_san_pham['gia_ban']; ?>
                                            </td>
                                            <td>
                                                <?php echo $tung_san_pham['gia_khuyen_mai']; ?>
                                            </td>
                                            <td>
                                                <?php echo $tung_san_pham['id_danh_muc']; ?>
                                            </td>
                                            <td class="trang_thai">
                                                <?php
                                                echo "<button ";
                                                if ($tung_san_pham['is_open'] == 1) {
                                                    echo 'class="doiTrangThai btn btn-primary">Hiển thị';
                                                } else {
                                                    echo 'class="doiTrangThai btn btn-danger">Tạm tắt';
                                                }
                                                echo " </button>";
                                                ?>
                                            </td>
                                            <td class="test">
                                                <a href="delete.php?id=<?php echo $tung_san_pham['id'] ?>"><button class="btn btn-danger delete mr-1" data-iddelete="'+ value.id +'" data-toggle="modal" datatarget="#deleteModal">Xoá</button></a>
                                                <a href="./update_QLSP.php?id=<?php echo $tung_san_pham['id'] ?>"><button class="btn btn-primary edit mr-1 edit_DM">Edit</button></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../jquery-3.6.0.min.js"></script>
    <script src="../main.js"></script>
</body>

</html>