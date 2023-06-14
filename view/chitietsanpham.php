<?php
	extract($onesp);
?>
<section class="container">
            <div id="container">
                <div class="pathway">
                    <ul>
                        <li>
                            <a href="./index.php">Trang Chủ /</a>
                        </li>
                        <li>
                            <a class="uplower" href="<?=$linkdm?>"><?=$iddm?> /</a>
                        </li>
                        <li class="uplower"><?=$tensp?></li>
                    </ul>

                </div>
				<div class="showsp">
					<div class="showimg">
						<?php $anhsp=$img_path.$anhsp;?>
						<img src="<?=$anhsp?>">
					</div>
					<div class="info">
						<h1 class="uplower"><?=$tensp?></h1>
						<div class="book_origin">
							<span class="book_tg uplower"><b>Tác giả: </b><a href="#"><?=$tacgia?></a></span>
						</div>
						<div class="info_giaban">
							<div class="giaphu">
								<div id="giaban"><?=$giakm?>.000 ₫</div>
								<div class="giabia">Giá bìa: <span  style="text-decoration-line: line-through;"><?=$giasp?>.000đ</span></div>
							</div>
							<form action="index.php?act=addtocart" method="post">
							<div class="btnmua">
								<input type="hidden" name="idSanpham" value="<?=$idSanpham?>">
								<input type="hidden" name="tensp" value="<?=$tensp?>">
								<input type="hidden" name="anhsp" value="<?=$anhsp?>">
								<input type="hidden" name="giakm" value="<?=$giakm?>">
								Số lượng:
								<input  type="number" name="soluong" id="idsoluong" value="1" min="1" max="100"> <br>
								<input type="submit" id="btnmua" name="addtocart" value="Mua">
							</div>
							</form>
							
						</div>
						<div class="blockcontent">
							<p>
								<i class="fa fa-check">
									
								</i>
								<span style="font-size:14px;">Bọc Plastic miễn phí&nbsp;</span>
							</p>
							<p>
								<i class="fa fa-check">

								</i>
								<span style="font-size:14px;">Giao hàng miễn phí trong nội thành TP. Cần Thơ với đơn hàng&nbsp;
									<span style="color:#0e4159;"><strong>≥ 150.000 đ</strong></span>
								</span>
							</p>
							<p>
								<i class="fa fa-check">

								</i>
								<span style="font-size:14px;">Giao hàng miễn phí toàn quốc với đơn hàng&nbsp;
									<span style="color:#0e4159;"><strong>≥ 250.000 đ</strong></span>
								</span>
							</p>
						</div>
					</div>
				</div><br><br><br><br><br>
				<div class="show_chitiet">
					<div class="gioithieusach">Giới Thiệu Sách</div>
					<div class="book_intro">
						<div class="name_bookintro">
							<span style="color:#ff0000;">
								<span class="uplower" style="font-size:16px;"><?=$tensp?></span>
							</span>
						</div>
						<div class="write_bookintro">
							<p>
								<?=$gioithieu?>
							</p>
						</div>
					</div>
				</div>
					<!-- <input type="submit" id="btnmua1" value="Mua"> -->
            </div>
        </section>
