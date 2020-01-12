<?php
  require_once substr($_SERVER['SCRIPT_FILENAME'], 0, -strlen($_SERVER['SCRIPT_NAME'])).'/asset/include/init.php';

  $description = '';
  $keywords = '';
  $fbimage = '';
  $title = '';
  $pankuzu = array(
    'トップページ' => '/'
  );
?>
<?php include 'header.php'; ?>

<main class="main" role="main">
  <!-- Test
  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
  <section class="test">
    <div class="filter__wrapper @accordion">
      <header class="@accordion__trigger">
        トリガー
      </header>
      <div class="@accordion__content">
        コンテンツ
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias sed blanditiis earum ipsa harum repellat vitae quisquam sequi fuga aliquam, totam impedit cum provident aspernatur reprehenderit perspiciatis, facilis recusandae nostrum!
      </div>
    </div>
    <div class="filter__wrapper @accordion">
      <header class="@accordion__trigger">
        トリガー
      </header>
      <div class="@accordion__content">
        コンテンツ
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias sed blanditiis earum ipsa harum repellat vitae quisquam sequi fuga aliquam, totam impedit cum provident aspernatur reprehenderit perspiciatis, facilis recusandae nostrum!
      </div>
    </div>
    <div class="filter__wrapper @accordion">
      <header class="@accordion__trigger">
        トリガー
      </header>
      <div class="@accordion__content">
        コンテンツ
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias sed blanditiis earum ipsa harum repellat vitae quisquam sequi fuga aliquam, totam impedit cum provident aspernatur reprehenderit perspiciatis, facilis recusandae nostrum!
      </div>
    </div>
    <div class="filter__wrapper @accordion">
      <header class="@accordion__trigger">
        トリガー
      </header>
      <div class="@accordion__content">
        コンテンツ
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias sed blanditiis earum ipsa harum repellat vitae quisquam sequi fuga aliquam, totam impedit cum provident aspernatur reprehenderit perspiciatis, facilis recusandae nostrum!
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
