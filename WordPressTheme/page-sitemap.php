<?php get_header(); ?>

<!-- メインビュー -->
<div class="sitemap-mv sub-mv">
  <div class="sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-pc.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-sp.jpg" alt="海辺に浮かんで頭だけ見えているダイバー" />
    </picture>
  </div>
  <h2 class="sub-mv__title sub-mv__title--transform">site&nbsp;map</h2>
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

<!-- サイトマップ -->
<div class="sitemap-page layout-sub-page fish-icon">
  <div class="sitemap-page __inner inner">
    <div class="sitemap-page__list-contents">
      <div class="sitemap-page__column-list">
        <div class="sitemap-page__in-column-list">
          <ul class="sitemap-page__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/campaign/")) ?>"
                class="nav-list__heading-link nav-list__heading-link--black">キャンペーン</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/campaign/")) ?>"
                class="nav-list__item-link nav-list__item-link--black">ライセンス取得</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/campaign/")) ?>"
                class="nav-list__item-link nav-list__item-link--black">貸切体験ダイビング</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/campaign/")) ?>"
                class="nav-list__item-link nav-list__item-link--black">ナイトダイビング</a>
            </li>
          </ul>
          <ul class="sitemap-page__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/about/")) ?>"
                class="nav-list__heading-link nav-list__heading-link--black">私たちについて</a>
            </li>
          </ul>
        </div>
        <div class="sitemap-page__in-column-list">
          <ul class="sitemap-page__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/information/")) ?>"
                class="nav-list__heading-link nav-list__heading-link--black">ダイビング情報</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/information?&id=tab1")); ?>" id="tab1"
                class="nav-list__item-link nav-list__item-link--black">ライセンス情報</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/information?&id=tab3")) ?>" id="tab3"
                class="nav-list__item-link nav-list__item-link--black">体験ダイビング</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/information?&id=tab2")) ?>" id="tab2"
                class="nav-list__item-link nav-list__item-link--black">ファンダイビング</a>
            </li>
          </ul>
          <ul class="sitemap-page__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/blog/")) ?>"
                class="nav-list__heading-link nav-list__heading-link--black">ブログ</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="sitemap-page__column-list">
        <div class="sitemap-page__in-column-list">
          <ul class="sitemap-page__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/voice/")) ?>"
                class="nav-list__heading-link nav-list__heading-link--black">お客様の声</a>
            </li>
          </ul>
          <ul class="sitemap-page__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/price/")) ?>"
                class="nav-list__heading-link nav-list__heading-link--black">料金一覧</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/price/")) ?>"
                class="nav-list__item-link nav-list__item-link--black">ライセンス講習</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/price/")) ?>"
                class="nav-list__item-link nav-list__item-link--black">体験ダイビング</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/price/")) ?>"
                class="nav-list__item-link nav-list__item-link--black">ファンダイビング</a>
            </li>
          </ul>
        </div>
        <div class="sitemap-page__in-column-list">
          <ul class="sitemap-page__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/faq/")) ?>"
                class="nav-list__heading-link nav-list__heading-link--black">よくある質問</a>
            </li>
          </ul>
          <ul class="sitemap-page__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/privacy/")) ?>"
                class="nav-list__heading-link nav-list__heading-link--black">プライバシー<br class="u-mobile" />ポリシー</a>
            </li>
          </ul>
          <ul class="sitemap-page__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/terms-of-service/")) ?>"
                class="nav-list__heading-link nav-list__heading-link--black">利用規約</a>
            </li>
          </ul>
          <ul class="sitemap-page__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/contact/")) ?>"
                class="nav-list__heading-link nav-list__heading-link--black">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>