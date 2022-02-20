<?php

/* Template Name: Portfolio Detail */

?>

<?php 

get_header();?>

<?php 
while (have_posts()) : the_post(); ?>




<main>
<div class="">

  <div class="project_container">
    <div class="project">
    <h3 class="tag"><?php the_field('category');?>
    <h1 class="title"><?php the_title(); ?> </h1>

    <div class="">
        <!--Start content-->
        <?php the_content(); ?>

        <h5 style="margin-left: 3rem; font-size: 1rem; margin-top: -1.5rem;"><?php the_field('project_year');?> | <?php the_field('project_client');?></h5>
        
        <!--Image Section (custom field) -->
        <div class="image">
        <?php $image = get_field('primary_image'); 
              $picture = $image['sizes']['large'];?>
              <img src="<?php echo $picture;?>" class="microinteraction">
              <p><?php the_field('caption');?></p>
        </div>
        
              <!-- place after line 32 to check sizes / var_dump($image); -->

        <div class="text-content">
        <h2><?php the_field('overview_heading');?></h2>
        <br>
        <p><?php the_field('overview_paragraph');?></p>
        <br>

        <h2><?php the_field('context_heading');?></h2>
        <h3 style="color:#E57347; font-family: Gilroy-Bold;"><?php the_field('background_heading');?></h3>
        <p><?php the_field('background_paragraph');?></p>

        <h3 style="color:#E57347; font-family: Gilroy-Bold;"><?php the_field('goals_heading');?></h3>

        <ul class="goals-list">
          <li class="goals"><?php the_field('goals_list');?></li>
          <li class="goals"><?php the_field('goals_list_2');?></li>
          <li class="goals"><?php the_field('goals_list_3');?></li>
          <li class="goals"><?php the_field('goals_list_4');?></li>
        </ul>
      
    <div class="table-flex">
      <?php  $table = get_field( 'table' );
        if ( ! empty ( $table ) ) {
            echo '<table border="0">';
                if ( ! empty( $table['caption'] ) ) {
                  echo '<caption>' . $table['caption'] . '</caption>';
                }
                if ( ! empty( $table['header'] ) ) {
                    echo '<thead>';
                        echo '<tr>';
                            foreach ( $table['header'] as $th ) {
                                echo '<th>';
                                    echo $th['c'];
                                echo '</th>';
                            }
                        echo '</tr>';
                    echo '</thead>';
                }
                echo '<tbody>';
                    foreach ( $table['body'] as $tr ) {
                        echo '<tr>';
                            foreach ( $tr as $td ) {
                                echo '<td>';
                                    echo $td['c'];
                                echo '</td>';
                            }

                        echo '</tr>';
                    }
                echo '</tbody>';
            echo '</table>';
        }
        ?>
</div>

<div class="image">
  <?php $image = get_field('secondary_image'); 
      $picture = $image['sizes']['large'];?>
      <img src="<?php echo $picture;?>" class="final-build">
</div>

      <h2><?php the_field('beta_heading');?></h2>
      <p><?php the_field('beta_paragraph');?></p>

    <div class="quote-section">
    <hr style="width: 100px; color: #264e5e; margin-top: 2rem; border: 2px solid #ECEDF2;">
    <h4><?php the_field('quote');?></h4>
    <hr style="width: 100px; color: #264e5e; margin-top: 2rem; border: 2px solid #ECEDF2;">
    </div>
  

    <h2><?php the_field('final_heading');?></h2>
    <p><?php the_field('final_paragraph');?></p>

<div class="image">
    <?php
    // Load value.
    $iframe = get_field('video');

    // Use preg_match to find iframe src.
    preg_match('/src="(.+?)"/', $iframe, $matches);
    $src = $matches[1];

    // Add extra parameters to src and replace HTML.
    $params = array(
        'controls'  => 0,
        'hd'        => 1,
        'autohide'  => 1
    );
    $new_src = add_query_arg($params, $src);
    $iframe = str_replace($src, $new_src, $iframe);

    // Add extra attributes to iframe HTML.
    $attributes = 'frameborder="0"';
    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);


    // Display customized HTML.
    echo $iframe;
?>
</div>

    <div class="view_project">
        <h2><?php the_field('link_h2');?></h2>
        <a href="<?php the_field('button'); ?>"><button class="view">VIEW</button></a>

    </div>
</div>


  
        <!--End content-->
    </div>
</div>
</div>
</main>
<!-- <aside> -->
<!-- </aside> -->
</div>

<?php endwhile;?>


<?php get_footer(); ?>