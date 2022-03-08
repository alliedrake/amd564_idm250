
<?php // get_search_form(); is default way in WP of adding a search bar, we want to create our own ?>
<!-- Create search page  -->
<form class="search-form" action="<?php echo home_url(); ?>/search/"
  method="get">

    <input placeholder="Search..." type="text" id="mySearch" name="s" value="">

    <input type="hidden" name="post_type[]" value="idm-projects">

    <button class="search"><i class="fa fa-search"></i></button>

</form>

<!-- You can make more categories based on your field types ex. idm-books -->