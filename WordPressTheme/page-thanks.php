<?php get_header(); ?>

<main>
  <!-- メインビュー -->
  <div class="contact-page-mv sub-mv">
    <div class="sub-mv__img">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-pc.jpg"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-sp.jpg"
          alt="海辺に浮かんで頭だけ見えているダイバー" />
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

  <div class="thanks-page layout-sub-page fish-icon">
    <div class="thanks-page__inner inner">
      <p class="thanks-page__text">お問い合わせ内容を送信完了しました。</p>
      <p class="thanks-page__text">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
        お送り頂きました内容を確認の上、 <br class="u-mobile">
        3営業日以内に折り返しご連絡させて頂きます。<br>
        また、ご記入頂いたメールアドレスへ、 <br class="u-mobile">
        自動返信の確認メールをお送りしております。</p>
    </div>

  </div>

</main>

<?php get_footer(); ?>