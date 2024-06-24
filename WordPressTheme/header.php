<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header layout-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="index.html" class="header__logo-item">
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
                    <a href="campaign.html" class="nav-list__heading-link">キャンペーン</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="campaign.html" class="nav-list__item-link">ライセンス取得</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="campaign.html" class="nav-list__item-link">貸切体験ダイビング</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="campaign.html" class="nav-list__item-link">ナイトダイビング</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="about.html" class="nav-list__heading-link">私たちについて</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="information.html" class="nav-list__heading-link">ダイビング情報</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="information.html?id=tab1" id="tab1" class="nav-list__item-link">ライセンス情報</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="information.html?id=tab3" id="tab3" class="nav-list__item-link">体験ダイビング</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="information.html?id=tab2" id="tab2" class="nav-list__item-link">ファンダイビング</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="blog.html" class="nav-list__heading-link">ブログ</a>
                  </li>
                </ul>
              </div>
              <div class="drawer-menu__content">
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="voice.html" class="nav-list__heading-link">お客様の声</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="price.html" class="nav-list__heading-link">料金一覧</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="price.html" class="nav-list__item-link">ライセンス講習</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="price.html" class="nav-list__item-link">体験ダイビング</a>
                  </li>
                  <li class="nav-list__item">
                    <a href="price.html" class="nav-list__item-link">ファンダイビング</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="faq.html" class="nav-list__heading-link">よくある質問</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="privacy-policy.html" class="nav-list__heading-link">プライバシー<br />ポリシー</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="terms-of-service.html" class="nav-list__heading-link">利用規約</a>
                  </li>
                </ul>
                <ul class="drawer-menu__nav-list nav-list">
                  <li class="nav-list__heading-item">
                    <a href="contact.html" class="nav-list__heading-link">お問い合わせ</a>
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
            <a href="campaign.html " class="pc-nav__item-link">
              <span class="pc-nav__en-item">campaign</span>
              <span class="pc-nav__ja-item">キャンペーン</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="about.html" class="pc-nav__item-link">
              <span class="pc-nav__en-item">about&nbsp;us</span>
              <span class="pc-nav__ja-item">私たちについて</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="information.html" class="pc-nav__item-link">
              <span class="pc-nav__en-item">information</span>
              <span class="pc-nav__ja-item">ダイビング情報</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="blog.html" class="pc-nav__item-link">
              <span class="pc-nav__en-item">blog</span>
              <span class="pc-nav__ja-item">ブログ</span>
            </a>
          </li>
          <il class="pc-nav__item">
            <a href="voice.html" class="pc-nav__item-link">
              <span class="pc-nav__en-item">voice</span>
              <span class="pc-nav__ja-item">お客様の声</span>
            </a>
          </il>
          <il class="pc-nav__item">
            <a href="price.html" class="pc-nav__item-link">
              <span class="pc-nav__en-item">price</span>
              <span class="pc-nav__ja-item">料金一覧</span>
            </a>
          </il>
          <li class="pc-nav__item">
            <a href="faq.html" class="pc-nav__item-link">
              <span class="pc-nav__en-item">FAQ</span>
              <span class="pc-nav__ja-item">よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="contact.html" class="pc-nav__item-link">
              <span class="pc-nav__en-item">contact</span>
              <span class="pc-nav__ja-item">お問合せ</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>