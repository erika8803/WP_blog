<?php get_header(); ?>

<section class="archive portfolio">
    <div class="card-contents">
        <h2 class="text-title">Portfolio</h2>
        <p class="text-info">-作品一覧-</p>
        <div class="card-list-area">
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
            <div class="card">
                <div class="post-image">
                    <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()): ?>
                        <img class="" src="<?php the_post_thumbnail(array(250, 250), array( 'class' => 'thumbimg')); ?>
                    <?php else: ?>
                        <img class="" src="<?php bloginfo('template_url'); ?>/images/nophoto.jpg">
                    <?php endif; ?>
                    </a>
                </div>
                <div class="card-title">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo get_the_date(); ?></p>
                        <p><?php the_excerpt(); ?></p>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>

</section>


