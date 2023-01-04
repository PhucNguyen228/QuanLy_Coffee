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
    $id = $_GET['id'];
    $sql = "select * from bans where id = '$id'";
    $ket_qua = mysqli_query($ket_noi, $sql);
    $so_bans = mysqli_fetch_array($ket_qua);
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
                    <a href="./QLBAN.php">
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
            <div style="margin-left: 13px; margin-top: 10px; font-size: 20px;">
                <b> Quản Lý Bàn </b>

            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm Mới Bàn</h5>
                            <form autocomplete="off" method="post" action="process_update.php" id="createBan">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <div class="position-relative form-group">
                                    <label>Mã Bàn</label>
                                    <input id="ma_ban" name="ma_ban" placeholder="Nhập vào mã bàn" type="text" class="form-control" value="<?php echo $so_bans['ma_ban'] ?>">
                                </div>
                                <div class="position-relative form-group">
                                    <label>Tình Trạng</label>
                                    <select id="is_open" name="is_open" value="<?php echo $DanhMuc['is_open'] ?>" class="form-control">
                                        <?php if ($so_bans['is_open'] == 1) {
                                            echo '<option value=1>Hiển Thị</option>';
                                            echo '<option value=0>Tạm tắt</option>';
                                        } else {
                                            echo '<option value=0>Tạm tắt</option>';
                                            echo '<option value=1>Hiển Thị</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button class="mt-1 btn btn-primary" id="themMoiBan">Cập nhật Bàn</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Table Bàn</h5>
                            <table class="mb-0 table table-bordered" id="tableBan">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Mã Bàn</th>
                                        <th class="text-center">Tình Trạng</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form autocomplete="off" method="post" action="process_update.php" id="update_Khos">
                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                        <tr>
                                            <td><?php echo $so_bans['id'] ?></td>
                                            <td>
                                                <?php echo $so_bans['ma_ban']; ?>
                                            </td>
                                            <td class="trang_thai">
                                                <?php
                                                echo "<button ";
                                                if ($so_bans['is_open'] == 1) {
                                                    echo 'class="doiTrangThai mg-center btn btn-primary">Hiển thị';
                                                } else {
                                                    echo 'class="doiTrangThai mg-center btn btn-danger">Tạm tắt';
                                                }
                                                echo " </button>";
                                                ?>
                                            </td>
                                            <td class="test">
                                                <a href="delete.php?id=<?php echo $so_bans['id'] ?>"><button class="btn btn-danger delete mr-1" data-iddelete="'+ value.id +'" data-toggle="modal" datatarget="#deleteModal">Xoá</button></a>
                                            </td>
                                    </form>
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
                            <h5 class="modal-title">Xóa Bàn</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn muốn xóa? Điều này không thể hoàn tác.
                            <input type="text" class="form-control" placeholder="Nhập vào id cần xóa" id="idDeleteBan" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="accpectDelete" class="btn btn-danger" data-dismiss="modal">Xóa Bàn</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../main.js"></script>
</body>

</html>