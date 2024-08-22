<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="blog-mv sub-mv">
    <div class="sub-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-pc.jpg"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-sp.jpg"
          alt="夫婦のように向かい合う2匹のチョウチョウウオ" />
      </picture>
    </div>
    <h2 class="sub-mv__title">blog</h2>
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

  <!-- コンテナーセクション -->
  <section class="container layout-sub-page fish-icon">
    <div class="container__inner inner">
      <div class="container__wrapper">
        <div class="container__blog-page blog-single-page">
          <ul class="blog-page__cards blog-cards blog-cards--two-column">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <li class="blog-cards__item">
              <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                <figure class="blog-card__img">
                  <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                  <img src=" <?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
                    alt="<?php the_title(); ?>のアイキャッチ画像" />
                  <img src="">
                  <?php endif; ?>
                </figure>
                <div class="blog-card__body">
                  <div class="blog-card__metabox">
                    <time class="blog-card__date"
                      datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m/d'); ?></time>
                    <p class="blog-card__title"><?php the_title(); ?></p>
                  </div>
                  <p class="blog-card__text">
                    <?php echo wp_trim_words(get_the_content(), 80, '…'); ?>
                  </p>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
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

        <aside class="container__aside aside">
          <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>
  </section>


  <?php get_footer(); ?>