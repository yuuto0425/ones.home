<div class="home_info_cate_wrapper">
                    <div class="home_info_cate_left">
                        <div class="home_info_cate_left_map">
                            <h3 class="home_info_cate_left_map_title">エリアで探す</h3>
                            <?php
                            $args = array(
                                'order' => 'ASC',
                                'orderby' => 'id',
                                'parent' => 4,
                            );
                            $categories = get_categories($args);
                            ?>
                            <?php foreach ($categories as $category) : ?>
                                <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="home_info_cate_right">
                        <div class="home_info_cate_right_wrapper">
                            <div class="home_info_cate_right_price">
                                <h3 class="home_info_cate_right_price_title">家賃の価格から探す</h3>
                                <div class="home_info_cate_right_price_btn">
                                    <?php
                                    $args = array(
                                        'order' => 'ASC',
                                        'orderby' => 'id',
                                        'parent' => 1,
                                    );
                                    $categories = get_categories($args);
                                    ?>
                                    <?php foreach ($categories as $category) : ?>
                                        <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="home_info_cate_right_wrap">
                                <div class="home_info_cate_right_type">
                                    <h3 class="home_info_cate_right_type_title">建物の種別から探す</h3>
                                    <div class="home_info_cate_right_type_btn">
                                        <?php
                                        $args = array(
                                            'order' => 'ASC',
                                            'orderby' => 'id',
                                            'parent' => 3,
                                        );
                                        $categories = get_categories($args);
                                        ?>
                                        <?php foreach ($categories as $category) : ?>
                                            <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url(home_url('popular')); ?>" class="home_info_cate_right_order">人気順で見てみる</a>
                            </div>
                        </div>
                    </div>
                </div>