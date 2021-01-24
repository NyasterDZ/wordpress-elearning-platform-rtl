<?php
get_header();
?>

	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">مدونة الموقع</h2>
					</div>
					
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

	<!-- Start of blog content
		============================================= -->
		<section id="blog-item" class="blog-item-post">
			<div class="container">
				<div class="blog-content-details">
					<div class="row">
						<div class="col-md-9">
							<div class="blog-post-content">
								
								<div class="genius-post-item">
									<div class="tab-container">
										

										<div id="tab2" class="tab-content-1 pt35">
											<div class="blog-list-view">
											<?php
											
											$argsBlogTab1 = array(
		
												'post_type' => 'post',
												'post_status' => 'publish',
												'posts_per_page' => 10,
												'orderby' => 'title',
												'order' => 'ASC',
												'paged' => get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1
												
		
											);
											$BlogTab1 = new WP_Query($argsBlogTab1);  
											while($BlogTab1->have_posts())
											{
												$BlogTab1->the_post();
											
											?>
												<div class="list-blog-item">
													<div class="row">

														<div class="col-md-6">
															<div class="blog-post-img-content">
																<div class="blog-img-date relative-position">
																	<div class="blog-thumnile">
																		<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="">
																	</div>
																	<div class="course-price text-center gradient-bg">
																		<span><?php echo get_the_date(' d/m/Y' ); ?></span>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-md-6">
															<div class="blog-title-content headline">
																<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
																<div class="blog-content">
																<?php the_excerpt(); ?>
																</div>

																<div class="view-all-btn bold-font">
																	<a href="<?php the_permalink();?>">إقرأ المزيد <i class="fas fa-chevron-circle-left"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<?php
											}
												?>
												
											</div>
										</div><!-- 1st tab -->

										
								</div>
								
								<?php numeric_posts_nav($BlogTab1); ?>

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
			</div>
		</section>
	<!-- End of blog content
		============================================= -->


	 <?php

	 get_footer();
	 ?>