<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Gotu&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP&display=swap"
    rel="stylesheet" />
  <!-- スワイパー -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!-- css -->
  <link rel="stylesheet" href="
<?php echo get_theme_file_uri(); ?>/assets/css/style.css" />
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script defer src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.inview.min.js"></script>
  <script defer src="<?php echo get_theme_file_uri(); ?>/assets/js/script.js"></script>
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

  <main>
    <!-- mvセクション -->
    <div class="mv">
      <div class="mv__swiper swiper" id="slide1">
        <!-- swiper-wrapper -->
        <div class="mv__swiper-wrapper swiper-wrapper">
          <!-- スライド -->
          <div class="mv__swiper-slide swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle1(11).jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle207.png" alt="海底を優雅に泳ぐ亀" />
            </picture>
          </div>
          <div class="mv__swiper-slide swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/S__354388041(1).jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/S__354388042.jpg"
                alt="二人がダイビング中に亀と遭遇する" />
            </picture>
          </div>
          <div class="mv__swiper-slide swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Mask_group.jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Mask group.jpg" alt="海辺に漂う船と青い空" />
            </picture>
          </div>
          <div class="mv__swiper-slide swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle217.jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle218.jpg" alt="綺麗に澄んだ海岸" />
            </picture>
          </div>
        </div>
        <div class="mv__title">
          <h2 class="mv__main-title">diving</h2>
          <p class="mv__sub-title">into&nbsp;the&nbsp;ocean</p>
        </div>
      </div>
    </div>

    <!-- campaignセクション -->
    <section class="campaign layout-Campaign">
      <div class="campaign__inner inner">
        <div class="campaign__wrapper">
          <div class="campaign__title section-header">
            <p class="section-header__title">Campaign</p>
            <h2 class="section-header__subtitle">キャンペーン</h2>
          </div>
          <!-- navigation buttons -->
          <div class="campaign__button-box">
            <div class="campaign__button-prev"></div>
            <div class="campaign__button-next"></div>
          </div>
          <div class="campaign__content">
            <div class="campaign__swiper swiper" id="slide2">
              <!-- swiper-wrapper -->
              <div class="campaign__swiper-wrapper swiper-wrapper">
                <!-- スライド -->
                <div class="campaign__swiper-slide swiper-slide">
                  <a href="" class="campaign__slide-card campaign-card">
                    <figure class="campaign-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
                        alt="海水の中で煌びやかに光る魚群" />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__metabox">
                        <div class="campaign-card__meta">ライセンス講習</div>
                        <p class="campaign-card__title">ライセンス取得</p>
                      </div>
                      <div class="campaign-card__box">
                        <div class="campaign-card__menu">全部コミコミ(お一人様)</div>
                        <div class="campaign-card__price">
                          <div class="campaign-card__original-price">¥56,000</div>
                          <div class="campaign-card__discounted-rate">¥46,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="campaign__swiper-slide swiper-slide">
                  <a href="" class="campaign__slide-card campaign-card">
                    <figure class="campaign-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg"
                        alt="貸切ダイビングを行う海岸沿いに浮かぶ船" />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__metabox">
                        <div class="campaign-card__meta">体験ダイビング</div>
                        <p class="campaign-card__title">貸切体験ダイビング</p>
                      </div>
                      <div class="campaign-card__box">
                        <div class="campaign-card__menu">全部コミコミ(お一人様)</div>
                        <div class="campaign-card__price">
                          <div class="campaign-card__original-price">¥24,000</div>
                          <div class="campaign-card__discounted-rate">¥18,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="campaign__swiper-slide swiper-slide">
                  <a href="" class="campaign__slide-card campaign-card">
                    <figure class="campaign-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg"
                        alt="暗闇の中で神々しく光るクラゲ" />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__metabox">
                        <div class="campaign-card__meta">体験ダイビング</div>
                        <p class="campaign-card__title">ナイトダイビング</p>
                      </div>
                      <div class="campaign-card__box">
                        <div class="campaign-card__menu">全部コミコミ(お一人様)</div>
                        <div class="campaign-card__price">
                          <div class="campaign-card__original-price">¥10,000</div>
                          <div class="campaign-card__discounted-rate">¥8,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="campaign__swiper-slide swiper-slide">
                  <a href="" class="campaign__slide-card campaign-card">
                    <figure class="campaign-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3(3).jpg"
                        alt="海上でダイビングを楽しむ複数の人たち" />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__metabox">
                        <div class="campaign-card__meta">ファンダイビング</div>
                        <p class="campaign-card__title">貸切ファンダイビング</p>
                      </div>
                      <div class="campaign-card__box">
                        <div class="campaign-card__menu">全部コミコミ(お一人様)</div>
                        <div class="campaign-card__price">
                          <div class="campaign-card__original-price">¥20,000</div>
                          <div class="campaign-card__discounted-rate">¥16,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="campaign__swiper-slide swiper-slide">
                  <a href="" class="campaign__slide-card campaign-card">
                    <figure class="campaign-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3(3).jpg"
                        alt="海上でダイビングを楽しむ複数の人たち" />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__metabox">
                        <div class="campaign-card__meta">ファンダイビング</div>
                        <p class="campaign-card__title">貸切ファンダイビング</p>
                      </div>
                      <div class="campaign-card__box">
                        <div class="campaign-card__menu">全部コミコミ(お一人様)</div>
                        <div class="campaign-card__price">
                          <div class="campaign-card__original-price">¥20,000</div>
                          <div class="campaign-card__discounted-rate">¥16,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="campaign__btn">
            <a class="btn">
              <span class="btn__text">view&nbsp;more</span>
              <div class="btn__arrow"></div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- aboutセクション -->
    <section class="about layout-about sango-icon">
      <div class="about__inner inner">
        <div class="about__title section-header">
          <h3 class="section-header__title">about&nbsp;us</h3>
          <p class="section-header__subtitle">私たちについて</p>
        </div>
        <div class="about__contents">
          <div class="about__img-box">
            <div class="about__img-left">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean1(1).jpg"
                alt="青天の中明るく見える赤煉瓦とシーサー" />
            </div>
            <div class="about__img-right">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean2.jpg"
                alt="夫婦のように向かい合う2匹のチョウチョウウオ" />
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
              <div class="about__btn">
                <a class="btn">
                  <span class="btn__text">view&nbsp;more</span>
                  <div class="btn__arrow"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- informationセクション -->
    <section class="information layout-information">
      <div class="information__inner inner">
        <div class="information__title section-header">
          <h2 class="section-header__title">information</h2>
          <p class="section-header__subtitle">ダイビング情報</p>
        </div>
        <div class="information__contents">
          <div class="information__img">
            <div class="information__colorbox colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean3.jpg"
                alt="海底の珊瑚と優雅に泳ぐチョウチョウウオ" />
            </div>
          </div>
          <div class="information__content">
            <h3 class="information__sub-title">ライセンス講習</h3>
            <p class="information__text">
              当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
            </p>
            <div class="information__btn">
              <a class="btn">
                <span class="btn__text">view&nbsp;more</span>
                <div class="btn__arrow"></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- blogセクション -->
    <section class="blog layout-blog">
      <div class="blog__inner inner">
        <div class="blog__title section-header">
          <h2 class="section-header__title section-header__title--color2">
            blog
          </h2>
          <p class="section-header__subtitle section-header__title--color2">
            ブログ
          </p>
        </div>
        <div class="blog__contents">
          <div class="blog__cards blog-cards">
            <a href="" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle9(19).jpg"
                  alt="海底でピンク色の鮮やかなイソギンチャク" />
              </figure>
              <div class="blog-card__body">
                <div class="blog-card__metabox">
                  <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                  <p class="blog-card__title">ライセンス取得</p>
                </div>
                <p class="blog-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </a>
            <a href="" class="blog-cards__item blog-card">
              <figure class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle9a.jpg"
                  alt="海水の中を滑空するように泳ぐウミガメ" />
              </figure>
              <div class="blog-card__body">
                <div class="blog-card__metabox">
                  <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                  <p class="blog-card__title">ウミガメと泳ぐ</p>
                </div>
                <p class="blog-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </a>
            <a href="" class="blog-cards__item blog-card">
              <figure class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle9b.jpg"
                  alt="イソギンチャクの中で外の様子を伺うカクレクマノミ" />
              </figure>
              <div class="blog-card__body">
                <div class="blog-card__metabox">
                  <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                  <p class="blog-card__title">カクレクマノミ</p>
                </div>
                <p class="blog-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </a>
          </div>
          <div class="blog__btn">
            <a class="btn">
              <span class="btn__text">view&nbsp;more</span>
              <div class="btn__arrow"></div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- voiceセクション -->
    <section class="voice layout-voice">
      <div class="voice__inner inner">
        <div class="voice__title section-header">
          <h3 class="section-header__title">voice</h3>
          <p class="section-header__subtitle">お客様の声</p>
        </div>
        <div class="voice__cards voice-cards">
          <a href="" class="voice-cards__item voice-card">
            <div class="voice-card__body">
              <div class="voice-card__metabox">
                <div class="voice-card__metalist">
                  <small class="voice-card__age">20代(女性)</small>
                  <div class="voice-card__meta">ライセンス講習</div>
                </div>
                <h2 class="voice-card__title">
                  ここにタイトルが入ります。ここにタイトル
                </h2>
              </div>
              <figure class="voice-card__img">
                <div class="voice-card__colorbox colorbox">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle9.jpg"
                    alt="帽子を押さえながら笑顔で微笑む女性" />
                </div>
              </figure>
            </div>
            <p class="voice-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </a>
          <a href="" class="voice-cards__item voice-card">
            <div class="voice-card__body">
              <div class="voice-card__metabox">
                <div class="voice-card__metalist">
                  <small class="voice-card__age">20代(男性)</small>
                  <div class="voice-card__meta">ファンダイビング</div>
                </div>
                <h2 class="voice-card__title">
                  ここにタイトルが入ります。ここにタイトル
                </h2>
              </div>
              <figure class="voice-card__img">
                <div class="voice-card__colorbox colorbox">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Rectangle9(1).jpg"
                    alt="力強く親指を立てて鼓舞している男性" />
                </div>
              </figure>
            </div>
            <p class="voice-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </a>
        </div>
        <div class="voice__btn">
          <a class="btn" href="">
            <span class="btn__text">view&nbsp;more</span>
            <div class="btn__arrow"></div>
          </a>
        </div>
      </div>
    </section>

    <!-- priceセクション -->
    <div class="price layout-price">
      <div class="price__inner inner">
        <div class="price__title section-header">
          <h2 class="section-header__title">price</h2>
          <p class="section-header__subtitle">料金一覧</p>
        </div>
        <div class="price__contents">
          <div class="price__img">
            <div class="price__colorbox colorbox">
              <picture>
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/priceimg.jpg"
                  media="(min-width: 768px)" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean3(1).jpg" alt="海底の珊瑚と漂う小魚の魚群" />
              </picture>
            </div>
          </div>
          <div class="price__list-contents">
            <div class="price__list-content">
              <h3 class="price__list-title">ライセンス講習</h3>
              <dl class="price__list-body">
                <dt class="price__list-head">
                  オープンウォーターダイバーコース
                </dt>
                <dd class="price__list-price">¥50,000</dd>
                <dt class="price__list-head">
                  アドバンスドオープンウォーターコース
                </dt>
                <dd class="price__list-price">¥60,000</dd>
                <dt class="price__list-head">レスキュー＋EFRコース</dt>
                <dd class="price__list-price">¥70,000</dd>
              </dl>
            </div>
            <div class="price__list-content">
              <h3 class="price__list-title">体験ダイビング</h3>
              <dl class="price__list-body">
                <dt class="price__list-head">ビーチ体験ダイビング(半日)</dt>
                <dd class="price__list-price">¥7,000</dd>
                <dt class="price__list-head">ビーチ体験ダイビング(1日)</dt>
                <dd class="price__list-price">¥14,000</dd>
                <dt class="price__list-head">ボート体験ダイビング(半日)</dt>
                <dd class="price__list-price">¥10,000</dd>
                <dt class="price__list-head">ボート体験ダイビング(1日)</dt>
                <dd class="price__list-price">¥18,000</dd>
              </dl>
            </div>
            <div class="price__list-content">
              <h3 class="price__list-title">ファンダイビング</h3>
              <dl class="price__list-body">
                <dt class="price__list-head">ビーチダイビング(2ダイブ)</dt>
                <dd class="price__list-price">¥14,000</dd>
                <dt class="price__list-head">ボートダイビング(2ダイブ)</dt>
                <dd class="price__list-price">¥18,000</dd>
                <dt class="price__list-head">
                  スペシャルダイビング(2ダイブ)
                </dt>
                <dd class="price__list-price">¥24,000</dd>
                <dt class="price__list-head">ナイトダイビング(1ダイブ)</dt>
                <dd class="price__list-price">¥10,000</dd>
              </dl>
            </div>
            <div class="price__list-content">
              <h3 class="price__list-title">スペシャルダイビング</h3>
              <dl class="price__list-body">
                <dt class="price__list-head">貸切ダイビング(2ダイブ)</dt>
                <dd class="price__list-price">¥24,000</dd>
                <dt class="price__list-head">1日ダイビング(3ダイブ)</dt>
                <dd class="price__list-price">¥32,000</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="price__btn">
          <a class="btn">
            <span class="btn__text">view&nbsp;more</span>
            <div class="btn__arrow"></div>
          </a>
        </div>
      </div>
    </div>

    <!-- contactセクション -->
    <section class="contact layout-contact">
      <div class="contact__inner inner">
        <div class="contact__contents">
          <div class="contact__address-box">
            <div class="contact__address-title">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.png" alt="CodeUpsロゴ" />
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

  <!-- footerセクション -->
  <footer id="footer" class="footer layout-footer">
    <div class="footer__inner inner">
      <div class="footer__title-box">
        <div class="footer__title">
          <a href="index.html" class="footer__title-link">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps1.png" alt="CodeUpsロゴ" />
          </a>
        </div>
        <div class="footer__sns-list">
          <div class="footer__sns-icon">
            <a href="#" class="footer__sns-link"><img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.png" alt="facebookロゴ" />
            </a>
          </div>
          <div class="footer__sns-icon">
            <a href="#" class="footer__sns-link"><img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Vector(2).png" alt="instagramロゴ" />
            </a>
          </div>
        </div>
      </div>
      <div class="footer__list-contents">
        <div class="footer__column-list">
          <div class="footer-in-column-list">
            <ul class="footer__nav-list nav-list">
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
            <ul class="footer__nav-list nav-list">
              <li class="nav-list__heading-item">
                <a href="about.html" class="nav-list__heading-link">私たちについて</a>
              </li>
            </ul>
          </div>
          <div class="footer-in-column-list">
            <ul class="footer__nav-list nav-list">
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
            <ul class="footer__nav-list nav-list">
              <li class="nav-list__heading-item">
                <a href="blog.html" class="nav-list__heading-link">ブログ</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer__column-list">
          <div class="footer-in-column-list">
            <ul class="footer__nav-list nav-list">
              <li class="nav-list__heading-item">
                <a href="voice.html" class="nav-list__heading-link">お客様の声</a>
              </li>
            </ul>
            <ul class="footer__nav-list nav-list">
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
          </div>
          <div class="footer-in-column-list">
            <ul class="footer__nav-list nav-list">
              <li class="nav-list__heading-item">
                <a href="faq.html" class="nav-list__heading-link">よくある質問</a>
              </li>
            </ul>
            <ul class="footer__nav-list nav-list">
              <li class="nav-list__heading-item">
                <a href="privacy-policy.html" class="nav-list__heading-link">プライバシー<br class="u-mobile" />ポリシー</a>
              </li>
            </ul>
            <ul class="footer__nav-list nav-list">
              <li class="nav-list__heading-item">
                <a href="terms-of-service.html" class="nav-list__heading-link">利用規約</a>
              </li>
            </ul>
            <ul class="footer__nav-list nav-list">
              <li class="nav-list__heading-item">
                <a href="contact.html" class="nav-list__heading-link">お問い合わせ</a>
              </li>
            </ul>
            <ul class="footer__nav-list nav-list">
              <li class="nav-list__heading-item">
                <a href="sitemap.html" class="nav-list__heading-link"> サイトマップ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__copy">
        <small
          class="footer__copy-text">Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
      </div>
    </div>
  </footer>

  <!-- ページトップボタン -->
  <div class="page-top js-page-top">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Group20.svg" alt="このボタンを押すとページトップへ戻ります" />
  </div>
</body>

</html>