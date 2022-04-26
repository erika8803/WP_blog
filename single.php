<?php get_header(); ?>
    
    <section class="single blog">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <div class="post-contents">
        <?php if (has_post_thumbnail()): ?>
            <div class="post-thumbnail-image" 
                style="background-image: url(
                    <?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>)">
            </div>
        <?php else: ?>
            <img src="<?php bloginfo('template_url'); ?>/images/nophoto.jpg">
        <?php endif; ?>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="post-text">
                <p class="post-date-category" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?>
                【<?php the_category(', '); ?>】</p>
                <p><?php the_content('Read more'); ?></p>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="pagination">
                <?php previous_post_link('%link', '古い記事へ'); ?>
                <?php next_post_link('%link', '新しい記事へ'); ?>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>