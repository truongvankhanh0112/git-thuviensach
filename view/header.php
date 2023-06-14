<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
	<script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
	<link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
	<title>Thuviensach.vn</title>
	<link rel="shortcut icon" href="./view/img/favicon.jpg" type="image/x-icon">
</head>
<body>
		<!-- ==============================Xanh xám đầu trang================================================ -->
		<header>
			<div class="container-menu1">
				<div class="container1">
					<div class="logo">
						<li><a href="index.php"><img src="./view/img/low-res-logo.png" width="250px"></a></li>
					</div>
					<div class="search">
						<form action="index.php?act=sanpham" method="post">
						<li>
							<input type="text" name="kyw" placeholder="Tìm kiếm...">
							<input type="submit" name="timkiem" value="Tìm" id="btntim">
						</li>	
						</form>
					</div>
					<div class="orther">
						<li  class="orther-bag"><a href="index.php?act=showcart">Giỏ hàng của bạn <i class="fal fa-shopping-basket"></i></a></li>
						<?php
							if(isset($_SESSION['check'])){
								extract($_SESSION['check']);
						?>
							<li>
								<a href="index.php?act=xemthongtin"><?=$fullname?></a><br>
								<a href="index.php?act=thoat">Đăng xuất <i class="fas fa-sign-out-alt"></i></a>
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
				
				</div>
			</div>
		</header>
			<div class="container-menu2">
					<div class="container2">
					<div class="container-danhmuc">
						<li><i class="fas fa-caret-down"></i> <b>DANH MỤC SẢN PHẨM</b></li>
					</div>
					<div class="hotline">
							<li><span style="color: #000000;">Hotline: </span> 0123 456 789</li>
					</div>
				</div>
			</div>