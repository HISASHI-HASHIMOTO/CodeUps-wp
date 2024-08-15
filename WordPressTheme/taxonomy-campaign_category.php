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
        $term = get_queried_object();
        $term_slug = $term->slug;
        $term_name = $term->name;
        ?>
      <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="contents-button-list__button">ALL</a>
      <?php
    $terms = get_terms('campaign_category');
    foreach ($terms as $term) :
    ?>
      <a href="<?php echo esc_url(get_category_link($term->term_id)); ?>" class="contents-button-list__button 
      <?php if ($term_slug === $term->slug) {
          echo 'is-active';
        } ?>">
        <?php echo $term->name; ?>
      </a>
      <?php endforeach; ?>

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
          <?php if ( have_posts() ) : query_posts($query_string.'&posts_per_page=4'); ?>
          <?php wp_pagenavi(); ?>
          <?  endif;?>
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>