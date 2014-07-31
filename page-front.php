<?php
/*
Template Name: Candy bee frontpage
*/
get_header(); ?>
<div class="candyfront">
	<section class="first-half">
		<div class="section-content" id="candybee-content">
			<div class="bee-content-wrap">
				<section class="bee-content" id="info">
					<span class="title">Giới thiệu</span>
					<h1 class="visual text-center" id="logo-bee">
						<span class="invi logo-candy">candy</span>
						<span class="invi logo-bee">bee</span>
						<span class="logo-info"> - mật ong chất</span>
					</h1>
					<p class="text-center" id="info-intro">là sản phẩm từ ong tự nhiên và nguyên chất có xuất xứ từ vùng cao nguyên Đắk Lắk với:</p>
					<div class="row">
						<article class="col-4">
							<header class="text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/image_daklak_210.png" alt="dak lak">
							</header>
							<p>
								khí hậu thuận lợi cho các loài hoa phát triển, tạo nguồn thức ăn dồi dào cho đàn ong quanh năm
							</p>
						</article>
						<article class="col-4">
							<header class="text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/image_ong_210.png" alt="dak lak">
							</header>
							<p>
								hương vị đặc trưng của cà phê do ong được xen canh trong rừng cà phê nhằm tăng năng suất
							</p>
						</article>
						<article class="col-4">
							<header class="text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/image_nature_210.png" alt="dak lak">
							</header>
							<p>
								trong quá trình làm mật hoàn toàn không có sự can thiệp của con người và mật chỉ được khai thác khi đã đủ độ
							</p>
						</article>
					</div>
				</section>
				<section class="bee-content" id="benefit">
					
				</section>
				<section class="bee-content" id="price">
					
				</section>
			</div>	
			<ul class="bee-control">
				<li class="info" nav="info"><span>Gioi thieu</span></li>
				<li class="benefit" nav="benefit"><span>Loi ich</span></li>
				<li class="price" nav="price"><span>Bang gia</span></li>
			</ul>
		</div>
		<div class="section-cover">
			<span class="visual text-center vertical-center" id="logo-bee">
				<!-- <span class="invi logo-bee">Candy bee</span> -->
				<img src="<?php echo get_template_directory_uri(); ?>/img/bee_64.png" alt="Candy bee">
			</span>
		</div>
	</section>
	<section class="second-half">
		<div class="section-content">
		</div>
		<div class="section-cover">
			<span class="visual text-center vertical-center">
				<!-- <span class="invi logo-honey">Kien thuc mat ong</span> -->
				<img src="<?php echo get_template_directory_uri(); ?>/img/honey_64.png" alt="Kien thuc mat ong">
			</span>
		</div>
	</section>
</div>
<?php get_footer(); ?>