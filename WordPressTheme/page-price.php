<?php get_header(); ?>

<!-- メインビュー -->
<div class="price-mv sub-mv">
  <div class="sub-mv__img">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-pc.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-sp.jpg" alt="海辺に浮かんで頭だけ見えているダイバー" />
    </picture>
  </div>
  <h2 class="sub-mv__title">price</h2>
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

<!-- price-pageセクション -->
<section class="price-page layout-sub-page fish-icon">
  <div class="price-page__inner sub-inner">
    <div class="price-page__contents">
      <?php
            // 講習カテゴリごとに配列整理
            $diving_categories = [
              1 => [
                // 講習カテゴリ名
                'title' => SCF::get_option_meta('price-table','course1'),
                // 講習名・料金のグループ
                'group' => 'price-group1',
                // 講習名・料金
                'lesson_key' => ['lesson1','price1']
              ],
              2 => [
                'title' => SCF::get_option_meta('price-table','course2'),
                'group' => 'price-group2',
                'lesson_key' => ['lesson2','price2']
              ],
              3 => [
                'title' => SCF::get_option_meta('price-table','course3'),
                'group' => 'price-group3',
                'lesson_key' => ['lesson3','price3']
              ],
              4 => [
                'title' => SCF::get_option_meta('price-table','course4'),
                'group' => 'price-group4',
                'lesson_key' => ['lesson4','price4']
              ]
            ];
          ?>
      <!-- 講習カテゴリ取得 -->
      <?php foreach ($diving_categories as $diving_category) :?>
      <table class="price-page__table table">
        <thead class="table__thead u-mobile">
          <tr class="table__row">
            <th colspan="2" class="table__header">
              <div class="table__header-content">
                <div class="table__header-img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/shark-icon-white.png" alt="" />
                </div>
                <!-- 講習カテゴリ出力 -->
                <span class="table__header-text"><?php echo esc_html($diving_category['title']); 
                ?></span>
              </div>
            </th>
          </tr>
        </thead>
        <tbody class="table__tbody">
          <th rowspan="3" class="table__header-content table__header-content--pc">
            <div class="table__header-column">
              <span class="table__column-text"><?php echo esc_html($diving_category['title']); ?></span>
              <span class="table__column-img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/shark-icon-white.png" alt="クジラのロゴ" />
              </span>
            </div>
          </th>
          <!-- // 講習名・料金のグループ取得 -->
          <?php
                  $lesson_group = SCF::get_option_meta('price-table', $diving_category['group']);
                  foreach ($lesson_group as $item) :
                ?>
          <tr class="table__row">
            <td class="table__data-cell">
              <!-- // 講習名・料金のグループ出力 -->
              <?php echo $item[$diving_category['lesson_key'][0]]; ?>
            </td>
            <td class="table__data-cell">
              ¥<?php echo $item[$diving_category['lesson_key'][1]]; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>