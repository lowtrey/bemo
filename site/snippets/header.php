<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta name="robots" content="<?php echo ($page->toggle()->toBool() === true ? 'noindex' : '') ?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $page->meta_title() ?></title>
    <meta name="description" content="<?= $page->meta_description() ?>">

    <?= css("assets/css/index.css") ?>

    <!-- Facebook Pixel Code -->
    <?= $site->facebook_pixel_code() ?>

    <!-- Google Analytics Code -->
    <?= $site->google_analytics_code() ?>

  </head>
  
  <body>
      <header>
        <a href="<?= $site->url() ?>">
          <img class="logo" src="<?= $site->logo() ?>" alt="Site logo">
        </a>
        <nav class="menu">
          <?php foreach ($site->children()->listed() as $subpage): ?>
          <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
          <?php endforeach ?>
        </nav>
      </header>