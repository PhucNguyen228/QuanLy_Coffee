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
    $sql = "select * from agents";
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
                    <a href="./QuanLyNV.php">
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
                <div class="user">
                    <img src="../img/user.jpg">
                </div>
            </div>

            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="quanLyNv.php"><button type="button" class="btn btn-primary btnTNV">Trở lại</button></a>
                    <div class="main-card mb-3 card">
                        <div class="card-body" style="display: flex;">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-2 mx-1 mx-md-4 mt-2">Sign up</p>
                                <form class="mx-1 mx-md-4" method="post" action="process_insert.php" autocomplete="off">
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Họ Và Tên</label>
                                            <input type="text" id="ho_va_ten" name="ho_va_ten" class="input_test form-control" />
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Số Điện Thoại</label>
                                            <input type="phone" id="so_dien_thoai" name="so_dien_thoai" class="input_test form-control" />
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Email</label>
                                            <input type="email" id="email" name="email" class="input_test form-control" />
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Mật Khẩu</label>
                                            <input type="password" id="password" name="password" class="input_test form-control" />
                                        </div>
                                    </div>
                                    <!-- <div class="d-flex flex-row align-items-center mb-2">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Nhập Lại Mật Khẩu</label>
                                            <input type="password" id="re_password" name="re_password"class="input_test form-control" />
                                        </div>
                                    </div> -->
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label">Địa Chỉ</label>
                                            <input type="text" id="dia_chi" name="dia_chi" class="input_test form-control" />
                                        </div>
                                    </div>
                                        <button id="register" class="mg-r mt-4 btn btn-primary btn-lg">Register</button>
                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="https://tailieufree.net/wp-content/uploads/2021/01/hinh-nen-hat-cafe-9.jpg" class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../main.js"></script>
</body>

</html>