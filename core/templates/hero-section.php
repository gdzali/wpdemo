<?php

$title = get_field('title');
$content = get_field('content');
$subtitle = get_field('subtitle');
$img = get_field('background_image');

?>

<section class="heroSection">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-xl-6">
        <div class="left-area">
          <h1><?= $title ?></h1>
          <div class="content">
            <?= $content ?>
          </div>
          <span><?= $subtitle ?></span>
        </div>
      </div>
      <div class="col-12 col-xl-6" style="background-image:url('<?= $img['url'] ?>')"></div>
    </div>
  </div>
</section>
