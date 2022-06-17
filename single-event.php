<?php get_header('event'); ?>

<main class="main">
    <section class="l_single_event_post">
        <div class="l-inner">
            <div class="section_content">
                <div class="l_single_event_post_content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h3 class="l_single_event_post_title"><?php the_title(); ?></h3>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php else : echo '<img src="' . get_template_directory_uri() . '/img/l-event/l-event-thubnail01.jpg"alt="">'; ?>
                            <?php endif; ?>
                            <?php the_content(); ?>

                    <?php endwhile;
                    endif; ?>
                    <div class="l_single_post_event_map">

                    </div>
                    <ul class="single_event_nav_link">
                        <li class="single_event_nav_prev_link"><?php previous_post_link(' %link', '前の記事'); ?></li>
                        <li class="single_event_nav_archive_link"><a href="<?php echo get_post_type_archive_link('event'); ?>">記事一覧</a></li>
                        <li class="single_event_nav_next_link"><?php next_post_link('%link ', '次の記事へ'); ?></li>
                    </ul>
                    <?php get_template_part('template/contact-link');?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>