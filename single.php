<?php get_header(); ?>
    
    <section class="single blog">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <div class="post-thumbnail-image">
        <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail(array(1000,600, true), array( 'class' => 'thumbimg')); ?>
        <?php else: ?>
            <img src="<?php bloginfo('template_url'); ?>/images/nophoto.jpg">
        <?php endif; ?>
        </div>
        <div class="post-contents">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <p class="post-date-category" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?>
            【<?php the_category(', '); ?>】</p>
            <p><?php the_content('Read more'); ?></p>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php previous_post_link('%link', '古い記事へ'); ?>
            <?php next_post_link('%link', '新しい記事へ'); ?>
        </div>
    </section>
    
<?php get_footer(); ?>