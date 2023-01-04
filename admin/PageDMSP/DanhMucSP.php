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
    <title>Quản lý danh mục</title>
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
                    <a href="./DanhMucSP.php">
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


            <div class="row">
                <div class="col-md-5">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm Mới Danh Mục Sản Phẩm</h5>
                            <form autocomplete="off" id="createDanhMuc" method="post" action="process_insert.php">
                                <div class="position-relative form-group">
                                    <label for="ten_danh_muc">Tên Danh Mục</label>
                                    <input id="ten_danh_muc" name="ten_danh_muc" placeholder="Nhập vào tên danh mục" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="slug_danh_muc">Slug Danh Mục</label>
                                    <input id="slug_danh_muc" name="slug_danh_muc" placeholder="Nhập vào slug danh mục" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label>Danh Mục Cha</label>
                                    <select id="id_danh_muc_cha" name="id_danh_muc_cha" class="form-control">
                                        <option value="1">Danh Mục Root</option>
                                    </select>
                                </div>
                                <div class="position-relative form-group">
                                    <label>Tình Trạng</label>
                                    <select id="is_open" name="is_open" class="form-control">
                                        <option value=1>Hiển Thị</option>
                                        <option value=0>Tạm Tắt</option>
                                    </select>
                                </div>
                                <button class="mt-1 btn btn-primary" id="themMoiDanhMuc">Thêm Mới Danh Mục</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Table Danh Mục Cafe</h5>
                            <table class="mb-0 table table-bordered" id="tableDanhMuc">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Tên Danh Mục</th>
                                        <th class="text-center">Danh Mục Cha</th>
                                        <th class="text-center">Tình Trạng</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ket_qua as $tung_san_pham) { ?>
                                        <tr>
                                            <td><?php echo $tung_san_pham['id'] ?></td>
                                            <td>
                                                <?php echo $tung_san_pham['ten_danh_muc']; ?>
                                            </td>
                                            <td>
                                                <?php echo $tung_san_pham['id_danh_muc_cha']; ?>
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
                                                <a href="./update_DMSP.php?id=<?php echo $tung_san_pham['id'] ?>"><button class="btn btn-primary edit mr-1 edit_DM">Edit</button></a>
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

    <!-- testing -->
    <!-- <div class=modal_edit>
        <div class="modal-dialog">
            <form class="modal-content" method="POST" action="process_update.php">
                <div class="modal-header">
                    <h5 class="modal-title">Chỉnh Sửa Danh Mục Sản Phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="id_edit" hidden>
                    <div class="position-relative form-group">
                        <label>Tên Danh Mục</label>
                        <input id="ten_danh_muc_edit" placeholder="Nhập vào tên danh mục" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Slug Danh Mục</label>
                        <input id="slug_danh_muc_edit" placeholder="Nhập vào slug danh mục" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label>Hình Ảnh</label>
                        <div class="input-group">
                            <input id="hinh_anh_edit" class="form-control" type="text">
                            <input type="button" class="btn-info lfm" data-input="hinh_anh_edit" data-preview="holder_edit" value="Upload">
                        </div>
                        <img id="holder_edit" style="margin-top:15px;max-height:100px;">
                    </div>
                    <div class="position-relative form-group">
                        <label>Danh Mục Cha</label>
                        <select id="id_danh_muc_cha_edit" class="form-control">

                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label>Tình Trạng</label>
                        <select id="is_open_edit" class="form-control">
                            <option value=1>Hiển Thị</option>
                            <option value=0>Tạm Tắt</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="accpectUpdate" class="btn btn-success">Cập Nhật Danh Mục</button>
                </div>
            </form>
        </div>
    </div> -->

    <script src="../jquery-3.6.0.min.js"></script>
    <script src="../main.js"></script>
</body>

</html>