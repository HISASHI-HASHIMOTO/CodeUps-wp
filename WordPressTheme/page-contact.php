<?php get_header(); ?>

<!-- メインビュー -->
<div class="contact-page-mv sub-mv">
  <div class="sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-pc.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-mv-sp.jpg" alt="海辺に浮かんで頭だけ見えているダイバー" />
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


<section class="contact-page layout-sub-page fish-icon">
  <div class="contact-page__inner">
    <div class="contact-page__form form">
      <?php echo do_shortcode('[contact-form-7 id="b44bd7b" title="お問い合わせ"]'); ?>
      <!-- <form action="" id="" method="post">
        <dl class="form__item">
          <dt>
            <label for="name">
              <span class="form__label-name">お名前</span>
              <span class="form__label-required">必須</span>
            </label>
          </dt>
          <dd>
            <input type="text" name="" required placeholder="沖縄&nbsp;太郎" />
          </dd>
        </dl>
        <dl class="form__item">
          <dt>
            <label for="email">
              <span class="form__label-name">メールアドレス</span>
              <span class="form__label-required">必須</span>
            </label>
          </dt>
          <dd>
            <input type="email" name="" required placeholder="aaa000@ggmail.com" />
          </dd>
        </dl>
        <dl class="form__item">
          <dt>
            <label for="tel">
              <span class="form__label-name">電話番号</span>
              <span class="form__label-required">必須</span>
            </label>
          </dt>
          <dd>
            <input type="tel" name="" required placeholder="000-0000-0000" />
          </dd>
        </dl>
        <dl class="form__item">
          <dt>
            <label for="checkbox">
              <span class="form__label-name">お問合せ項目</span>
              <span class="form__label-required">必須</span>
            </label>
          </dt>
          <dd class="form__checkbox">
            <label>
              <input type="checkbox" name="" required />
              <span class="form__checkbox-text">ダイビング講習について</span>
            </label>
            <label>
              <input type="checkbox" name="" required />
              <span class="form__checkbox-text">ファンダイビングについて</span>
            </label>
            <label>
              <input type="checkbox" name="" required />
              <span class="form__checkbox-text">体験ダイビングについて</span>
            </label>
          </dd>
        </dl>
        <dl class="form__item">
          <dt>
            <label for="select">
              <span class="form__label-name">キャンペーン</span>
            </label>
          </dt>
          <dd class="form__select">
            <select name="">
              <option value="サンプル1">キャンペーン内容を選択</option>
              <option value="ダイビング講習について">
                ダイビング講習について
              </option>
              <option value="ファンダイビングについて">
                ファンダイビングについて
              </option>
              <option value="体験ダイビングについて">
                体験ダイビングについて
              </option>
            </select>
          </dd>
        </dl>
        <dl class="form__item">
          <dt>
            <label for="textarea">
              <span class="form__label-name">お問合せ内容</span>
              <span class="form__label-required">必須</span>
            </label>
          </dt>
          <dd>
            <textarea type="textarea" id="textarea" name="" required></textarea>
          </dd>
        </dl>
        <div class="form__check">
          <label>
            <input type="checkbox" name="" value="" required />
            <span class="form__checkbox-text2">個人情報の取り扱いについて同意のうえ送信します。</span>
          </label>
        </div>
        <div class="form__btn">
          <button class="btn">
            <span class="btn__text">send</span>
            <div class="btn__arrow"></div>
          </button>
        </div>
      </form> -->
    </div>
  </div>
</section>

<?php get_footer(); ?>