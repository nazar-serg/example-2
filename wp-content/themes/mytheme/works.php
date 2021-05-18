<?php 
/*
Template name: Works
Template Post Type: post, page, product
*/
?>
  <?php get_header(); ?>
    <div class="page">
      <div class="works-page page__container container">
       <h1 class="works-heading title">
            <?php the_title(); ?>
        </h1>
        <div class="works">
          <?php
              $posts = get_posts( array(
                'numberposts' => 4,
                'category'    => '10, 11, 12',
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
              <div class="works__item">
                <div class="works__image">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( "photo_article_home" ); ?>
                  </a>
                </div>
                <div class="works__body">
                  <div class="works__title">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </div>
                  <div class="works__info">
                    <div class="works__year">
                      <?php
                    if (get_the_tag_list()) { // есть ли вообще тэги
                      $tags = get_the_terms( $post->ID, 'post_tag'); // получаем все тэги
                      foreach ($tags as $tag) {
                        echo $tag->name; // рисуем как нужно
                      }
                    }
                  ?>
                    </div>
                    <div class="works__category">
                      <?php
                      foreach ( get_the_category() as $category ) {
                        printf(
                          '<a href="%s" class="link link_text">%s</a>', // Шаблон вывода ссылки
                          esc_url( get_category_link( $category ) ), // Ссылка на рубрику
                          esc_html( $category->name ) // Название рубрики
                        );
                      }
                    ?>
                    </div>
                  </div>
                  <div class="works__text">
                    <?php the_content( "plugin_myContentFilter" ); ?>
                  </div>
                </div>
              </div>
            <?php
              }

              wp_reset_postdata(); // сброс
              ?>
      </div>
      </div>
    </div>
    <?php get_footer(); ?>