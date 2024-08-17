<?php get_header(); ?>

<!-- メインビュー -->
<div class="about-mv sub-mv">
  <div class="sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-mv-pc.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-mv-sp.jpg" alt="青天の中悠然と佇むシーサー" />
    </picture>
  </div>
  <h2 class="sub-mv__title">about&nbsp;us</h2>
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

<!-- aboutセクション -->
<section class="about layout-sub-page fish-icon ">
  <div class="about__inner inner">
    <div class="about__contents">
      <div class="about__img-box">
        <div class="about__img-left">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean1(1).jpg" alt="青天の中明るく見える赤煉瓦とシーサー" />
        </div>
        <div class="about__img-right">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean2.jpg" alt="夫婦のように向かい合う2匹のチョウチョウウオ" />
        </div>
      </div>
      <div class="about__content">
        <h2 class="about__sub-title">
          dive&nbsp;into&nbsp;<br />the&nbsp;<span class="about__sub-title-decoration">ocean</span>
        </h2>
        <div class="about__text-box">
          <p class="about__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- galleryセクション -->
<section class="gallery layout-gallery ">
  <div class="gallery__inner inner">
    <div class="galley__title">
      <div class="section-header">
        <p class="section-header__title">gallery</p>
        <h2 class="section-header__subtitle">フォト</h2>
      </div>
    </div>
    <div class="gallery__contents">
      <ul class="gallery__list">
        <?php
        $gallery_group = SCF::get_option_meta('gallery-img', 'about-us_gallery');
        if ($gallery_group) :
          foreach ($gallery_group as $item) :
        ?>
        <li class="gallery__item">
          <img src="<?php echo wp_get_attachment_url($item['gallery_img']); ?>" alt="ギャラリー画像" />
        </li>
        <?php endforeach; ?>
        <?php endif; ?>

      </ul>
      <!-- コース画像のモーダル時のグレー背景 -->
      <div id="graydisplay"></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>