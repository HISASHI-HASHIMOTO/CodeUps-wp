</main>

<?php
// 除外するページのスラッグを配列で指定します
$exclude_pages = array( 'contact', 'thanks' );

// 現在のページが除外ページに含まれていない、かつ404ページでない場合のみテンプレートパーツを読み込みます
if ( !is_page( $exclude_pages ) && !is_404() ) {
    get_template_part( 'assets/template/contact' );
}
?>


<!-- footerセクション -->
<footer id="footer" class="footer layout-footer <?php if (is_404()) { echo 'layout-footer--marginnone'; } ?>">
  <div class="footer__inner inner">
    <div class="footer__title-box">
      <div class="footer__title">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="footer__title-link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps1.png" alt="CodeUpsロゴ" />
        </a>
      </div>
      <div class="footer__sns-list">
        <div class="footer__sns-icon">
          <a href="https://www.facebook.com/" class="footer__sns-link"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.png" alt="facebookロゴ" />
          </a>
        </div>
        <div class="footer__sns-icon">
          <a href="https://www.instagram.com/" class="footer__sns-link"><img
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
              <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="nav-list__heading-link">キャンペーン</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="nav-list__item-link">ライセンス取得</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="nav-list__item-link">貸切体験ダイビング</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/campaign/")) ?>" class="nav-list__item-link">ナイトダイビング</a>
            </li>
          </ul>
          <ul class="footer__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/about/")) ?>" class=" nav-list__heading-link">私たちについて</a>
            </li>
          </ul>
        </div>
        <div class="footer-in-column-list">
          <ul class="footer__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/information/")) ?>" class="nav-list__heading-link">ダイビング情報</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/information?&id=tab1")) ?>" id="tab1"
                class="nav-list__item-link">ライセンス情報</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/information?&id=tab3")) ?>" id="tab3"
                class="nav-list__item-link">体験ダイビング</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/information?&id=tab2")) ?>" id="tab2"
                class="nav-list__item-link">ファンダイビング</a>
            </li>
          </ul>
          <ul class="footer__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/blog/")) ?>" class="nav-list__heading-link">ブログ</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__column-list">
        <div class="footer-in-column-list">
          <ul class="footer__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/voice/")) ?>" class="nav-list__heading-link">お客様の声</a>
            </li>
          </ul>
          <ul class="footer__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/price/")) ?>" class="nav-list__heading-link">料金一覧</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/price/")) ?>" class="nav-list__item-link">ライセンス講習</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/price/")) ?>" class="nav-list__item-link">体験ダイビング</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo esc_url(home_url("/price/")) ?>" class="nav-list__item-link">ファンダイビング</a>
            </li>
          </ul>
        </div>
        <div class="footer-in-column-list">
          <ul class="footer__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/faq/")) ?>" class="nav-list__heading-link">よくある質問</a>
            </li>
          </ul>
          <ul class="footer__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/privacy-policy/")) ?>" class="nav-list__heading-link">プライバシー<br
                  class="u-mobile" />ポリシー</a>
            </li>
          </ul>
          <ul class="footer__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/terms-of-service/")) ?>" class="nav-list__heading-link">利用規約</a>
            </li>
          </ul>
          <ul class="footer__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/contact/")) ?>" class="nav-list__heading-link">お問い合わせ</a>
            </li>
          </ul>
          <ul class="footer__nav-list nav-list">
            <li class="nav-list__heading-item">
              <a href="<?php echo esc_url(home_url("/sitemap/")) ?>" class="nav-list__heading-link">サイトマップ</a>
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

<?php wp_footer(); ?>
</body>

</html>