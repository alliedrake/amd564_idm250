<?php
    // Has to be done in the loop so we have access to the featured image ID
    $primary_image = idm_get_asset_by_id(get_post_thumbnail_id());
    // Image doesn't exist, lets add a placeholder image to force user to upload an image.
    if (!$primary_image) {
        $primary_image['alt'] = 'Missing Image';
        $primary_image['src'] = '//via.placeholder.com/1058x705';
    };

    // Get project categories from this post ID
    $project_categories = get_the_terms(get_the_ID(), 'idm-project-categories');

?>

<div class="teaser-container">
    <div class="teaser-content">

      <?php $image = get_field('primary_image'); 
                    $picture = $image['sizes']['large'];?>
                    <img src="<?php echo $picture;?>" class="teaser-image">

                    <?php if ($project_categories) {
          // Get total items count
          $total = count($project_categories) - 1;
          // Loop through this post's categories and spit them out
          foreach ($project_categories as $key => $category) {
              $category_link = get_term_link($category->term_id);
              echo "<span class='project-teaser__tag'><a style='padding-left: 0rem;' href='$category_link'>$category->name</a></span>";
              // Add comma after every loop. Let's not add it to the last item in the loop
              if ($key != $total) {
                  echo ', ';
              }
          }
      }
        ?>

                    <a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
                    <p class="excerpt"><?php the_excerpt();?></p>

      </div>

</div>
  