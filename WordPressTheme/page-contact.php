<?php get_header(); ?>

<!-- メインビュー -->
<div class="contact-page-mv sub-mv">
  <div class="sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-pc.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-sp.jpg" alt="海辺に浮かんで頭だけ見えているダイバー" />
    </picture>
  </div>
  <h2 class="sub-mv__title">contact</h2>
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


<section class="contact-page layout-sub-page fish-icon">
  <div class="contact-page__inner">
    <div class="contact-page__form form">
      <?php echo do_shortcode('[contact-form-7 id="b44bd7b" title="お問い合わせ"]'); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>