<aside class="container__aside aside">
  <div class="aside__box">
    <div class="aside__header aside-header">
      <div class="aside-header__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/shark-icon-black.png" alt="黒いサメのアイコン" />
      </div>
      <h2 class="aside-header__title">人気記事</h2>
    </div>
    <?php
        $args = array(
          "post_type" => "post",
          "posts_per_page" => 3,
          'orderby' => 'date',
          'order' => 'DESC' 
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
    <div class="aside__cards">
      <a href="<?php the_permalink(); ?>" class=" aside__cards-item blog-information-card">
        <div class="blog-information-card__img">
          <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
          <img src=" <?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
            alt="<?php the_title(); ?>のアイキャッチ画像" />
          <img src="">
          <?php endif; ?>
        </div>
        <div class="blog-information-card__body">
          <time class="blog-information-card__date"
            datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m/d'); ?></time>
          <p class="blog-information-card__title"><?php the_title(); ?></p>
        </div>
      </a>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
    <p class="voice__message">記事が投稿されていません</p>
    <?php endif; ?>
  </div>
  <div class="aside__box">
    <div class="aside__header aside-header">
      <div class="aside-header__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/shark-icon-black.png" alt="黒いサメのアイコン" />
      </div>
      <h2 class="aside-header__title">口コミ</h2>
    </div>
    <div class="aside__card">
      <?php
        $args = array(
          "post_type" => "voice",
          "posts_per_page" => 1,
          'orderby' => 'date',
          'order' => 'DESC' 
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
        ?>
      <?php  $persongroup = get_field('voice_person'); ?>
      <div class="aside__card-item aside-card">
        <figure class="aside-card__img">
          <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail(); ?>
          <?php else: ?>
          <img src=" <?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
            alt="<?php the_title(); ?>のアイキャッチ画像" />
          <img src="">
          <?php endif; ?>
        </figure>
        <div class="aside-card__body">
          <?php if (!empty($persongroup['voice_age']) && !empty($persongroup['voice_gender'])) : ?>
          <span class="aside-card__meta">
            <?php echo $persongroup['voice_age']; ?>
            (<?php echo $persongroup['voice_gender']; ?>)
          </span>
          <?php endif; ?>
          <h2 class="aside-card__title">
            <?php the_title(); ?>
          </h2>
          <div class="aside-card__btn">
            <a href="<?php echo esc_url(home_url("/voice")) ?>" class="btn">
              <span class="btn__text">view&nbsp;more</span>
              <div class="btn__arrow"></div>
            </a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <p class="voice__message">記事が投稿されていません</p>
      <?php endif; ?>
    </div>
  </div>
  <div class="aside__box">
    <div class="aside__header aside-header">
      <div class="aside-header__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/shark-icon-black.png" alt="黒いサメのアイコン" />
      </div>
      <h2 class="aside-header__title">キャンペーン</h2>
    </div>
    <?php
    $args = array(
        "post_type" => "campaign", // カスタム投稿のスラッグ名
        "posts_per_page" => 2, // 表示する件数
        'orderby' => 'date',
        'order' => 'DESC'  
    ); $the_query = new WP_Query($args);?>
    <?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post();   the_content();?>
    <div class="aside__card">
      <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="aside__campaign-card aside-campaign-card">
        <figure class="aside-campaign-card__img">
          <?php if (get_the_post_thumbnail()) : ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
          <?php else : ?>
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
          <?php endif ?>
        </figure>
        <div class="aside-campaign-card__body">
          <div class="aside-campaign-card__metabox">
            <p class="aside-campaign-card__title"><?php the_title(); ?></p>
          </div>
          <div class="aside-campaign-card__box">
            <?php  $pricegroup = get_field('campaign-card__price'); ?>
            <div class="aside-campaign-card__menu">
              全部コミコミ(お一人様)
            </div>
            <div class="aside-campaign-card__price">
              <?php if (!empty($pricegroup['campaign-card__original-price'])) : ?>
              <div class="aside-campaign-card__original-price">
                ¥<?php echo $pricegroup['campaign-card__original-price']; ?>
                <?php endif; ?>
              </div>
              <?php if (!empty($pricegroup['campaign-card__discounted-rate'])) : ?>
              <div class="aside-campaign-card__discounted-rate">
                ¥<?php echo $pricegroup['campaign-card__discounted-rate']; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </a>
    </div>
    <?php endwhile; ?>
    <!-- サブループ終了 -->
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p class="campaign__message">記事が投稿されていません</p>
    <?php endif; ?>
    <div class="aside-card__btn">
      <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="btn">
        <span class="btn__text">view&nbsp;more</span>
        <div class="btn__arrow"></div>
      </a>
    </div>
  </div>
  <div class="aside__box">
    <div class="aside__header aside-header">
      <div class="aside-header__img">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/shark-icon-black.png" alt="黒いサメのアイコン" />
      </div>
      <h2 class="aside-header__title">アーカイブ</h2>
    </div>
    <?php
          $args = [
            'type' => 'monthly',
            'format' => 'custom',
            'before' => '<li><p><i class="fa-solid fa-caret-right"></i>',
            'after' => '</p></li>',
            'show_post_count' => 0,
            'post_type' => 'active-report'
          ];
        ?>
    <?php wp_get_archives($args); ?>
    <div class="aside__archive-list archive">
      <div class="archive__list-title js-title">
        2023
        <ul class=" archive__list-items js-items">
          <li class=" archive__list-item"><a href="" class="archive__item-link">3月</a></li>
          <li class=" archive__list-item"><a href="" class="archive__item-link">2月</a></li>
          <li class=" archive__list-item"><a href="" class="archive__item-link">1月</a></li>
        </ul>
      </div>
      <div class="archive__list-title js-title">
        2022
        <ul class=" archive__list-items js-items">
          <li class="archive__list-item"><a href="" class="archive__item-link">3月</a></;>
          <li class="archive__list-item"><a href="" class="archive__item-link">2月</a></li>
          <li class="archive__list-item"><a href="" class="archive__item-link">1月</a></li>
        </ul>
      </div>


    </div>
</aside>