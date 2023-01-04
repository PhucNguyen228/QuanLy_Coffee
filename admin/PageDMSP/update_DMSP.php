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
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="../public/assets_admin/">
    <title>Admin Dashboard</title>
</head>

<body>
    <?php
    include '../connect.php';
    $id = $_GET['id'];
    $sql = "select * from danh_muc_san_phams where id = $id";
    $ket_qua = mysqli_query($ket_noi, $sql);
    $DanhMuc = mysqli_fetch_array($ket_qua);
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">Quản lý kho</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">

            <!-- top bar -->
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                </div>
                <div class="user">
                    <img src="../img/user.jpg">
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Chỉnh Sửa Danh Mục Sản Phẩm</h5>
                            <form autocomplete="off" id="createDanhMuc" method="post" action="process_update.php">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <div class="position-relative form-group">
                                    <label>Tên Danh Mục</label>
                                    <input id="ten_danh_muc" name="ten_danh_muc" value="<?php echo $DanhMuc['ten_danh_muc'] ?>" placeholder="Nhập vào tên danh mục" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label>Slug Danh Mục</label>
                                    <input id="slug_danh_muc" name="slug_danh_muc" value="<?php echo $DanhMuc['slug_danh_muc'] ?>" placeholder="Nhập vào slug danh mục" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label>Hình Ảnh</label>
                                    <div class="input-group">
                                        <input id="hinh_anh" name="hinh_anh" value="<?php echo $DanhMuc['hinh_anh'] ?>" class="form-control" type="text">
                                        <input type="button" class="btn-info lfm" data-input="hinh_anh" data-preview="holder" value="Upload">
                                    </div>
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                </div>
                                <div class="position-relative form-group">
                                    <label>Danh Mục Cha</label>
                                    <select id="id_danh_muc_cha" name="id_danh_muc_cha" value="<?php echo $DanhMuc['id_danh_muc_cha'] ?>" class="form-control">
                                        <option value=1>Danh Mục Root</option>
                                    </select>
                                </div>
                                <div class="position-relative form-group">
                                    <label>Tình Trạng</label>
                                    <select id="is_open" name="is_open" value="<?php echo $DanhMuc['is_open'] ?>" class="form-control">
                                        <?php if ($DanhMuc['is_open'] == 1) {
                                            echo '<option value=1>Hiển Thị</option>';
                                            echo '<option value=0>Tạm tắt</option>';
                                        } else {
                                            echo '<option value=0>Tạm tắt</option>';
                                            echo '<option value=1>Hiển Thị</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button class="mt-1 btn btn-primary" id="themMoiDanhMuc">Cập Nhật Danh Mục</button>
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
                                            <td class="trang_thai_edit">
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