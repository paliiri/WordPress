<form class="searchform form-group" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
  <input
    type="text"
    placeholder="Поиск"
    class="form-control"
    value="<?php echo get_search_query(); ?>"
    name="s"
    id="s">
  <button class="searchform-button">
    <i class="fa fa-search"></i>
  </button>
</form>