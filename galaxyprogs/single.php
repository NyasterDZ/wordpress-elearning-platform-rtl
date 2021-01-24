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
                                    
								</div>
								<h2><?php the_title();?></h2>

								<div class="date-meta text-uppercase">
									<span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(' d/m/Y' ); ?></span>
									<span><i class="fas fa-user"></i> <?php the_author();?></span>
									
								</div>
								<?php the_content(); ?>
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
					</div>

					<div class="col-md-3">
							<div class="side-bar">
							<div class="side-bar-widget">
									<h2 class="widget-title text-capitalize"><span></span>إقرأ أيضا</h2>
									<div class="post-categori ul-li-block">
										<ul>
										<?php
											
											$argsSideBarBlog = array(
		
												'post_type' => 'post',
												'post_status' => 'publish',
												'posts_per_page' => 6,
												'orderby' => 'rand',
												'order' => 'ASC',
		
											);
											$SideBarBlog = new WP_Query($argsSideBarBlog);  
											while($SideBarBlog->have_posts())
											{
												$SideBarBlog->the_post();
											
											?>
											
											<li class="cat-item"></i><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
											<?php
											}
											?>
										</ul>
									</div>
								</div>

								<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize">دورات أخرى</h2>
								<?php
									$argsCourseRequired = array(

										'post_type' => 'course',
										'post_status' => 'publish',
										'posts_per_page' => 4,
										'orderby' => 'rand',
										'order' => 'ASC',

									);
									$CourseRequired = new WP_Query($argsCourseRequired);  
									while($CourseRequired->have_posts())
									{
										$CourseRequired->the_post();
									
								?>
								<div class="latest-news-posts">
									<div class="latest-news-area">
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
									</div>
									
										<?php
										}?>
									<div class="view-all-btn bold-font">
										<a href="<?php echo site_url('/courses'); ?>">عرض جميع الدورات <i class="fas fa-chevron-circle-left"></i></a>
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