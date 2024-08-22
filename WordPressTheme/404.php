<?php get_header(); ?>

<main>

  <section class="section-404 ">
    <div class="section-404__inner inner">
      <h2 class="section-404__title">404</h2>
      <p class="section-404__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
      <div class="section-404__btn">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="btn btn--white">
          <span class="btn__text btn__text--white">page&nbsp;<span class="btn__text-upper">top</span></span>
          <div class="btn__arrow btn__text--white"></div>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>