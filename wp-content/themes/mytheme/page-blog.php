<?php 
/*
Template name: Page Blog
Template Post Type: post
*/
?>
  <?php get_header(); ?>
    <div class="page">
      <div class="article">
        <h1 class="article__title">
                <?php the_title(); ?>
            </h1>
        <div class="article__info">
          <div class="article__year">
            <?php
                    if (get_the_tag_list()) { // есть ли вообще тэги
                      $tags = get_the_terms( $post->ID, 'post_tag'); // получаем все тэги
                      foreach ($tags as $tag) {
                        echo $tag->name; // рисуем как нужно
                      }
                    }
                  ?>
          </div>
          <div class="article__category">
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
        <div class="article__text">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>