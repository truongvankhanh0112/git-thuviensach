<session class="danhsachsp">
		<div class="boxtraisp">
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
		</div>
		<div class="boxphaisp">
		<div class="container-danhsachsanpham-top">
			<p style="text-transform: capitalize;"><a href="index.php">Trang Chủ</a> / <?=$tendm?></p>
		</div>
		<div class="container-danhsachsanpham-bot">
				<div class="Group-content-layout1">
					<div class="Group-layout">
						<h2><a class="sachbanchay uplower" href="#"><?=$tendm?></a>
						</h2>
							<div class="groups-blockcontent">
								<div class="blockcontent">
									<div class="newproducts">
										<div class="contentsachmoi">
										<?php
										foreach ($dssp as $sanpham) {
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
					</div>
				</div>
		</div>
		</div>
	</session>