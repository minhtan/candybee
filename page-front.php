<?php
/*
Template Name: Candy bee frontpage
*/
get_header(); ?>
<div class="candyfront">
	<section class="first-half" id="tabs">
		<ul class="bee-control">
			<li class="about color1"><a href="#info">Gioi thieu</a></li>
			<li class="benefit color2"><a href="#benefit">Loi ich</a></li>
		</ul>
		<div class="bee-content-wrap">
			<section class="bee-content" id="info">
				<span class="data-toggle title">Giới thiệu</span>
				<h1 class="visual text-center vertical-center" id="logo-bee">
					<span class="logo-candy">candy</span>
					<span class="logo-bee">bee</span>
					<span class="logo-info data-toggle"> - mật ong chất</span>
				</h1>
				<p class="data-toggle text-center" id="info-intro">là sản phẩm từ ong tự nhiên và nguyên chất có xuất xứ từ vùng cao nguyên Đắk Lắk với:</p>
				<div class="row data-toggle">
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
		</div>	
	</section>
	<section class="second-half">
		<h1 class="visual text-center vertical-center">
			<span class="logo-honey">Kien thuc mat ong</span>
		</h1>
	</section>
</div>
<?php get_footer(); ?>