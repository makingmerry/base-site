<footer>
  Foot
  <nav>
    <?php
      $data = [
        'links' => [
          0 => [
            'label' => 'Home',
            'href' => '/index.php',
            'controls' => 'index',
          ],
          1 => [
            'label' => 'Page',
            'href' => '/page.php',
            'controls' => 'page',
          ],
        ],
      ];
      snippet('navigations/foot', $data);
    ?>
  </nav>
</footer>