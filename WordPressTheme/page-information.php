<?php get_header(); ?>

<!-- メインビュー -->
<div class="information-mv sub-mv">
  <div class="sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-top-pc.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-top-pc.jpg"
        alt="海底に潜り珊瑚礁で魚と触れるダイバー" />
    </picture>
  </div>
  <h2 class="sub-mv__title">information</h2>
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

<!-- information-page -->
<div class="information-page layout-sub-page fish-icon">
  <div class="information-page__inner inner">
    <!-- タブ -->
    <div class="information-page__tab information-tab">
      <!-- タブボタン -->
      <div class="information-tab__button-list">
        <button id="tab1" class="information-tab__button js-tab-button is-active">
          <p class="information-tab__text">
            ライセンス<br class="u-mobile" />講習
          </p>
        </button>
        <button id="tab2" class="information-tab__button js-tab-button">
          <p class="information-tab__text">
            ファン<br class="u-mobile" />ダイビング
          </p>
        </button>
        <button id="tab3" class="information-tab__button js-tab-button">
          <p class="information-tab__text">
            体験<br class="u-mobile" />ダイビング
          </p>
        </button>
      </div>
      <!-- タブコンテンツ -->
      <ul class="information-tab__items">
        <li class="information-tab__item js-tab-content is-active">
          <div class="information-card">
            <div class="information-card__body">
              <h2 class="information-card__title">ライセンス講習</h2>
              <p class="information-card__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="information-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/license-img.jpg" alt="海辺に浮かぶ複数のダイバー" />
            </div>
          </div>
        </li>
        <li class="information-tab__item js-tab-content">
          <div class="information-card">
            <div class="information-card__body">
              <h2 class="information-card__title">ファンダイビング</h2>
              <p class="information-card__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="information-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fundiving-img.jpg"
                alt="海中を小魚の大群が泳いでいる" />
            </div>
          </div>
        </li>
        <li class="information-tab__item js-tab-content">
          <div class="information-card">
            <div class="information-card__body">
              <h2 class="information-card__title">体験ダイビング</h2>
              <p class="information-card__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="information-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/diving-img.jpg"
                alt="海中を二匹のチョウチョウウオが並んで泳いでいる" />
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<?php get_footer(); ?>