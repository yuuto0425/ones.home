<?php if (paginate_links()) : ?>
    <div class=" paginate_items">
        <?php echo
        paginate_links(
            array(
                'end_size' => 0,
                'mid_size' => 1,
                'prev_next' => true,
                'prev_text' => '<img src="' . esc_url(get_template_directory_uri()) . '/img/paginate/paginate-prev.png" alt="">',
                'next_text' => '<img src="' . esc_url(get_template_directory_uri()) . '/img/paginate/paginate-next.png" alt="">',
            )
        ); ?>
    </div>
<?php endif; ?>