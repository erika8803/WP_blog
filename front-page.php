<?php get_header(); ?>

    <section class="main">
        <div class="container">
            <div class="left-contents">
                <div class="card-contents">
                    <h1 class="text-title">
                        <span>App</span>
                    </h1>
                    <table class="information-list">
                        <?php 
                            $args = [
                                'post_type' => 'portfolio',
                                'posts_per_page' => 10,
                                'paged' => $pased
                            ];
                            $the_query = new WP_Query($args); 
                        ?>
                        <?php if( $the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <tr>
							<td>
								<h2><?php echo get_the_date(); ?></h2>
							</td>
							<td>
								<a href="<?php the_permalink(); ?>">
									<h2><?php the_title(); ?></h2>
								</a>
							</td>

                        </tr>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </table>
                </div>

                <div class="card-contents">
                    <h2 class="text-title">Blog</h2>
                    <div class="card-list-area">
                    <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <div class="card-list">
                            <div class="card-image">
                                <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(array(250, 250), array( 'class' => 'thumbimg')); ?>
                                <?php else: ?>
                                    <img class="card-image" src="<?php bloginfo('template_url'); ?>/images/nophoto.png">
                                <?php endif; ?>
                                </a>
                            </div>
                            <div class="card-title">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="date"><?php echo get_the_date(); ?></p>
                                    <h2><?php the_title(); ?></h2>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">
                        <div class="line-botton">
                            Blog一覧
                        </div>
                    </a>
                </div>
            </div>
            <div class="right-contents">
                <div class="card-contents">
                    <h2 class="text-title">Profile</h2>
                    <div class="contents">
                        <ul class="profile">
                            <li>
                                <img class="profile-image" src="<?php bloginfo('template_url'); ?>/images/profile.png">
                                <p>自己紹介</p>
                                <p class="profile-text">
                                    はじめまして、えりかといいます。
									JavaScript/英語/フランス語勉強中です。
                                </p>
                            </li>
                        </ul>
						<ul class="icon">
							<li class="github">
                                <a href="https://github.com/Erika3333/" target="_blank" rel="noopener noreferrer" >
									<img class="image" src="<?php bloginfo('template_url'); ?>/images/github.png">
								</a>
							</li>
							<li class="twitter">
                                <a href="https://twitter.com/et8803" target="_blank" rel="noopener noreferrer">
									<img class="image" src="<?php bloginfo('template_url'); ?>/images/twitter.png">
                                </a>
							</li>
							<li class="instagram">
                                <a href="https://www.instagram.com/erika_okinawa/" target="_blank" rel="noopener noreferrer">
									<img class="image" src="<?php bloginfo('template_url'); ?>/images/instagram.png">
                                </a>
							</li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>