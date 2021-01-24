<?php
get_header();
?>
	<!-- Start of slider section
		============================================= -->
		<section id="slide" class="slider-section">
			<div id="slider-item" >
			
				<div class="slider-area slider-bg-2 relative-position">
					<div class="slider-text">
						<div class="section-title mb20 headline text-center animation">
							<div class="layer-1-1">
								<span class="subtitle ">وَمَا أُوتِيتُمْ مِنَ الْعِلْمِ إِلا قَلِيلا</span>
							</div>
							<div class="layer-1-2">
								<h2 class="secoud-title">تصفح أفضل الدورات.</h2>
							</div>
						</div>
						<div class="layer-1-3">
							<div class="search-course mb30 relative-position">
								
									<input class="course" name="course" id="course" type="text" placeholder="أبحث عما يناسبك و تريد تعلّمه">
									<div class="nws-button text-center  gradient-bg text-capitalize">
										<button type="submit" id="submitSearch" value="Submit">إبحث</button> 
									</div>
									<div class="display-search-course">
									
									</div>
								
							</div>
							<div class="layer-1-4">
								<div class="slider-course-category ul-li text-center">
									<span class="float-left">بالتصنيف:</span>
									<ul>
									<?php
									$categories = get_categories( array(
										'orderby' => 'name',
										'order'   => 'ASC',
										'hide_empty'      => false
									) );
									 
									foreach( $categories as $category ) {
										$clink = get_category_link( $category->term_id );
										if ($category->name=='Uncategorized')
										{
											continue;
										}
									?>
									
										<li><a href="<?php echo $clink?>"><?php echo $category->name;?></a></li>
										
									<?php }?>	
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>
	<!-- End of slider section
		============================================= -->

   	<!-- Start of sponsor section
		============================================= -->
		<section id="sponsor" class="sponsor-section sponsor-2">
			<div class="container">
				<h2 class="text-center">هذا الموقع برعاية</h2>

				<div class="sponsorLogos  mt-5  d-flex justify-content-between">
                 <div class="colorAnim    animation" data-animation="fadeInUp" data-animation-delay="0.4s">
				 <p class="algo">ALGORITHM</p>  
				</div>
				<div class="colorAnim  animation" data-animation="fadeInUp" data-animation-delay="0.4s">
				   <p class="marvela">MARVELAHOST</p> 
				</div>
				<div class="colorAnim   animation" data-animation="fadeInUp" data-animation-delay="0.4s">
				<p class="galaxy">GALAXYPROG</p>  
				</div>

				</div>
					
			</div>
			</div>
		</section>
	<!-- End of sponsor section
		============================================= -->





	<!-- Start of why choose us section
		============================================= -->
		<section id="why-choose-us" class="why-choose-us-section">
			<div class="jarallax  backgroud-style">
				<div class="container">
					<div class="section-title mb20 headline text-center animation" data-animation="fadeInUp" data-animation-delay="0.4s">
						<span class="subtitle text-uppercase">مجرة المبرمجين</span>
						<h2>ما الذي يميزنا عن غيرنا</h2>
					</div>
					<div id="service-slide-item" class="service-slide">

					   <?php
					     $args = array(

							'posts_per_page' =>3,
							'post_type'=>'skill'

						 );
						 $skills = new WP_Query($args);  
						 while($skills->have_posts())
						 {
							$skills->the_post();
						 
					   ?>
						<div class="service-text-icon animation" data-animation="fadeInUp" data-animation-delay="0.5s">
							<div class="service-icon float-left">
								<i class="text-gradiant flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
							</div>
							<div class="service-text">
								<h3 class="bold-font"><?php the_title();?></h3>
								<p><?php the_content(); ?></p>
							</div>
						</div>
						<?php
						}
						?>
					</div>
					<!-- /service-slide -->
					
				</div>
			</div>
		</section>
	<!-- End of why choose us section
		============================================= -->


	<!-- Start latest section
		============================================= -->
		<section id="latest-area" class="latest-area-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left animation" data-animation="fadeInUp" data-animation-delay="0.4s">
								<h2>آخر المقالات</h2>
							</div>
						<div class="latest-news-posts">
							<?php
							$argsLastPost = array(
								'post_type' => 'post',
								'post_status' => 'publish',
								'posts_per_page' => 2,
								'orderby' => 'rand',
								'order' => 'ASC',

							);
							$getLastPost = new WP_Query($argsLastPost);
							if ($getLastPost->have_posts())
							{
								while($getLastPost->have_posts())
								{
								$getLastPost->the_post();
							?>
							
								<div class="latest-news-area animation" data-animation="fadeInUp" data-animation-delay="0.5s">
									<div class="latest-news-thumbnile relative-position">
										<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'thumbPostCourseFrontPage');?>" alt="">
										<div class="hover-search">
											<i class="fas fa-search"></i>
										</div>
										<div class="blakish-overlay"></div>
									</div>
									<div class="date-meta">
										<i class="fas fa-calendar-alt"></i> <?php echo get_the_date(' d/m/Y' ); ?>
									</div>
									<h3 class="latest-title bold-font"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
									<div class="course-viewer ul-li">
										<ul>
											<li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
											<li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
										</ul>
									</div>
								</div>
								
								<!-- /post -->

							<?php
								}
						      }?>
							
								<div class="view-all-btn bold-fontvanimation" data-animation="fadeInUp" data-animation-delay="0.6s">
									<a href="#">عرض جميع المقالات <i class="fas fa-chevron-circle-left"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /latest-news -->
					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left animation" data-animation="fadeInUp" data-animation-delay="0.4s">
								<h2>آخر الدورات </h2>
							</div>
							<div class="latest-news-posts">
								
							<?php
							$argsLastcourse = array(
								'post_type' => 'course',
								'post_status' => 'publish',
								'posts_per_page' => 2,
								'orderby' => 'rand',
								'order' => 'ASC',

							);
							$getLastcourse = new WP_Query($argsLastcourse);
							if ($getLastcourse->have_posts())
							{
								while($getLastcourse->have_posts())
								{
									$getLastcourse->the_post();
							?>
							
								<div class="latest-news-area animation" data-animation="fadeInUp" data-animation-delay="0.5s">
									<div class="latest-news-thumbnile relative-position">
										<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'thumbPostCourseFrontPage');?>" alt="">
										<div class="hover-search">
											<i class="fas fa-search"></i>
										</div>
										<div class="blakish-overlay"></div>
									</div>
									<div class="date-meta">
										<i class="fas fa-calendar-alt"></i> <?php echo get_the_date(' d/m/Y' ); ?>
									</div>
									<h3 class="latest-title bold-font"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
									<div class="course-viewer ul-li">
										<ul>
											<li><a href=""><i class="fas fa-user"></i> 1.220</a></li>
											<li><a href=""><i class="fas fa-comment-dots"></i> 1.015</a></li>
										</ul>
									</div>
								</div>
								
								<!-- /post -->

							<?php
								}
						      }?>

								<div class="view-all-btn bold-fontvanimation" data-animation="fadeInUp" data-animation-delay="0.6s">
							      	<a href="#">عرض جميع الدورات <i class="fas fa-chevron-circle-left"></i></a>								</div>
							</div>
						</div>
					</div>
					

					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left animation" data-animation="fadeInUp" data-animation-delay="0.4s">
								<h2>فيديو <span>تحفيزي</span></h2>
							</div>
							<?php
							$argsMvideo = array(
								'post_type' => 'mvideo',
								'post_status' => 'publish',
								'orderby' => 'rand',
								'posts_per_page' => 1,
								

							);
							$getMvideo = new WP_Query($argsMvideo);
							if ($getMvideo->have_posts())
							{
								while($getMvideo->have_posts())
								{
								$getMvideo->the_post();
							?>
							<div class="latest-video-poster relative-position mb20 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'mvideo');?>" alt="">
								<div class="video-play-btn text-center gradient-bg">
									<a class="popup-with-zoom-anim" href="<?php echo get_field('video_link');?>"><i class="fas fa-play"></i></a>
								</div>
							</div>
							<div class="vidoe-text animation" data-animation="fadeInUp" data-animation-delay="0.6s">
								<h3 class="latest-title bold-font"><a href="#"><?php echo get_the_title();?></a></h3>
								<p class="mb25"><?php echo get_the_content();?></p>
							</div>
							<div class="view-all-btn bold-font animation" data-animation="fadeInUp" data-animation-delay="0.7s">
								<a href="#">عرض كل مقاطع الفيديو <i class="fas fa-chevron-circle-left"></i></a>
							</div>
								<?php } } ?>

						</div>
					</div>
					<!-- /. -->
				</div>
			</div>
		</section>
	<!-- End latest section
		============================================= -->


	

	<!-- Start of best course
		============================================= -->
		<section id="best-course" class="best-course-section">
			<div class="container">
				<div class="section-title mb45 headline text-center animation" data-animation="fadeInUp" data-animation-delay="0.4s">
					<span class="subtitle text-uppercase">الجودة شعارنا، وتعلمكم هدفنا</span>
					<h2>تصفح افضل الدورات</span></h2>
				</div>
				<div class="best-course-area mb45">
					<div class="row">
						<?php
						$argsCourse = array(
							'post_type' => 'course',
							'post_status' => 'publish',
							'orderby' => 'rand',
							'posts_per_page' => 8,
							

						);
						$getCourse = new WP_Query($argsCourse);
						if ($getCourse->have_posts())
						{
							while($getCourse->have_posts())
							{
							$getCourse->the_post();
						?>
						
						<div class="col-md-3">
							<div class="best-course-pic-text relative-position animation" data-animation="fadeInUp" data-animation-delay="0.5s">
								<div class="best-course-pic relative-position">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'courseFrontPage');?>" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
										<i class="<?php echo get_field('icon_badge_course');?>"></i>
										<span><?php echo get_field('badge_course');?></span>
									</div>
									<div class="course-price text-center gradient-bg">
										<span><?php echo get_field('price_course');?></span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="<?php the_permalink();?>">تفاصيل الدورة <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
									</div>
									
								</div>
							</div>
						</div>
						<!-- /course -->
							<?php } } ?>			
					
					</div>
				</div>

				
			</div>
		</section>
	<!-- End of best course
		============================================= -->

		<!-- Start FAQ section
		============================================= -->
		<section id="faq" class="faq-section faq-secound-home-version backgroud-style">
			<div class="container">
				<div class="section-title mb45 headline text-center animation" data-animation="fadeInUp" data-animation-delay="0.4s">
					<span class="subtitle text-uppercase">بالطبع أسئلة وأجوبة</span>
					<h2>بعض الأجوبة عن الأسئلة التي تتكرّر</h2>
				</div>

				<div class="faq-tab mb65">
					<div class="faq-tab-ques  ul-li">
						<div class="tab-button text-center mb65 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
							<ul class="product-tab">
							<?php
								$countFaqCat = 1;
								$countFaqAnss = 1;
								$argsFaqCat = array(
									'post_type' => 'faqcat',
									'post_status' => 'publish',
									'posts_per_page' => -1,
									'order' => 'ASC'
									

								);
								$getFaqCat = new WP_Query($argsFaqCat);
								if ($getFaqCat->have_posts())
								{
									while($getFaqCat->have_posts())
									{
										$getFaqCat->the_post();
								?>
								<li <?php if($countFaqCat==1){?> class="active"<?php }?> rel="tab<?php echo $countFaqCat;?>"><?php the_title();?> </li>
								<?php
								$getFaqAnss = get_field("faqans");
								if ($getFaqAnss)
								{
									$getContentFaqAns .='
									
									<div id="tab'.$countFaqCat.'" class="tab-content-1 pt35">
										<div id="accordion" class="panel-group">';
									foreach($getFaqAnss as $getFaqAns)
                                         {
											$getContentFaqAns .='
											
									<div class="panel animation" data-animation="fadeInUp" data-animation-delay="0.6s">
										<div class="panel-title" id="headingOne">
											<h3 class="mb-0">
												<button class="btn btn-link" data-toggle="collapse" data-target="#collapse'.$countFaqAnss.'" aria-expanded="true" aria-controls="collapseOne">
													'. get_the_title($getFaqAns->ID).'
												</button>
											</h3>
										</div>
										<div id="collapse'.$countFaqAnss.'" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="panel-body">
											 '.$getFaqAns->post_content.'
											</div>
										</div>
									</div>
									'; 
									$countFaqAnss++;
								}
									$getContentFaqAns .='
									</div></div>';
								}
								$countFaqCat++;
									}
								}
								?>
							</ul>
						</div>
						<!-- /tab-head -->

						<!-- tab content -->
						<div class="tab-container">

							<?php echo $getContentFaqAns;?>

							
						</div>
					</div>
				</div>

				<div class="about-btn text-center animation" data-animation="fadeInUp" data-animation-delay="0.9s">
					<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
						<a href="#">أطرح سؤالا </a>
					</div>
					<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
						<a href="#">اتصل بنا </a>
					</div>
				</div>
			</div>
		</section>
	<!-- End FAQ section
		============================================= -->

	
	<!-- Start  teacher section
		============================================= -->
		<section id="teacher-2" class="secound-teacher-section">
			<div class="container">
				<div class="section-title mb35 headline text-left animation" data-animation="fadeInUp" data-animation-delay="0.4s">
					<span class="subtitle ml42"> STAFFS</span>
					<h3>المسؤولين عن الموقع</h3>
				</div>
				<div class="teacher-secound-slide">
					<div class="teacher-img-text relative-position text-center animation" data-animation="fadeInUp" data-animation-delay="0.5s">
						<div class="teacher-img-social relative-position">
							<img src="<?php echo get_theme_file_uri('assets/img/teacher/mkh.png'); ?>" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Meziane Khalil </span>
							<span class="teacher-designation">Be like</span>
						</div>
					</div>

					
				</div>

				<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font animation" data-animation="fadeInUp" data-animation-delay="0.8s">
					<a href="#">تعرف علينا</a>
				</div>
			</div>
		</section>
	<!-- End teacher section
		============================================= -->


	


	
<?php

get_footer('fpage');
?>


	