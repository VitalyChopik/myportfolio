<?php

add_action("wp_ajax_load_more", "load_posts");
add_action("wp_ajax_nopriv_load_more", "load_posts");
function load_posts()
{
    $args = json_decode(stripslashes($_POST["query"]), true);
    $args["paged"] = $_POST["page"] + 1;

    $query = new WP_Query($args);
    $html = '';

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

      $html .= get_template_part("template-parts/card-post");

        endwhile;
    endif;

    wp_reset_postdata();
    die($html);
}

// category posts
add_action('wp_ajax_load_posts_by_category', 'load_posts_by_category');
add_action('wp_ajax_nopriv_load_posts_by_category', 'load_posts_by_category');

function load_posts_by_category() {
  $category_slug = $_POST['category_slug'];
	if( $category_slug){
    ?>
      <div class="tabs__content__item" id="<?php echo $category_slug?>">
        <!-- Cards-->
        <?php		
        global $post;
        $query = new WP_Query( [
          'post_type'=>'post',
          'posts_per_page' => 6,
          'category_name' => $category_slug
        ] );

        if ( $query->have_posts() ) { ?>
        <div class="cards-blog">
          <?php
          while ( $query->have_posts() ) {
            $query->the_post();
            $categories = get_categories();
            ?>
              <?php echo get_template_part( 'template-parts/card-post'); ?>
            <?php 
          }
        ?>
        </div>
        <?php }
        wp_reset_postdata();?>
        <?php // AJAX загрузка постов
        if ($query->max_num_pages > 1) { ?>
            <script>
                var current_page = 1;
            </script>
            <div class="blog__items__cta center mg-t-32" data-param-posts='<?= json_encode($query->query_vars); ?>' data-max-pages="<?= $query->max_num_pages; ?>"><span class="btn btn--second btn-more-less">Show More</span></div>
        <?php } ?>
      </div>
    <?php
		wp_die();
	} else {
    ?>
      <div class="tabs__content__item" id="all">
        <!-- Cards-->
        <?php		
        global $post;
        $query = new WP_Query( [
          'post_type'=>'post',
          'posts_per_page' => 6,
        ] );

        if ( $query->have_posts() ) { ?>
        <div class="cards-blog">
          <?php
          while ( $query->have_posts() ) {
            $query->the_post();
            $categories = get_categories();
            ?>
              <?php echo get_template_part( 'template-parts/card-post'); ?>
            <?php 
          }
        ?>
        </div>
        <?php }
        wp_reset_postdata();?>
        <?php // AJAX загрузка постов
        if ($query->max_num_pages > 1) { ?>
            <script>
                var current_page = 1;
            </script>
            <div class="blog__items__cta center mg-t-32" data-param-posts='<?= json_encode($query->query_vars); ?>' data-max-pages="<?= $query->max_num_pages; ?>"><span class="btn btn--second btn-more-less">Show More</span></div>
        <?php } ?>
      </div>
    <?php
		wp_die();
	}

}
