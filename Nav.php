
<nav class="navbar sticky-top navbar-light bg-white navbar-expand-xl">
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link active" href="./SanPham.php">Laptop <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Linh kiện</a>
            </li>
        </ul>
    </div>
    <a class="navbar-brand" href="./TrangChu.php">
        <img src="./Image/logo.svg" width="381" height="163" class="d-inline-block " alt="logo">
    </a>
    <div>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="./GioHang.php">
                    <div class="d-flex justify-content-center">
                        <img src="./Image/giohang.svg" alt="gioHang">
                    </div>
                    Giỏ hàng
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./DonHang.php">
                    <div class="d-flex justify-content-center">
                        <img src="./Image/donHang.svg" alt="donHang">
                    </div>
                    Đơn hàng
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./LogIn.php">
                    <div class="d-flex justify-content-center">
                        <img src="./Image/dangnhap.svg" alt="dangNhap">
                    </div>
                    <?php echo isset($_SESSION['loggedIn']) ? 'Đăng xuất' : 'Đăng nhập' ?>
                </a>
            </li>
        </ul>
    </div>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Tìm</button>
    </form>
</nav>
