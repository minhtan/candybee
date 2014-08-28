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
					<h2>CandyBee - mật ong chất</h2>
					<p id="info-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit doloremque, quaerat, cupiditate eveniet quod facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae commodi vel consequuntur voluptatibus! Quisquam, ducimus!</p>
					<div class="row">
						<article class="text-center col-4">
							<header>
								<img src="<?php echo get_template_directory_uri(); ?>/img/image_daklak_210.png" alt="dak lak">
							</header>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque laboriosam earum magni, debitis, rem odio!
							</p>
						</article>
						<article class="text-center col-4">
							<header>
								<img src="<?php echo get_template_directory_uri(); ?>/img/image_ong_210.png" alt="dak lak">
							</header>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste facere consequuntur vitae eos eum itaque sapiente facilis eius ducimus, alias. 
							</p>
						</article>
						<article class="text-center col-4">
							<header>
								<img src="<?php echo get_template_directory_uri(); ?>/img/image_nature_210.png" alt="dak lak">
							</header>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, excepturi hic! Unde nisi, placeat itaque!
							</p>
						</article>
					</div>
				</section>
				<section class="bee-content" id="benefit">
					<h2>Sử dụng mật ong có thể</h2>
					<div class="row benefit-content">
						<article class="text-center col-4 row">
							<h3>Làm đẹp</h3>
							<div class="img-wrap col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/lips_128.png" alt="Lam dep">
							</div>
							<div class="text lips col-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, vel, eos? Modi porro, facilis tempora.</p>
							</div>
						</article>
						<article class="text-center col-4 row">
							<h3>Chữa bệnh</h3>
							<div class="img-wrap col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/heart_128.png" alt="Chua benh">
							</div>
							<div class="text heart col-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, facilis.</p>
							</div>
						</article>
						<article class="text-center col-4 row">
							<h3>Nấu ăn</h3>
							<div class="img-wrap col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/food_128.png" alt="Nau an">
							</div>
							<div class="text food col-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, quas dicta officiis nisi aspernatur magnam inventore. Suscipit autem, non magnam.</p>
							</div>
						</article>
						<p class="text-center col-12 benefit-text">
							<span class="benefit-read-more">Đọc thêm chi tiết về công dụng của mật ong tại đây: <span id="go-to-2nd-half"></span></span>
						</p>
					</div>
				</section>
				<section class="bee-content" id="media">
					<h2>Hình ảnh sản phẩm</h2>
					<div class="slider">
						<div class="row product-image">
							<!-- <div class="col-3 nopadding">
								<span class="fancy fancybox" rel="group" data-fancybox-href="<?php echo get_template_directory_uri(); ?>/img/bim.jpg">
									<img src="<?php echo get_template_directory_uri(); ?>/img/800x600.jpg" alt="">
								</span>
							</div> -->
							<div class="half-item">
								<div class="item-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/500x500.jpg" alt="">
								</div>
								<a class="fancybox" rel="group" href="<?php echo get_template_directory_uri(); ?>/img/1920x1200.jpg">
									<div class="item-text">
										<div class="item-text-content">
											<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, fugit.</h3>
											<span class="img-zoom">Xem rõ hơn</span>
										</div>
									</div>
								</a>
							</div><div class="half-item">
								<div class="item-img right">
									<img src="<?php echo get_template_directory_uri(); ?>/img/500x500.jpg" alt="">
								</div>
								<a class="fancybox" rel="group" href="<?php echo get_template_directory_uri(); ?>/img/1920x1200.jpg">
									<div class="item-text">
										<div class="item-text-content">
											<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, architecto!</h3>
											<span class="img-zoom">Xem rõ hơn</span>
										</div>
									</div>
								</a>
							</div><div class="full-item">
								<div class="item-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/1000x750.jpg" alt="">
								</div>
								<a class="fancybox" rel="group" href="<?php echo get_template_directory_uri(); ?>/img/1920x1200.jpg">
									<div class="item-text">
										<div class="item-text-content">
											<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
											<span class="img-zoom">Xem rõ hơn</span>
										</div>
									</div>
								</a>
							</div><div class="half-item">
								<div class="item-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/500x500.jpg" alt="">
								</div>
								<a class="fancybox" rel="group" href="<?php echo get_template_directory_uri(); ?>/img/1920x1200.jpg">
									<div class="item-text">
										<div class="item-text-content">
											<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam tenetur sit earum.</h3>
											<span class="img-zoom">Xem rõ hơn</span>
										</div>
									</div>
								</a>
							</div><div class="half-item">
								<a class="fancybox" rel="group" href="<?php echo get_template_directory_uri(); ?>/img/1920x1200.jpg">
									<div class="item-img-full">
										<img src="<?php echo get_template_directory_uri(); ?>/img/1000x500.jpg" alt="">
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>
				<section class="bee-content" id="price">
					<h2>Bảng giá và liên hệ</h2>
					<div class="row">
						<div class="col-6">
							<h3>Bảng giá</h3>
							<ul class="pricing">
								<li class="clearfix">
									<span class="product">Mật ong</span>
									<span class="price">150k/lít</span>
								</li>
								<li class="clearfix">
									<span class="product">Sữa ong chúa</span>
									<span class="price">200k/100g</span>
								</li>
							</ul>
						</div>
						<div class="col-6 contact-wrap">
							<h3>Liên hệ với chúng tôi qua</h3>
							<ul class="contact">
								<li class="contact-li">
									<span class="contact-label">Hotline:</span>
									<span>0123456789</span>
								</li>
								<li class="contact-li">
									<span class="contact-label">Email:</span>
									<span>asd@asd.com</span>
								</li>
								<li class="contact-li">
									<ul class="social-ul">
										<li class="fb"><a href="">facebook</a></li>
										<li class="in"><a href="">instagram</a></li>
										<li class="yt"><a href="">youtube</a></li>
										<li class="gg"><a href="">google+</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<section class="bee-content" id="faq">
					<h2>Những câu hỏi thường gặp</h2>
				</section>
			</div>
		</div>
		<div class="mobile-button"></div>
		<nav class="bee-control">	
			<ul>
				<li class="info" nav="info"><span>Giới thiệu</span></li>
				<li class="benefit" nav="benefit"><span>Công dụng</span></li>
				<li class="media" nav="media"><span>Hình ảnh</span></li>
				<li class="price" nav="price"><span>Bảng giá và liên hệ</span></li>
				<li class="faq" nav="faq"><span>Hỏi đáp</span></li>
				<li class="close"><span>Quay lại</span></li>
			</ul>
			<!-- <span class="hot-line">
				Hotline: 0123456789
			</span> -->
			<h1 class="text-right logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logobee_128.png" alt="Candy Bee">
			</h1>
		</nav>	
		<div class="section-cover">
			<div class="helper"></div>
			<div class="cover">
				<span class="visual text-center vertical-center" id="logo-bee">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bee_64.png" alt="Candy bee">
				</span>
			</div>
		</div>
	</section>
	<section class="second-half">
		<div class="section-content" id="post-scroll">
			<div class="post-scroll">
				<div class="post-listing-front">
					<h1 class="title-second text-center">Kiến thức mật ong</h1>
					<div class="post-block">
						<ul class="post-list"></ul>
					</div>
					<div class="text-center view-more-wrap">
						<span class="view-more">View more</span>
					</div>
				</div>
			</div>
		</div>  
		<div class="section-cover">
			<div class="cover">
				<span class="visual text-center vertical-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/honey_64.png" alt="Kien thuc mat ong">
				</span>
			</div>
			<div class="helper"></div>
		</div>
	</section>
</div>
<?php get_footer(); ?>