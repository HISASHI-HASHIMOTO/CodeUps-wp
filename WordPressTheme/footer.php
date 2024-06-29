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
          <a href="<?php echo $contact ?>" class="btn">
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

<?php wp_footer(); ?>
</body>

</html>