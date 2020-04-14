<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package MinoSim
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- get theme color  -->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="row mx-0">
				<ul class="bg-dark top-header">
					<li>
						<?php
							global $rebuild_date;
							date_default_timezone_set('Asia/Ho_Chi_Minh');
							echo rebuild_date('l' ).", ".rebuild_date('d/m/Y' );
						?>
					</li>
					<!-- <li><a href="<?php echo home_url('/') ?>">Trang chủ</a></li>
					<li>Thanh toán</li>
					<li><a href="<?php echo admin_url(); ?>">Đăng nhập</a></li> -->
				</ul>
				</div>
				<div class="header-top d-none d-md-block p-3">
					<div class="row">
						<div class="col-md-4 vcenter logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
								<?php
									$logo_id = get_theme_mod( 'custom_logo' );
									$logo_url = wp_get_attachment_image_url( $logo_id , 'full' );
									if ($logo_url):
								?>
									<img class="img-fluid" src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>">
								<?php
									else:
								?>
									<?php bloginfo( 'name' ); ?>
								<?php
									endif;
								?>
							</a>
						</div>
						<div class="col-md-8 vcenter">
							<div class="row" style="float: right;">
								<!-- <div class="col-md-3 vcenter">
									<div class="left-icon">
										<svg aria-hidden="true" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-7x"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg>
									</div>
									<div class="right-text">Đăng ký thông tin<br> Chỉnh chủ 100%</div>
								</div>
								<div class="col-md-3 vcenter" style="padding-right: 0">
									<div class="left-icon" style="width: 35px">
										<svg aria-hidden="true" data-prefix="fas" data-icon="truck" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-truck fa-w-20 fa-7x"><path fill="currentColor" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h16c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z" class=""></path></svg>
									</div>
									<div class="right-text" style="width: calc(100% - 40px);"> Giao sim tận nơi <br> Miễn phí toàn quốc</div>
								</div>
								<div class="col-md-3 vcenter">
									<div class="left-icon">
										<svg aria-hidden="true" data-prefix="fas" data-icon="life-ring" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-life-ring fa-w-16 fa-7x"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm173.696 119.559l-63.399 63.399c-10.987-18.559-26.67-34.252-45.255-45.255l63.399-63.399a218.396 218.396 0 0 1 45.255 45.255zM256 352c-53.019 0-96-42.981-96-96s42.981-96 96-96 96 42.981 96 96-42.981 96-96 96zM127.559 82.304l63.399 63.399c-18.559 10.987-34.252 26.67-45.255 45.255l-63.399-63.399a218.372 218.372 0 0 1 45.255-45.255zM82.304 384.441l63.399-63.399c10.987 18.559 26.67 34.252 45.255 45.255l-63.399 63.399a218.396 218.396 0 0 1-45.255-45.255zm302.137 45.255l-63.399-63.399c18.559-10.987 34.252-26.67 45.255-45.255l63.399 63.399a218.403 218.403 0 0 1-45.255 45.255z" class=""></path></svg>
									</div>
									<div class="right-text">Tư vấn chu đáo<br>Hỗ trợ nhiệt tình</div>
								</div>
								<div class="col-md-3 vcenter">
									<div class="left-icon"><svg class="svg-inline--fa fa-clock fa-w-16" aria-hidden="true" data-prefix="fa" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg>
									</div>
									<div class="right-text"> Hỗ trợ mua sim<br> 8h - 20h hằng ngày </div>
								</div> -->

								<img class="img-fluid" src="<?php echo get_field('image_header', 19); ?>" alt="">
							</div>
						</div>
					</div>
				</div>
				<div id="headerMenu">
						<a class="bg-light navbar-brand d-block d-md-none mobile-logo py-3 px-4 text-center m-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
							<?php
							$logo_id = get_theme_mod( 'custom_logo' );
							$logo_url = wp_get_attachment_image_url( $logo_id , 'full' );
							if ($logo_url):
							?>
							<!-- <img style="max-height: 45px;" src="<?php echo wp_upload_dir()['baseurl'].'/2020/02/cropped-mobi_shop22-1-1.png'; ?>" alt="<?php bloginfo( 'name' ); ?>"> -->
							<img class="img-fluid" src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>">
							<?php
							else:
							?>
							<?php bloginfo( 'name' ); ?>
							<?php
							endif;
							?>
						</a>


						<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
						<div class="col-2 px-0 text-right d-mobile" style="justify-content: center;">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
									<img style="height: 30px" src="<?php echo get_template_directory_uri().'\images\menu-small.png'; ?>" alt="" srcset="">
								</button>
								</div>
								<div class="col-10 px-0 d-mobile">
									<form class="form-inline mx-2 my-2 my-lg-0 form-tim-sim" role="search" method="get" style="width: 100%;display: flex;flex-wrap: nowrap;">
										<input onkeyup="CheckKey(this)" class="form-control" type="tel" placeholder="<?php echo esc_attr_x( 'Nhập số cần tìm', 'placeholder' ) ?>" value="<?php echo get_search_sim_query() ?>" name="keyword" aria-describedby="search-form" style="width: 100%;">
										<span class="input-group-append">
											<button class="btn btn-primary" id="search-form-header" type="submit" style="border-top-left-radius: 0;border-bottom-left-radius: 0;"><?php echo esc_attr_x( 'Search', 'submit button' ) ?></button>
										</span>
									</form>
								</div>
							
							<div class="collapse navbar-collapse" id="navbarNav">
							<?php
									$args = array(
										'theme_location' => 'primary',
										'depth'      => 2,
										'container'  => false,
										'menu_class'     => 'navbar-nav',
										'walker'     => new Bootstrap_Walker_Nav_Menu()
									);
									if (has_nav_menu('primary')) {
										wp_nav_menu($args);
									}
								?>
							</div>
						</nav>
					</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
