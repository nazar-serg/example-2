<?php 
/*
Template name: Блог
*/
?>
  <?php get_header(); ?>
    <div class="page">
      <div class="blog page__container container">
        <h1 class="blog__title title">
            <?php the_title(); ?>
        </h1>
        <?php
              // параметры по умолчанию
              $posts = get_posts( array(
                'numberposts' => 8,
                'category'    => 4,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true,
              ) );

              foreach( $posts as $post ){ setup_postdata($post);
               ?>
          <div class="blog__items">
            <div class="blog__item">
              <div class="blog__article-name">
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
              </div>
                  <div class="blog__info">
                    <div class="blog__date">
                      <?php the_time('j M, Y'); ?>
                    </div>
                    <span class="blog__reparator">|</span>
                    <div class="blog__category">
                      <?php
                    if (get_the_tag_list()) { // есть ли вообще тэги
                      $tags = get_the_terms( $post->ID, 'post_tag'); // получаем все тэги
                      foreach ($tags as $tag) {
                        echo $tag->name; // рисуем как нужно
                      }
                    }
                  ?>
                    </div>
                  </div>
                  <div class="blog__text text">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_content(); ?>
                  </a>
                  </div>
              </div>
          </div>
          <?php
              }

              wp_reset_postdata(); // сброс
              ?>
      </div>
    </div>
    <?php get_footer(); ?>