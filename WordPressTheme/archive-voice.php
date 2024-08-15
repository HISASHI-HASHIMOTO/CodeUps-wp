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
      <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="contents-button-list__button is-active">ALL</a>
      <?php
    $terms = get_terms('voice_category');
    foreach ($terms as $term) :
    ?>
      <a href="<?php echo esc_url(get_term_link($term->term_id)); ?>" class="contents-button-list__button">
        <?php echo $term->name; ?>
      </a>
      <?php endforeach; ?>
    </div>
    <ul class="voice-page__contents voice-cards">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
      <li class="voice-cards__content">
        <a href="<?php echo esc_url(home_url("/voice")) ?>" class="voice-cards__item voice-card">
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
                <img src=" <?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
                  alt="<?php the_title(); ?>のアイキャッチ画像" />
                <?php endif; ?>
              </div>
            </figure>
          </div>
          <p class="voice-card__text">
            <?php  $voice_text = get_field('voice_text'); ?>
            <?php if (!empty($voice_text ['voice_text'])) : ?>
            <?php echo $voice_text['voice_text']; ?>
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

<!-- contactセクション -->
<section class="campaign-contact contact layout-contact">
  <div class="contact__inner inner">
    <div class="contact__contents">
      <div class="contact__address-box">
        <div class="contact__address-title">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.png" alt="contact画像1" />
        </div>
        <div class="contact__address-body">
          <div class="contact__address-text-box">
            <p class="contact__address-text">沖縄県那覇市1-1</p>
            <p class="contact__address-text">
              <a href="tel:0120-000-0000" class="contact__address-telephone">TEL:0120-000-0000</a>
            </p>
            <p class="contact__address-text">営業時間:8:30-19:00</p>
            <p class="contact__address-text">定休日:毎週火曜日</p>
          </div>
          <div class="contact__address-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.19257859206!2d127.68999638202148!3d26.222931480275573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1715633080292!5m2!1sja!2sjp"
              width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="contact__contact-box">
        <div class="contact__title section-header">
          <h2 class="contact__contact-title section-header__title">
            contact
          </h2>
          <p class="contact__contact-subtitle section-header__subtitle">
            お問い合わせ
          </p>
          <p class="contact__contact-subtitle section-header__subtitle">
            ご予約・お問い合わせはコチラ
          </p>
        </div>
        <div class="contact__btn">
          <a class="btn">
            <span class="btn__text">contact&nbsp;us</span>
            <div class="btn__arrow"></div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
</main>


<!-- ページトップボタン -->
<div class="page-top js-page-top">
  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Group20.svg" alt="このボタンを押すとページトップへ戻ります" />
</div>
</body>

</html>

<?php get_footer(); ?>