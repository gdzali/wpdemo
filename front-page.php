<?= get_header() ?>

<main>
  <?= the_content(); ?>

  <section class="filteringArea">
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-3">
          <?php get_template_part('core/templates/filter-courses') ?>
        </div>
        <div class="col-12 col-xl-9">
          <?php get_template_part('core/templates/archive-courses') ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?= get_footer(); ?>
