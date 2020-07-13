<?php get_header(); ?>
		<section id="banner" class="banner--lg">
			<h1 class="banner--heading ">
				Beauty made digital provides digital solutions for businesses in the beauty services sector
			</h1>
			<p class="banner--tagline">
				Quite simply, I help you get more clients. 
			</p>
			<button class="banner--btn btn--cta">
				<a href="<?php echo site_url('/contact'); ?>">I want more clients!</a>
			</button>
		</section>
		<main>
			<section class="section features">
			<div class="box features--box two" id="services">
					<h4 class="h4 features--heading" >How I get you more clients</h4>
					<ul class="features--list">
						<li>
							<i class="fas fa-laptop-code"></i>
							<p class="p features--tagline">Web development</p>
							
						</li>
						<li>
							<i class="fab fa-searchengin"></i>
							<p class="p features--tagline">Search engine optimisation</p>
							
						</li>
						<li>
							<i class="fas fa-hashtag"></i>
							<p class="p features--tagline">Social media management</p>
							
						</li>
						<li>
							<i class="fas fa-infinity"></i>
							<p class="p features--tagline">Website maintenance</p>
							
						</li>
					</ul>
				</div>
				<div class="box features--box one">
					<h4 class="h4 features--heading">
						Tailored to beauty services
					</h4>
					<p class="p features--tagline">
						I provide everything you need to maximise your beauty business' potential. From beautiful, responsive design with editable content, to social media integration and analytics.
					</p>
					
				</div>
				
				<div class="box features--box three">
					<!-- <h4 class="h4 features--heading">Let's work together</h4> -->
					<!-- <p class="p features--tagline">
						You focus on your expertise. Let me assist you with mine. 
					</p> -->
					<h4 class="h4 features--heading">You focus on your expertise. Let me assist you with mine. </h4>
					<button class="features--btn btn--secondary">
						<a href="<?php echo site_url('/contact'); ?>">Let's work together</a>
					</button>
				</div>
			</section>
			<!-- <section class="section testimonials">
				<div class="box testimonials--box">
					<h4 class="h4 testimonials--heading">What my clients think</h4>
					<p class="p testimonials--tagline">Humz is v cool</p>
				</div>
            </section> -->
            <section class="section posts frontpage--posts">
                <h4 class="h4"><a class="link"  href="<?php echo site_url('/blog'); ?>">Latest blog posts</a></h4>
				<section class="section cards">
                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                    );

                    $blogposts = new WP_Query($args);
                    
                    while($blogposts -> have_posts()) {
                        $blogposts -> the_post();
                    

                ?>
					<div class="cards--card">
						<div class="cards--card-image">
							<a href="<?php the_permalink();?>">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="blog-post-thumbnail-image" />
							</a>
						</div>
						<div class="cards--card-description">
							<a href="<?php the_permalink();?>">
								<h4 class="h4">
									<?php the_title();?>
								</h4>
							</a>
							<p class="p--subtext">By <?php the_author();?> on <?php the_time('F j, Y'); ?> in <a href="#"><?php echo get_the_category_list(', ');?></a></p>
							<p>
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
							</p>
							<a class="btn--secondary cards--card-btn" href="<?php the_permalink(); ?>">Read more</a>
						</div>
                    </div>
                    
                    <?php } wp_reset_query();?>
				</section>
			</section>
     
		</main>

<?php get_footer(); ?>