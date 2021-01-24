<?php
get_header();
while(have_posts())
{
    the_post();
?>
	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold"><?php the_title();?></h2>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->


	<!-- Start of Blog single content
		============================================= -->
		<section id="blog-detail" class="blog-details-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="blog-details-content">
							<div class="post-content-details">
								<div class="blog-detail-thumbnile mb35">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="">
                                    <?php // the_post_thumbnail(); ?>
								</div>
								<h2><?php the_title();?></h2>

								<div class="date-meta text-uppercase">
									<span><i class="fas fa-calendar-alt"></i> 26 أبريل 2018</span>
									<span><i class="fas fa-user"></i> PRO.THEO هنري</span>
									<span><i class="fas fa-comment-dots"></i> 15 تعليقات</span>
								</div>
								<?php the_content(); ?>
							</div>
							<div class="blog-share-tag">
								<div class="share-text float-left">
									شارك هذا الخبر
								</div>
								<div class="share-social ul-li float-right">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="blog-category ul-li">
								<ul>
									<li><a href="#">ثمار</a></li>
									<li><a href="#">veegetable</a></li>
									<li><a href="#">العصائر</a></li>
								</ul>
							</div>
							<div class="author-comment">
								<div class="author-img">
                                    <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' )); ?>" alt="">
                                    
								</div>
								<div class="author-designation-comment">
									بقلم: <span><?php the_author();?></span> 
									<p>
									<?php the_author_description();?>
									</p>
								</div>
							</div>
							<div class="next-prev-post">
								<div class="next-post-item float-left">
									<a href="#"><i class="fas fa-arrow-circle-right"></i>المنشور السابق</a>
								</div>

								<div class="next-post-item float-right">
									<a href="#">المقبل بوست<i class="fas fa-arrow-circle-left"></i></a>
								</div>
							</div>
						</div>

						

						<div class="blog-comment-area ul-li about-teacher-2">
							<div class="section-title-2  headline text-left">
								<h2>نشر <span>التعليقات.</span></h2>
							</div>

							<ul class="comment-list">
								<li>
									<div class=" comment-avater">
										<img src="assets/img/blog/ath-2.jpg" alt="">
									</div>
									
									<div class="author-name-rate">
										<div class="author-name float-left">
											بقلم: <span>فرانك لامبارد</span> 
										</div>
										<div class="comment-ratting float-right ul-li">
											<ul>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											</ul>
										</div>
										<div class="time-comment float-right">منذ 3 أيام</div>
									</div>
									<div class="author-designation-comment">
										<h3>دورة رائعة! أوصى للجميع</h3>
										<p>
											Lorem ipsum dolor sit amet، consectetuer adipiscing elit، sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam، quis nostrud exerci tation.
										</p>
									</div>
								</li>

								<li>
									<div class=" comment-avater">
										<img src="assets/img/blog/ath.jpg" alt="">
									</div>
									
									<div class="author-name-rate">
										<div class="author-name float-left">
											بقلم: <span>فرانك لامبارد</span> 
										</div>
										<div class="comment-ratting float-right ul-li">
											<ul>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											</ul>
										</div>
										<div class="time-comment float-right">منذ 3 أيام</div>
									</div>
									<div class="author-designation-comment">
										<h3>دورة رائعة! أوصى للجميع</h3>
										<p>
											Lorem ipsum dolor sit amet، consectetuer adipiscing elit، sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam، quis nostrud exerci tation.
										</p>
									</div>
								</li>
							</ul>

							<div class="reply-comment-box">
								<div class="section-title-2  headline text-left">
									<h2>الرد على   <span>التعليقات.</span></h2>
								</div>

								<div class="teacher-faq-form">
									<form method="POST" action="/no-form" data-lead="Residential">
										<div class="row">
											<div class="col-md-6">
												<label for="name">اسمك</label>
												<input type="text" name="name" id="name" required="required">
											</div>
											<div class="col-md-6">
												<label for="phone">عنوان البريد الإلكتروني</label>
												<input type="tel" name="phone" id="phone" required="required">
											</div>
										</div>
										<label for="comments">رسالة</label>
										<textarea name="comments" id="comments" rows="2" cols="20" required="required"></textarea>
										<div class="nws-button text-center  gradient-bg text-uppercase">
											<button type="submit" value="Submit">ارسل رسالة الآن</button> 
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
							<div class="side-bar">
								<div class="side-bar-search">
									<form action="#" method="get">
										<input type="text" class="" placeholder="Search">
										<button type="submit"><i class="fas fa-search"></i></button>
									</form>
								</div>

								<div class="side-bar-widget">
									<h2 class="widget-title text-capitalize"><span>فئات</span> بلوق <span>.</span></h2>
									<div class="post-categori ul-li-block">
										<ul>
											<li class="cat-item"><a href="#">كتاب التصميم التصويري</a></li>
											<li class="cat-item"><a href="#">حقيبة الطالب</a></li>
											<li class="cat-item"><a href="#">تي شيرت التعليم</a></li>
											<li class="cat-item"><a href="#">مراقبة الطالب</a></li>
											<li class="cat-item"><a href="#">فيديو تعليمي</a></li>
											<li class="cat-item"><a href="#">منتجات اخرى</a></li>
										</ul>
									</div>
								</div>

								<div class="side-bar-widget">
									<h2 class="widget-title text-capitalize"><span></span>الأخبار <span>ذات الصلة</span> .</h2>
									<div class="latest-news-posts">
										<div class="latest-news-area">
											<div class="latest-news-thumbnile relative-position">
												<img src="assets/img/blog/lb-1.jpg" alt="">
												<div class="hover-search">
													<i class="fas fa-search"></i>
												</div>
												<div class="blakish-overlay"></div>
											</div>
											<div class="date-meta">
												<i class="fas fa-calendar-alt"></i> 26 أبريل 2018
											</div>
											<h3 class="latest-title bold-font"><a href="#">التسويق التابعة دليل المبتدئين.</a></h3>
										</div>
										<!-- /post -->

										<div class="latest-news-posts">
											<div class="latest-news-area">
												<div class="latest-news-thumbnile relative-position">
													<img src="assets/img/blog/lb-2.jpg" alt="">
													<div class="hover-search">
														<i class="fas fa-search"></i>
													</div>
													<div class="blakish-overlay"></div>
												</div>
												<div class="date-meta">
													<i class="fas fa-calendar-alt"></i> 26 أبريل 2018
												</div>
												<h3 class="latest-title bold-font"><a href="#">رقم 1 أفضل دورة على الإنترنت 2018.</a></h3>
											</div>
											<!-- /post -->
										</div>

										<div class="view-all-btn bold-font">
											<a href="#">عرض جميع الأخبار <i class="fas fa-chevron-circle-right"></i></a>
										</div>
									</div>
								</div>

								<div class="side-bar-widget">
									<h2 class="widget-title text-capitalize"><span>علامة</span> شعبية <span>.</span></h2>
									<div class="tag-clouds ul-li">
										<ul>
											<li><a href="#">ثمار</a></li>
											<li><a href="#">veegetable</a></li>
											<li><a href="#">العصائر</a></li>
											<li><a href="#">أكل طبيعى</a></li>
											<li><a href="#">طعام</a></li>
											<li><a href="#">خبز</a></li>
											<li><a href="#">طبيعي &gt;&gt; صفة</a></li>
											<li><a href="#">صحي</a></li>
										</ul>
									</div>
								</div>

								<div class="side-bar-widget">
									<h2 class="widget-title text-capitalize"><span></span>دورة <span>مميزة</span> .</h2>
									<div class="featured-course">
										<div class="best-course-pic-text relative-position">
											<div class="best-course-pic relative-position">
												<img src="assets/img/blog/fb-1.jpg" alt="">
												<div class="trend-badge-2 text-center text-uppercase">
													<i class="fas fa-bolt"></i>
													<span>الشائع</span>
												</div>
											</div>
											<div class="best-course-text">
												<div class="course-title mb20 headline relative-position">
													<h3><a href="#">تصميم وتطوير موقع مستجيب بالكامل.</a></h3>
												</div>
												<div class="course-meta">
													<span class="course-category"><a href="#">تم تصميم الموقع </a></span>
													<span class="course-author"><a href="#">250 طالب</a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</section>
	<!-- End of Blog single content
		============================================= -->


 <?php
}
 get_footer();
 ?>