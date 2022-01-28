<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="style.css"> wrong way to do it-->
        <title>IDM 250</title>

    <?php wp_head(); ?> <!-- always put this just before closing tag of theme -->
    </head>

    <body> 
<?php 
// Registered this new menu in functions.php via register_theme_navigation()
wp_nav_menu(['theme_location' => 'primary_menu']);
