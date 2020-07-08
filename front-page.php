<?php get_header(); ?>
		<section id="banner" class="banner--lg">
			<h1 class="banner--heading ">
				Beauty - but make it digital
			</h1>
			<p class="banner--tagline">
				I help sole-traders and SME's in the beauty industry maximise their
				potential through their online presence
			</p>
			<button class="banner--btn btn--cta">
				<a href="<?php echo site_url('/contact'); ?>">Get in touch with me</a>
			</button>
		</section>
		<main>
			<section class="section features">
				<div class="box features--box one">
					<h4 class="h4 features--heading">
						Running a business is enough work...
					</h4>
					<p class="p features--tagline">
						without you having to play the role of web developer, SEO integrator
						and social media manager too! Leave it to me - it's what I do best.
					</p>
				</div>
				<div class="box features--box two">
					<h4 class="h4 features--heading">Services I offer</h4>
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
							<p class="p features--tagline">Continued support</p>
						</li>
					</ul>
				</div>
				<div class="box features--box three">
					<h4 class="h4 features--heading">Let's work together</h4>
					<p class="p features--tagline">
						With my help, you can take your business to new heights. I offer a
						variety of web solutions so you can do what you need to do while I
						handle the digital stuff.
					</p>
					<button class="features--btn btn--secondary">
						<a href="<?php echo site_url('/contact'); ?>">Get in touch</a>
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
                <h4 class="h4"><a href="<?php echo site_url('/blog'); ?>">Latest blog posts</a></h4>
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
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="" />
							</a>
						</div>
						<div class="cards--card-description">
							<a href="<?php the_permalink();?>">
								<h4 class="h4">
									<?php the_title();?>
								</h4>
							</a>
							<p>
                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
							</p>
							<a class="btn--secondary cards--card-btn" href="<?php the_permalink(); ?>">Read more</a>
						</div>
                    </div>
                    
                    <?php } wp_reset_query();?>
				</section>
			</section>
     
		</main>

<?php get_footer(); ?>