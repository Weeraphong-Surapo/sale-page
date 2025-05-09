        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Sale Page</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Mr. Admin</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php?p=home" class="nav-item nav-link <?= isset($_GET['p']) && $_GET['p'] == 'home' ? 'active' : ''; ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="content.php?p=contact" class="nav-item nav-link <?= isset($_GET['p']) && $_GET['p'] == 'contact' ? 'active' : ''; ?>"><i class="fa fa-th me-2"></i>จัดการโปรไฟล์</a>
                    <a href="links.php?p=link" class="nav-item nav-link <?= isset($_GET['p']) && $_GET['p'] == 'link' ? 'active' : ''; ?>"><i class="fa fa-keyboard me-2"></i>จัดการ ลิงค์</a>
                    <a href="product.php?p=pro" class="nav-item nav-link <?= isset($_GET['p']) && $_GET['p'] == 'pro' ? 'active' : ''; ?>"><i class="fa fa-table me-2"></i>จัดการ สินค้า</a>
                    <!-- <a href="money.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>เลข พร้อมเพย์</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= isset($_GET['p']) && $_GET['p'] == 'order' ? 'active' : ''; ?>" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>จัดการออเดอร์</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="check_order.php?p=order" class="dropdown-item">เช็คการชำระเงิน</a>
                            <a href="order.php?p=order" class="dropdown-item">ออเดอร์</a>
                            <a href="delivery_success.php?p=order" class="dropdown-item">ออเดอร์ที่จัดส่งแล้ว</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


                <!-- Content Start -->
                <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
            
                <div class="navbar-nav align-items-center ms-auto">
                
                 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Mr Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="function/logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->