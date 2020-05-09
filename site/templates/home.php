<?php snippet("header") ?>
<div class="feature">
  <img class="mainImage" src="http://cdainterview.com/resources/cda-interview-guide.jpg" alt="feature backgound">
</div>
<div class="main">
  <article>
    <h3 class="articleTitle"><?= $page->headline() ?></h3>

    <h4><?= $page->header_1() ?></h4>
    <?= $page->content_1()->kirbytext()->nl2br() ?>

    <h4><?= $page->header_2() ?></h4>
    <?= $page->content_2()->kirbytext()->nl2br() ?>

    <h4><?= $page->header_3() ?></h4>
    <?= $page->content_3()->kirbytext()->nl2br() ?>

    <h4><?= $page->header_4() ?></h4>
    <?= $page->content_4()->kirbytext()->nl2br() ?>

    <h4><?= $page->header_5() ?></h4>
    <?= $page->content_5()->kirbytext()->nl2br() ?>

    <h4><?= $page->header_6() ?></h4>
    <?= $page->content_6()->kirbytext()->nl2br() ?>

    <h4><?= $page->header_7() ?></h4>
    <?= $page->content_7()->kirbytext()->nl2br() ?>
  </article>
<?php snippet("footer") ?>