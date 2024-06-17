        <?php
        $post_id = get_the_ID();
        $categories = get_the_category($post_id);

        // Recent Articles Section

        if ($categories) {
            $category_id = $categories[0]->term_id;
            $args = array(
                'category__in' => array($category_id),
                'post__not_in' => array($post_id),
                'posts_per_page' => 6,
            );

            $related_posts = get_posts($args);

            if ($related_posts) {


                echo '<section class="related-articles"><h3>Related articles</h3><ul>';
                foreach ($related_posts as $post) {
                    setup_postdata($post);
                    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
                wp_reset_postdata();
                echo ' </ul></section>';
            }
        }

        // Recent Articles Section
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 6,
            'post_status' => 'publish',
        ));

        if ($recent_posts->have_posts()) {
            echo '<section class="recent-articles"><h3>Recent articles</h3><ul>';
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
            wp_reset_postdata();
            echo '</ul></section>';
        }
        ?>