<?php get_header(); ?>

<!-- メインビュー -->
<div class="voice-mv sub-mv">
  <div class="sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-mv-pc.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-img-sp.jpg" alt="海辺に浮かぶ複数名のダイビング" />
    </picture>
  </div>
  <h1 class="sub-mv__title">voice</h1>
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

<!-- voice-page -->
<div class="voice-page layout-sub-page fish-icon">
  <div class="voice-page__inner inner">
    <div class="voice-page__button-list contents-button-list">
      <?php
        $term = get_queried_object();
        $term_slug = $term->slug;
        $term_name = $term->name;
        ?>
      <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="contents-button-list__button ">ALL</a>
      <?php
    $terms = get_terms('voice_category');
    foreach ($terms as $term) :
    ?>
      <a href="<?php echo esc_url(get_term_link($term->term_id)); ?>" class="contents-button-list__button
        <?php if ($term_slug === $term->slug) {
          echo 'is-active';
        } ?>">
        <?php echo $term->name; ?>
      </a>
      <?php endforeach; ?>
    </div>

    <ul class=" voice-page__contents voice-cards">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
      <li class="voice-cards__content">
        <a href="" class="voice-cards__item voice-card">
          <div class="voice-card__body">
            <div class="voice-card__metabox">
              <?php  $persongroup = get_field('voice_person'); ?>
              <div class="voice-card__metalist">
                <?php if (!empty($persongroup['voice_age']) && !empty($persongroup['voice_gender'])) : ?>
                <small class="voice-card__age">
                  <?php echo $persongroup['voice_age']; ?>
                  (<?php echo $persongroup['voice_gender']; ?>)
                </small>
                <?php endif; ?>
                <?php
                $term = get_the_terms($post->ID,'voice_category');
                if($term) : ?>
                <div class="voice-card__meta">
                  <?php  echo $term[0]->name; ?></div>
                <?php endif; ?>
              </div>
              <h2 class="voice-card__title">
                <?php the_title(); ?>
              </h2>
            </div>
            <figure class="voice-card__img">
              <div class="voice-card__colorbox colorbox">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                <img src=" <?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-image画像" />
                <?php endif; ?>
              </div>
            </figure>
          </div>
          <p class="voice-card__text">
            <?php  $voicetext = get_field('voice_text'); ?>

            <?php if (!empty($voicetext)) : ?>
            <?php echo $voicetext; ?>
            <?php endif; ?>

          </p>
        </a>
      </li>
      <? endwhile; endif; ?>
    </ul>

    <!-- ページネーション -->
    <div class="campaign-page__pagenation pagenation">
      <div class="pagenation__inner">
        <div class="pagenation__contents">
          <?php wp_pagenavi(); 
          function custom_posts_per_page($query) {
            if (!is_admin() && $query->is_main_query()) {
                if (wp_is_mobile()) {
                    // SP表示件数
                    $query->set('.wp-pagenavi .page', 4); 
                } else {
                    // PC表示件数
                    $query->set('.wp-pagenavi .page', 6); 
                }
            }
        }
        add_action('pre_get_posts', 'custom_posts_per_page');
        
          ?>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- ページトップボタン -->
<div class="page-top js-page-top">
  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Group20.svg" alt="このボタンを押すとページトップへ戻ります" />
</div>
</body>

</html>

<?php get_footer(); ?>