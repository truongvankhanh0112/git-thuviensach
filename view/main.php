<section class="container-menuhome-slider">
		<div class="container3">
			<div class="menu-trangchu">
			<from action="index.php?act=listdm" method="post">
				<?php
                    foreach ($dsdm as $danhmuc) {
                        extract($danhmuc);
						$linkdm = "index.php?act=sanpham&iddm=".$id;
                        echo '
                         <li style="padding-left:12px; text-transform: capitalize;">
						 	<a href="'.$linkdm.'">'.$tendanhmuc.'</a>
						 </li>';
                    }
                ?>
			 </from>
			</div>
			<!-- ========================================silde================================================================= -->
			<div class="container-slide-trangchu">
				<div class="slideshow-container">
					<div class="mySlides fade">
						<a href="index.php?act=chitietsanpham&idSanpham=54">
							<img src="view/img/slide/slide1.png" style="width:100%; height: 400px;">
						</a>
					  </div>
					  <div class="mySlides fade">
						<a href="index.php?act=chitietsanpham&idSanpham=56">
							<img src="view/img/slide/920x420_hgb.jpg" style="width:100%; height:400px ;">
						</a>
					  </div>
					  <div class="mySlides fade">
						<a href="index.php?act=chitietsanpham&idSanpham=57">
							<img src="view/img/slide/slide3.jpg" style="width:100%; height: 400px;">
						</a>
					  </div>	
					  <div class="mySlides fade">
						<a href="">
							<img src="view/img/slide/slide4.png" style="width:100%; height: 400px;">
						</a>
					  </div>
					  <div class="mySlides fade">
						<a href="index.php?act=chitietsanpham&idSanpham=55">
							<img src="view/img/slide/slide5.png" style="width:100%; height: 400px;">
						</a>
					  </div>			  
				</div>
					  <br>
					  
					  <div style="text-align:center"> 
						<span class="dot"></span> 
						<span class="dot"></span> 
						<span class="dot"></span> 
						<span class="dot"></span> 
						<span class="dot"></span> 
					  </div>
					 	<script> 
							var slideIndex = 0;
							showSlides();

							function showSlides() {
								var i;
								var slides = document.getElementsByClassName("mySlides");
								for (i = 0; i < slides.length; i++) {
								slides[i].style.display = "none";
								}
								slideIndex++;
								if (slideIndex > slides.length) {slideIndex = 1}
								slides[slideIndex-1].style.display = "block";
								setTimeout(showSlides, 2000); // Change image every 2 seconds
							}
						</script>
			</div>
		</div>
		<div class="Group-content-layout1">
			<div class="Group-layout">
					<?php 
						foreach ($dmtc as $dmtc) {
							extract($dmtc);
							$linkdm = "index.php?act=sanpham&iddm=".$id;
					?>
				<h2>
					<a class="sachmoi" href="<?=$linkdm?>"><?=$tendanhmuc?>
						<span class="sachmoiv"></span></a>
					<a class="more" href="<?=$linkdm?>"> Xem tất cả</a>
				</h2>
				
					<div class="groups-blockcontent">
						<div class="blockcontent">
							<div class="newproducts">
								<div class="contentsachmoi">
								<?php
								 $loadsptc =loadall_sp_trangchu($id);
								foreach ($loadsptc as $sanpham) {
									# code...
									extract($sanpham);
									$linksp = "index.php?act=chitietsanpham&idSanpham=".$idSanpham;
									$anhsp=$img_path.$anhsp;
									echo '<div class="products">
											<a class="products-img" href="'.$linksp.'"><img src="'.$anhsp.'"></a>
											<li style="text-transform: capitalize;" class="products-name"><a href="'.$linksp.'">'.$tensp.'</a></li><br>
											<li class="products-tacgia uplower"><a href="'.$linksp.'">'.$tacgia.'</a></li><br>
											<li class="products-giamoi"><a href="'.$linksp.'">'.$giakm.'.000 <sup>đ</sup></a></li>
											<li class="products-giacu"><a href="'.$linksp.'">'.$giasp.'.000 <sup>đ</sup></a></li>
										  </div>';
								}
							?>
								</div>
							</div>
						</div>
					</div>
					<?php
                    }
                ?>
			</div>
	</section>
