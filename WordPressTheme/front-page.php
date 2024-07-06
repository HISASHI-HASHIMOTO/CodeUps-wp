<?php get_header(); ?>

<main>
  <!-- mvセクション -->
  <div class="mv">
    <div class="mv__swiper swiper" id="slide1">
      <!-- swiper-wrapper -->
      <div class="mv__swiper-wrapper swiper-wrapper">
        <!-- スライド -->
        <?php
            $arrayCountUp = 0;
            foreach (SCF::get('top-mainview') as $field_name => $filed_value) :
              $carousel_thumbnail = wp_get_attachment_image_src($filed_value['swiper-mainview'], 'large');
              $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
              if ($arrayCountUp < 4) {
          ?>
        <div class="mv__swiper-slide swiper-slide">
          <picture>
            <source srcset="<?php echo $carousel_thumbnail ?>" media="(min-width: 768px)" />
            <img src="<?php echo $carousel_thumbnail ?>" alt="海底を優雅に泳ぐ亀" />
          </picture>
        </div>
        <?php }
          $arrayCountUp++;
        endforeach; ?>
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
        <?php
            $args = array(
                "post_type" => "campaign", // カスタム投稿のスラッグ名
                "posts_per_page" => 10, // 表示する件数
                'orderby' => 'date',
                'order' => 'DESC'  
            ); $the_query = new WP_Query($args);?>
        <?php if ($the_query->have_posts()) : ?>
        <!-- サブループ開始 -->
        <div class="campaign__content">
          <div class="campaign__swiper swiper" id="slide2">
            <!-- swiper-wrapper -->
            <div class="campaign__swiper-wrapper swiper-wrapper">
              <!-- スライド -->
              <?php while ($the_query->have_posts()) : $the_query->the_post();   the_content();?>


              <div class="campaign__swiper-slide swiper-slide">
                <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="campaign__slide-card campaign-card">
                  <figure class="campaign-card__img">
                    <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="no image">
                    <?php endif ?>
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__metabox">
                      <?php 
                    $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                    foreach (!empty($taxonomy_terms) ? $taxonomy_terms : [] as $taxonomy_term) :echo '<p class="campaign-card__meta category">' . esc_html($taxonomy_term->name) . '</p>'; endforeach;
                    ?>
                      <p class="campaign-card__title"><?php the_title(); ?></p>
                    </div>
                    <div class="campaign-card__box">
                      <div class="campaign-card__menu">全部コミコミ(お一人様)</div>
                      <div class="campaign-card__price">
                        <?php $fields = SCF::get_option_meta( 'theme-options', 'campaign__swiper' ); foreach ( $fields as $field_name => $fields_value ) { ?>
                        <div class="campaign-card__original-price"> <?php echo $fields_value['original']; ?></div>
                        <div class="campaign-card__discounted-rate"> <?php echo $fields_value['discounted']; ?></div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <!-- <div class="campaign__swiper-slide swiper-slide">
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
              </div> -->
              <?php endwhile; ?>
              <!-- サブループ終了 -->
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
        <?php else : ?>
        <p class="campaign__message">記事が投稿されていません</p>
        <?php endif; ?>
        <div class="campaign__btn">
          <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="btn">
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/ocean3.jpg" alt="海底の珊瑚と優雅に泳ぐチョウチョウウオ" />
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


  <?php get_footer(); ?>