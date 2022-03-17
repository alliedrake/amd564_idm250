<?php

/* Template Name: General */

?>

<?php 

get_header();?>

<?php 
while (have_posts()) : the_post(); ?>




<main>

<div class="">

  <div class="project_container">
    <div class="project2">
    <h3 class="tag"><?php echo get_field('h3_tag');?></h3>
    <h1 class="title"><?php the_title(); ?> </h1>

    <div class="">
        <!--Start content-->
        <?php the_content(); ?>
        
        <!--Image Section (custom field) -->
        <div class="image">
        <?php $image = get_field('primary_image'); 
              $picture = $image['sizes']['large'];?>
              <img src="<?php echo $picture;?>" class="teaser-image">
              <h6><?php the_field('caption');?></h6>
        </div>
        
              <!-- place after line 32 to check sizes / var_dump($image); -->

        <div class="text-content">
        <h2><?php the_field('h2');?></h2>
        <br>
        <p><?php the_field('paragraph');?></p>
        <br>

        <h3><?php the_field('h3');?></h3>
        <p><?php the_field('paragraph_two');?></p>

        <h4><?php the_field('h4');?></h4>

        <ul class="goals-list">
          <li><?php the_field('goals_list');?></li>
          <li><?php the_field('goals_list_2');?></li>
          <li><?php the_field('goals_list_3');?></li>
          <li><?php the_field('goals_list_4');?></li>
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


    <div class="quote-section">
    <hr style="width: 100px; color: #264e5e; margin-top: 2rem; border: 2px solid #ECEDF2;">
    <h4><?php the_field('quote_h5');?></h4>
    <hr style="width: 100px; color: #264e5e; margin-top: 2rem; border: 2px solid #ECEDF2;">
    </div>
  

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

<div class="conclusion">

<h2><?php the_field('conclusion_h2');?></h2>

<p>1. <?php the_field('ordered_list');?></p>
<p>2. <?php the_field('ordered_list_2');?></p>
<p>3. <?php the_field('ordered_list_3');?></p>

</div>

    <div class="view_project">
        <a href="<?php the_field('h6_button'); ?>"><button class="view">BUTTON</button></a>

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