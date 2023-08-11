<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL?>/login/dashboad">Trang chủ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL?>/order">Thông tin website</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Danh Mục Bài Viết
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>/post">Thêm</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>/post/list_post">Liệt kê</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Bài Viết
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>/post/add_post">Thêm</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>/post/list_post">Liệt kê</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Danh mục sản phẩm
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>/product">Thêm</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>/product/list_category">Liệt kê</a></li>
                    </ul>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sản phẩm
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>/product/add_product">Thêm</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>/product/list_product">Liệt kê</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Đơn hàng
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                   
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>/order">Liệt kê</a></li>
                    </ul>
                </li>

</nav>