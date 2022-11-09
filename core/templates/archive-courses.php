<div class="filteringAreaResults_container">
  <div class="container">
    <div class="row">
    <?php
      $args = array (
        'post_type'              => array( 'course' ),
        'posts_per_page'         => '-1'
      );

      $query = new WP_Query( $args );
      if ( $query->have_posts() ) {
      	while ( $query->have_posts() ) {
      		$query->the_post();
      		?>
          <div class="col-12 col-xl-4 singleCourseItem">
            <div class="singleCourseItem_container">
              <a href="<?= the_permalink() ?>"><?= the_post_thumbnail('single-course-image') ?></a>
              <div class="singleCourseItem_body">
                <a href="<?= the_permalink() ?>"><span class="title"><?= the_title(); ?></span></a>
                <span class="duration"><?= get_field('course_type_tax')->name ?></span>
                <span class="time"><?= get_field('time') ?></span>
              </div>
              <div class="singleCourseItem_footer">
                <?php
                $terms = get_field('campuses_tax');
                if( $terms ): ?>
                <ul>
                <?php foreach( $terms as $term ): ?>
                    <li class="tax-item" data-toggle="tooltip" data-placement="bottom"  title="<?= $term->name ?>">
                      <?php
                      $words = explode(' ', $term->name);
                      $result = $words[0][0]. $words[1][0];
                      echo $result;
                      ?>
                    </li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
              </div>
            </div>
          </div>
          <?php
      	}
      }

      wp_reset_postdata();
    ?>

    </div>
  </div>
</div>
