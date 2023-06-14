<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../admin/css/admin.css">
    <script src="./ckeditor/ckeditor.js"></script>
	<title>Welcome to admin</title>
</head>
<body>
<header>
        <H1>ADMIN</H1>
        <div class="form">
		<?php
			if(isset($_SESSION['check'])){
				extract($_SESSION['check']);
		?>
			<li> <br>
				<a href="../index.php?act=xemthongtin"> Xin chào: <?=$fullname?> <i class="fas fa-sort-down"></i></a><br>
					<br>
			</li>
		<?php
			}else{
		?>
			<li>
				<a href="index.php?act=login">Đăng Nhập
					<i class="fas fa-sign-in-alt"></i>
				</a>
			</li>
		<?php 
			}						
		?>
        </div>
    </header>
    <div class="container">
        <div class="contentleft">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=addtg">Tác giả</a></li>
                <li><a href="index.php?act=adddm">Danh mục</a></li>
                <li><a href="index.php?act=addsp">Sản phẩm</a></li>
                <li><a href="index.php?act=listdonhang">Đơn hàng</a></li>
                <li><a href="index.php?act=listthanhvien">Thành viên</a></li>
                <li><a href="index.php?act=thongke">Thống kê</a></li>
				<li><a href="../index.php?act=thoat">Đăng xuất</a></li>
            </ul>
        </div>
        <div class="contentright">