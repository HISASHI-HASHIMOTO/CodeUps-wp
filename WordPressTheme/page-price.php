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
    // カスタムフィールドからデータを取得
    $course_table = SCF::get_option_meta('price-table', 'course_table');

    if ($course_table) :
        // カテゴリごとにデータを分類するための配列を用意
        $grouped_courses = array();
        foreach ($course_table as $item) {
            // カテゴリごとにコースをグループ化
            $category = $item['course_category'];
            $grouped_courses[$category][] = array(
                'name' => $item['course_name'],
                'price' => $item['course_price']
            );
        }

        // 各カテゴリごとにテーブルを作成
        foreach ($grouped_courses as $category => $courses) :
       ?>
      <table class="price-page__table table">
        <thead class="table__thead u-mobile">
          <tr class="table__row">
            <th colspan="2" class="table__header">
              <div class="table__header-content">
                <div class="table__header-img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/shark-icon-white.png" alt="" />
                </div>
                <span class="table__header-text"><?php echo esc_html($category); ?></span>
              </div>
            </th>
          </tr>
        </thead>
        <tbody class="table__tbody">
          <th rowspan="<?php echo count($courses); ?>" class="table__header-content table__header-content--pc">
            <div class="table__header-column">
              <span class="table__column-text"><?php echo esc_html($category); ?></span>
              <span class="table__column-img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/shark-icon-white.png" alt="クジラのロゴ" />
              </span>
            </div>
          </th>
          <?php foreach ($courses as $course) : ?>
          <tr class="table__row">
            <td class="table__data-cell">
              <?php echo nl2br(esc_html($course['name'])); // 改行タグを挿入 ?>
            </td>
            <td class="table__data-cell">¥<?php echo number_format($course['price']); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php endforeach; endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>