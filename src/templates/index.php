<?php
  include 'src/utils/helpers.php';
  $site_data = [
    'template' => 'index',
    'uid' => 'index',
    'title' => 'Index',
    'desc' => 'Index description',
  ];
  snippet('layouts/head', $site_data);
?>

<div
  class="pos-relative z-1"
  id="mainframe-wp">
  <main
    class="mainframe"
    <?php echo $site_data['template'] ? 'data-template="'.$site_data['template'].'"' : ''; ?>
    <?php echo $site_data['uid'] ? 'data-uid="'.$site_data['uid'].'"' : ''; ?>>
    <h1>
      <?php echo $site_data['title']; ?> page
    </h1>
    <a href="/page.php">
      go to default page
    </a>
  </main>
</div>

<?php snippet('layouts/foot'); ?>