<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container">

        <!-- navigation left -->
        <div class="navigation">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                        <span class="title">
                            <h2>Admin Cofe</h2>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="./PageQLNV/QuanLyNV.php">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">Quản lý nhân viên</span>
                    </a>
                </li>
                <li>
                    <a href="./PageDMSP/DanhMucSP.php">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title">Quản lý danh mục</span>
                    </a>
                </li>
                <li>
                    <a href="./PageQLSP/QuanLySP.php">
                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span class="title">Quản lý sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="./pageQLBAN/QLBAN.php">
                        <span class="icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
                        <span class="title">Quản lý bàn</span>
                    </a>
                </li>
                <li>
                    <a href="./pageQLHD/QLHD.php">
                        <span class="icon"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                        <span class="title">Quản lý hoá đơn</span>
                    </a>
                </li>
                <li>
                    <a href="./PageQLKHO/QLKHO.php">
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
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                </div>
                <div class="user">
                    <img src="img/user.jpg">
                </div>
            </div>

            <!-- cart box -->
            <div class="cartBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,235</div>
                        <div class="cardName">Daily Views</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">1,655</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">935</div>
                        <div class="cardName">Comments</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$6,100</div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="recentOrders">
                    <div class="cardheader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Window Coolers</td>
                                <td>$1200</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Speakers</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>HP Victus Laptop</td>
                                <td>$6200</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In progress</span></td>
                            </tr>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Window Coolers</td>
                                <td>$1200</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Speakers</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>HP Victus Laptop</td>
                                <td>$6200</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="recentCustomers">
                    <div class="cardheader">
                        <h2>Recent Customers</h2>
                    </div>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td width="60px"><div class="imgBx"><img src="img/img1.jpg"></div></td>
                                    <td><h4>David<br><span>Italy</span></h4></td>
                                </tr>
                                <tr>
                                    <td width="60px"><div class="imgBx"><img src="img/img2.jpg"></div></td>
                                    <td><h4>Customer2<br><span>Italy</span></h4></td>
                                </tr>
                                <tr>
                                    <td width="60px"><div class="imgBx"><img src="img/img3.jpg"></div></td>
                                    <td><h4>Customer3<br><span>Italy</span></h4></td>
                                </tr>
                                <tr>
                                    <td width="60px"><div class="imgBx"><img src="img/img4.jpg"></div></td>
                                    <td><h4>Customer4<br><span>Italy</span></h4></td>
                                </tr>
                                <tr>
                                    <td width="60px"><div class="imgBx"><img src="img/img5.jpg"></div></td>
                                    <td><h4>Customer5<br><span>Italy</span></h4></td>
                                </tr>
                                <tr>
                                    <td width="60px"><div class="imgBx"><img src="img/img6.jpg"></div></td>
                                    <td><h4>Customer6<br><span>Italy</span></h4></td>
                                </tr>
                                <tr>
                                    <td width="60px"><div class="imgBx"><img src="img/img7.jpg"></div></td>
                                    <td><h4>Customer7<br><span>Italy</span></h4></td>
                                </tr>
                                <tr>
                                    <td width="60px"><div class="imgBx"><img src="img/img8.jpg"></div></td>
                                    <td><h4>Customer8<br><span>Italy</span></h4></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>

</html>