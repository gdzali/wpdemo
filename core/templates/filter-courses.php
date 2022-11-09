<div class="filterArea_container">
  <div class="singleFilterArea" id="campus">
    <div class="filterCollapseButton">
      <a class="btn btn-collapse" data-bs-toggle="collapse" href="#collapseCampus" role="button" aria-expanded="true" aria-controls="collapseCampus">
        Filter by campus
      </a>
    </div>
    <div class="collapse filterCollapseOptions show" id="collapseCampus">
      <form class="options" action="#" method="post">
        <?= filter_terms_call('campus') ?>
      </form>
    </div>
  </div>
  <div class="singleFilterArea" id="course_type">
    <div class="filterCollapseButton">
      <a class="btn btn-collapse" data-bs-toggle="collapse" href="#collapseCourseType" role="button" aria-expanded="true" aria-controls="collapseCourseType">
        Filter by course type
      </a>
    </div>
    <div class="collapse filterCollapseOptions show" id="collapseCourseType">
      <form class="options" action="#" method="post">
        <div class="singleOption" id="all">
          <input type="checkbox" id="all" value="All"/>
          <label for="all">All</label>
        </div>
        <?= filter_terms_call('course_type'); ?>
      </form>
    </div>
  </div>
  <div class="apply-button-area">
    <a href="#">Apply now</a>
  </div>
</div>
