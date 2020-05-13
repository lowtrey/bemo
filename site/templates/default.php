<?php if (!$kirby->user()) go('/login') ?>

<?php snippet("header") ?>
  <?= $page->heading() ?>

<?php snippet("footer") ?>
