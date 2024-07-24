<?php get_header(); ?>

<!-- メインビュー -->
<div class="campaign-mv sub-mv">
  <div class="sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-top-pc.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-top-sp.jpg"
        alt="夫婦のように向かい合う2匹のチョウチョウウオ" />
    </picture>
  </div>
  <h2 class="sub-mv__title">campaign</h2>
</div>

<div class="inner">
  <div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>
  </div>
</div>

<!-- campaign-page -->
<div class="campaign-page layout-sub-page fish-icon">
  <div class="campaign-page__inner inner">
    <div class="campaign-page__button-list contents-button-list">
      <?php
        $current_term_id = 0;
        
        // タームの取得
        $queried_object = get_queried_object();
        if ($queried_object instanceof WP_Term) :
            $current_term_id = $queried_object->term_id;
        endif;
        
        // カテゴリーの取得
        $terms = get_terms(array(
          'taxonomy' => 'campaign_category',
          'orderby' => 'name',
          'order' => 'ASC',
          'number' => 10
        ));
        ?>
      <?php
        // ALL タブ
          $home_class = (is_post_type_archive()) ? 'is-active' : '';
          $home_link = sprintf(
              '<li class="contents-button-list__button %s"><a href="%s" class="">ALL</a></li>',
              $home_class,
              esc_url(home_url('/campaign')),
              esc_attr(__('View all posts', 'textdomain'))
          );
          echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

          // タームのリンク
          foreach ($terms as $term):
              $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
              $term_link = sprintf('<li class="contents-button-list__button %s"><a href="%s" >%s</a></li>', $term_class, esc_url(get_term_link($term->term_id)), esc_html($term->name));
              echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
          endforeach;
          ?>
    </div>
    <div class="campaign-page__contents">
      <div class="campaign-page__content">
        <ul class="campaign-page__items two-column-cards">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <li class="campaign-page__item campaign-page__item--small">
            <a href="" class="campaign-page-card campaign-card">
              <figure class="campaign-page-card__img campaign-card__img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                <img src=" <?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
                  alt="海水の中で煌びやかに光る魚群" />
                <?php endif; ?>
              </figure>
              <div class="campaign-card__body">
                <div class=" campaign-card__metabox">
                  <div class="campaign-card__meta">
                    <?php
                    $taxonomy_terms = get_the_terms(get_the_ID(), 'campaign_category');
                    if (!empty($taxonomy_terms)) {
                      foreach ($taxonomy_terms as $taxonomy_term) {
                        echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                      }
                    }
                    ?>
                  </div>
                  <p class="campaign-card__title campaign-card__title--large "><?php the_title(); ?></p>
                </div>
                <div class="campaign-card__box">
                  <div class="campaign-card__menu">
                    全部コミコミ(お一人様)
                  </div>
                  <?php  $pricegroup = get_field('campaign-card__price'); ?>
                  <div class="campaign-card__price">
                    <?php if (!empty($pricegroup['campaign-card__original-price'])) : ?>
                    <div class="campaign-card__original-price">
                      ￥<?php echo $pricegroup['campaign-card__original-price']; ?></div>
                    <?php endif; ?>
                    <?php if (!empty($pricegroup['campaign-card__discounted-rate'])) : ?>
                    <div class="campaign-card__discounted-rate">
                      ￥<?php echo $pricegroup['campaign-card__discounted-rate']; ?>
                    </div>
                    <?php endif; ?>
                  </div>
                  <p class="campaign-card__text u-desktop">
                    <?php 
                     $text = mb_substr(get_field('campaign-card__text'),0,200,);
                     echo $text.'...';?>
                  </p>
                  <?php
                  $dategroup = get_field('campaign__date');
                  if ($dategroup) :
                  ?>
                  <time class="campaign-card__time u-desktop" datetime="2023-06-01-09-30">
                    <?php echo $dategroup['campaign__start']; ?>-<?php echo $dategroup['campaign__end']; ?></time>
                  <?php endif; ?>
                  <p class="campaign-card__contact-text u-desktop">
                    ご予約・お問い合わせはコチラ
                  </p>
                  <div class="campaign-card__btn u-desktop">
                    <div class="btn">
                      <span class="btn__text">contact&nbsp;us</span>
                      <div class="btn__arrow"></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <? endwhile; endif;?>
        </ul>
      </div>
    </div>
    <!-- ページネーション -->
    <div class="campaign-page__pagenation pagenation">
      <div class="pagenation__inner">
        <div class="pagenation__contents">
          <?php wp_pagenavi(); ?>

        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>