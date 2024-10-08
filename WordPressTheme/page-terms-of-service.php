<?php get_header(); ?>

<!-- メインビュー -->
<div class="Terms-page-mv sub-mv">
  <div class="sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-pc.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-mv-sp.jpg" alt="珊瑚礁と多くの魚が戯れるようす" />
    </picture>
  </div>
  <h2 class="sub-mv__title sub-mv__title--transform">Terms&nbsp;<span class="sub-mv__title-small">of</span>&nbsp;Service
  </h2>
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


<!-- プライバシー -->
<section class="terms-of-service layout-sub-page fish-icon">
  <div class="terms-of-service__inner inner">
    <h2 class="terms-of-service__title">利用規約 </h2>
    <div class="terms-of-service__contents">
      <p class="">
        以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。
      </p>
      <div class="terms-of-service__text-box">
        <ul type="1" class="">
          <li class="">1.概要
            この利用規約は、当社が提供するサービスの利用に関する条件を定めたものです。本規約に同意いただくことで、当社のサービスを利用いただけます。なお、本規約に違反した場合、当社はサービスの提供を中止することがあります。
          </li>
          <li class="">2.サービスの利用
            当社のサービスは、お客様が自己責任において利用するものとし、当社はその利用に対して責任を負いません。また、当社はいつでも、サービスの提供を中止することができるものとします。</li>
          <li class="">3.禁止事項 お客様は、以下の行為を禁止します。</li>
        </ul>
        <p class="">・当社のサービスに対して不正なアクセスをすること ・当社のサービスにおいて、他のユーザーに対して迷惑をかける行為をすること
          ・当社のサービスを商業目的で利用すること ・当社のサービスに関する知的財産権を侵害する行為をすること ・その他、法律や公序良俗に反する行為をすること
        </p>
      </div>
      <div class="">
        <ul type="1" class="">
          <li class="">1.知的財産権
            当社のサービスに関する知的財産権は、当社または当社にライセンスを許諾している者に帰属します。お客様は、当社の事前の承諾なしに、当社のサービスに関する知的財産権を使用することはできません。</li>
          <li class="">2.免責事項
            当社は、当社のサービスに関連して発生した損害について、一切の責任を負わないものとします。また、当社は、当社のサービスにより提供される情報の正確性、信頼性、完全性、適時性についても一切保証しません</li>
          <li class="">3.プライバシー 当社は、お客様の個人情報を適切に保護するために、個人情報保護方針に従って適切な取扱いを行います。</li>
          <li class="">4.その他の規定
            本規約は、日本法に準拠して解釈されるものとし、当社とお客様は、本規約に関する紛争が生じた場合、東京地方裁判所を第一審の専属的合意管轄裁判所とすることに同意します。</li>
          <li class="">5.利用規約の変更
            当社は、必要に応じて本利用規約を変更することがあります。変更後の利用規約は、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。</li>
        </ul>
      </div>
      <p class="">以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>