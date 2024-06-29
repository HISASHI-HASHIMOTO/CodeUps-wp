<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<?php 
  $top = esc_url(home_url('/')); 
  $campaign = esc_url(home_url('/campaign/')); 
  $about = esc_url(home_url('/about/')); 
  $information = esc_url(home_url('/information/')); 
  $blog = esc_url(home_url('/blog/')); 
  $voice = esc_url(home_url('/voice/')); 
  $price = esc_url( home_url( '/price/' ) );
  $faq = esc_url( home_url( '/faq/' ) );
  $privacy = esc_url( home_url( '/privacy/' ) );
  $termsofservise = esc_url( home_url( '/terms-of-service/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
  $sitemap = esc_url( home_url( '/sitemap/' ) );
?>


<body>
  <header class="header layout-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo $top ?>" class="header__logo-item">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.svg" alt="CodeUpsロゴ" />
        </a>
      </h1>

      <!-- ハンバーガーメニュー -->
      <button class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- ドロワーメニュー -->
      <nav class="header__drawer-menu drawer-menu js-drawer-menu">
        <div class="drawer-menu__inner">
          <div class="drawer-menu__wrapper">
            <div class="drawer-menu__contents">
              <div class="drawer-menu__content">
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo $campaign ?>" class="nav-list__heading-link">キャンペーン</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo $campaign ?>" class="nav-list__item-link">ライセンス取得</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo $campaign ?>" class="nav-list__item-link">貸切体験ダイビング</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo $campaign ?>" class="nav-list__item-link">ナイトダイビング</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo $about ?>" class="nav-list__heading-link">私たちについて</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo $information ?>" class="nav-list__heading-link">ダイビング情報</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo $information#tab1 ?>" id="tab1" class="nav-list__item-link">ライセンス情報</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo $information#tab1 ?>" id="tab3" class="nav-list__item-link">体験ダイビング</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo $information#tab2 ?>" id="tab2" class="nav-list__item-link">ファンダイビング</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo $blog ?>" class="nav-list__heading-link">ブログ</a>
                  </li>
                </ul>
              </div>
              <div class="drawer-menu__content">
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo $voice ?>" class="nav-list__heading-link">お客様の声</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo $price ?>" class="nav-list__heading-link">料金一覧</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo $price ?>" class="nav-list__item-link">ライセンス講習</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo $price ?>" class="nav-list__item-link">体験ダイビング</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="<?php echo $price ?>" class="nav-list__item-link">ファンダイビング</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo $faq ?>" class="nav-list__heading-link">よくある質問</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo $privacy ?>" class="nav-list__heading-link">プライバシー<br />ポリシー</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo $termsofservise ?>terms-of-service.html" class="nav-list__heading-link">利用規約</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="<?php echo $contact ?>" class="nav-list__heading-link">お問い合わせ</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <!-- pc-nav -->
      <nav class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $campaign ?>" class="pc-nav__item-link">
              <span class="pc-nav__en-item">campaign</span>
              <span class="pc-nav__ja-item">キャンペーン</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $about?>" class="pc-nav__item-link">
              <span class="pc-nav__en-item">about&nbsp;us</span>
              <span class="pc-nav__ja-item">私たちについて</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $information ?>" class="pc-nav__item-link">
              <span class="pc-nav__en-item">information</span>
              <span class="pc-nav__ja-item">ダイビング情報</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $blog ?>" class="pc-nav__item-link">
              <span class="pc-nav__en-item">blog</span>
              <span class="pc-nav__ja-item">ブログ</span>
            </a>
          </li>
          <il class="pc-nav__item">
            <a href="<?php echo $voice ?>" class="pc-nav__item-link">
              <span class="pc-nav__en-item">voice</span>
              <span class="pc-nav__ja-item">お客様の声</span>
            </a>
          </il>
          <il class="pc-nav__item">
            <a href="<?php echo $price ?>" class="pc-nav__item-link">
              <span class="pc-nav__en-item">price</span>
              <span class="pc-nav__ja-item">料金一覧</span>
            </a>
          </il>
          <li class="pc-nav__item">
            <a href="<?php echo $faq ?>" class="pc-nav__item-link">
              <span class="pc-nav__en-item">FAQ</span>
              <span class="pc-nav__ja-item">よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact ?>" class="pc-nav__item-link">
              <span class="pc-nav__en-item">contact</span>
              <span class="pc-nav__ja-item">お問合せ</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>