<?php get_header(); ?>

<!-- メインビュー -->
<div class="faq-mv sub-mv">
  <div class="sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-pc.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv-sp.jpg" alt="エメラルドグリーンの海岸" />
    </picture>
  </div>
  <h2 class="sub-mv__title">FAQ</h2>
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

<section class="faq-page layout-sub-page fish-icon">
  <div class="faq-page__inner sub-inner">
    <div class="faq-page__accordion accordion js-accordion">
      <div class="accordion__container">
        <?php
        $gallery_group = SCF::get_option_meta('faq-option', 'faq_group');
        if ($gallery_group) :
          foreach ($gallery_group as $item) :
        ?>
        <div class="accordion__item">
          <h2 class="accordion__title js-accordion-title">
            <?php echo wp_get_attachment_url($item['faq_question']); ?></h2>
          <div class="accordion__content">
            <p class="accordion__text">
              <?php echo wp_get_attachment_url($item['faq_answer']); ?>
            </p>
          </div>
        </div>
        <!-- <div class="accordion__item">
          <h3 class="accordion__title js-accordion-title">ここに質問が入ります。</h3>
          <div class="accordion__content">
            <p class="accordion__text">
              ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
            </p>
          </div>
        </div>
        <div class="accordion__item">
          <h3 class="accordion__title js-accordion-title">ここに質問が入ります。</h3>
          <div class="accordion__content">
            <p class="accordion__text">
              ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
            </p>
          </div>
        </div>
        <div class="accordion__item">
          <h2 class="accordion__title js-accordion-title">ここに質問が入ります。</h2>
          <div class="accordion__content">
            <p class="accordion__text">
              ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
            </p>
          </div>
        </div>
        <div class="accordion__item">
          <h3 class="accordion__title js-accordion-title">ここに質問が入ります。</h3>
          <div class="accordion__content">
            <p class="accordion__text">
              ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
            </p>
          </div>
        </div>
        <div class="accordion__item">
          <h3 class="accordion__title js-accordion-title">ここに質問が入ります。</h3>
          <div class="accordion__content">
            <p class="accordion__text">
              ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
            </p>
          </div>
        </div>
        <div class="accordion__item">
          <h3 class="accordion__title js-accordion-title">ここに質問が入ります。</h3>
          <div class="accordion__content">
            <p class="accordion__text">
              ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
            </p>
          </div>
        </div> -->
        <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>