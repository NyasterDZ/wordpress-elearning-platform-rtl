<!DOCTYPE html>
<html lang="ar">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
    <?php wp_head();?>
</head>
<body>

	<!-- <div id="preloader"></div> -->


	<!-- Start of Header section
		============================================= -->
		<header>
			<div id="main-menu" class="main-menu-container">
				<div class="main-menu">
					<div class="container">
						<div class="navbar-default">
							<div class="navbar-header float-left">
								<a class="navbar-brand " href="#"><img  src="<?php echo get_theme_file_uri('assets/img/logo/logo.png') ?>" alt="شعار"></a>
							</div><!-- /.navbar-header -->

							<div class="select-lang">
								<select>
									<option value="" selected="">ARB</option>
								</select>
							</div>
							<div class="cart-search float-right ul-li">
								<ul>
									
									<li>
										<button type="button" class="toggle-overlay search-btn">
											<i class="fas fa-search"></i>
										</button>
										<div class="search-body">
											<div class="search-form">
												<form action="#">
													<input class="search-input" type="search" placeholder="Search Here">
													<div class="outer-close toggle-overlay">
														<button type="button" class="search-close">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<?php if (!is_user_logged_in()) 
							{ ?>
								<div class="log-in float-right">
								<a data-toggle="modal" data-target="#myModal" href="#">تسجيل الدخول</a>
								<!-- The Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header backgroud-style">
												<div class="gradient-bg"></div>
												
												<div class="popup-text text-center">
													<h2>تسجيل الدخول الى حسابك</h2>
													<p>سجل دخولك وتمتع بمحتوى برمجي عربي مميز</p>
												</div>
											</div>

											<!-- Modal body -->
											<div class="modal-body">
												<div class="facebook-login">
													<a href="#">
														<div class="log-in-icon">
															<i class="fab fa-facebook-f"></i>
														</div>
														<div class="log-in-text text-center">
															تسجيل الدخول باستخدام الفيسبوك
														</div>
													</a>
												</div>
												<div class="alt-text text-center"><a href="#">أو تسجيل الدخول</a> </div>
												<div  class="contact_form" >
													<div class="contact-info">
														<input class="name" name="user_login" id="user_login" type="text" placeholder="ادخل الايميل">
													</div>
													<div class="contact-info">
														<input class="email" name="user_pass" id="user_pass" type="password" placeholder="ادخل كلمة السر">
													</div>
													<div class="nws-button text-center white text-capitalize">
														<button type="submit" id="submit" value="Submit">تسجيل الدخول الآن</button> 
													</div> 
                                                </div>
												<div class="log-in-footer text-center">
													<p style="color:blue">قال الله جل وعلا: {إِنَّ اللَّهَ وَمَلائِكَتَهُ يُصَلُّونَ عَلَى النَّبِيِّ يَا أَيُّهَا الَّذِينَ آمَنُوا صَلُّوا عَلَيْهِ وَسَلِّمُوا تَسْلِيمًا} </p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                           <?php
							}
							else
							{?>
							<div class="log-in float-right">
								<a  href="<?php echo wp_logout_url();?>">تسجيل الخروج</a>
							</div>
							<?php }
							 ?>
						
							
							<!-- Collect the nav links, forms, and other content for toggling -->
							<nav class="navbar-menu float-right">
								<div class="nav-menu ul-li">
									<ul>
										<li class="menu-item-has-children ul-li-block">
											<a href="#">المنصة</a>
											<ul class="sub-menu">
												<?php
												if(!is_user_logged_in())
												{ ?>
												<li><a href="<?php echo get_home_url(); ?>">الرئيسية</a></li>
												<li><a href="<?php echo esc_url(site_url('/wp-signup.php')); ?>">التسجيل</a></li>
												<li><a href="<?php echo site_url('/marvelahost'); ?>">MarvelaHost</a></li>
												<li><a href="<?php echo site_url('/algorithm'); ?>">Algorithm</a></li>
												<li><a href="<?php echo site_url('/galaxyprogs'); ?>">GalaxyPrgos</a></li>
												<?php }
												else
												{ ?>
												<li><a href="<?php echo get_home_url(); ?>">الرئيسية</a></li>
												<li><a href="<?php echo site_url('/marvelahost'); ?>">MarvelaHost</a></li>
												<li><a href="<?php echo site_url('/algorithm'); ?>">Algorithm</a></li>
												<li><a href="<?php echo site_url('/galaxyprogs'); ?>">GalaxyPrgos</a></li>
												<?php }
												?>
												
											</ul>
										</li>
										<li class="menu-item-has-children ul-li-block">
											<a href="#">المسارات</a>
										<ul class="sub-menu">
												<li><a href="">تصميم المواقع</a></li>
												<li><a href="">تطوير الموقع</a></li>
												<li><a href="">Wordpress</a></li>
												
											</ul>
									</li>
										<li><a href="#">المسؤولون</a></li>
										<li><a href="#">كيف أبدأ</a></li>
										<li><a href="#">اتصل بنا</a></li>
									</ul>
								</div>
							</nav>

							<div class="mobile-menu">
								<div class="logo"><a href="index-1.html"><img src="<?php echo get_theme_file_uri('assets/img/logo/logo.png') ?>a" alt="شعار"></a></div>
								<nav>
									<ul>
										<li><a href="">المنصة
										<ul>
												<li><a href="<?php echo get_home_url(); ?>">الرئيسية</a></li>
												<li><a href="<?php echo site_url('/marvelahost'); ?>">MarvelaHost</a></li>
												<li><a href="<?php echo site_url('/algorithm'); ?>">Algorithm</a></li>
												<li><a href="<?php echo site_url('/galaxyprogs'); ?>">GalaxyPrgos</a></li>
											</ul>
										</a>
										</li>
										
										<li><a href="">المسارات</a>
										<ul>
												<li><a href="">تصميم المواقع</a></li>
												<li><a href="">تطوير الموقع</a></li>
												<li><a href="">Wordpress</a></li>
												
											</ul>
										</li>
										<li><a href="#">المسؤولون</a></li>
										<li><a href="#">كيف أبدأ</a></li>
										<li><a href="#">اتصل بنا</a></li>
										
									</ul>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


 	<!-- Start of Header section
 		============================================= -->