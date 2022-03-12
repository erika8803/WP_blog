<?php get_header(); ?>

<section class="archive blog">
    <div class="card-contents">
        <h3 class="text-title">Blog</h3>
        <div class="card-list-area">
            <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
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

<?php get_footer(); ?>
