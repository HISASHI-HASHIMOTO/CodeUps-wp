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

  <div class="container layout-sub-page fish-icon">
    <div class="container__inner inner">
      <div class="container__wrapper">
        <div class="container__blog-article blog-article">
          <?php
            if (have_posts()) :
              while (have_posts()) : the_post(); ?>
          <article class="blog-article__body">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m/d'); ?></time>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </article>
          <? endwhile; endif;?>
          <!-- ページネーション -->
          <div class="campaign-page__pagenation pagenation">
            <?php
              $prev = get_previous_post();
              $prev_url = $prev ? esc_url(get_permalink($prev->ID)) : '';
              $next = get_next_post();
              $next_url = $next ? esc_url(get_permalink($next->ID)) : '';
              ?>
            <div class="pagenation__inner">
              <div class="pagenation__contents">
                <?php if ($prev) : ?>
                <a class="pagenation__link-pre" href="<?php echo $prev_url; ?>">
                  <?php endif; ?></a>
                <?php if ($next) : ?>
                <a class="pagenation__link-post" href="<?php echo $next_url; ?>">
                  <?php endif; ?></a>
              </div>
            </div>
          </div>
        </div>
        <aside class="container__aside aside">
          <?php get_sidebar(); ?>
        </aside>

      </div>
    </div>
  </div>



  <?php get_footer(); ?>