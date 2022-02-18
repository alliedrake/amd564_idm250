<?php

if (version_compare('7.4', phpversion(), '>')) {
    die('You must be using PHP 7.4 or greater.');
}

// echo '<pre>';
// var_dump(phpversion());
// echo '</pre>';

// Check WP version
if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in WP 5.4.2 or later. Please upgrade WP site');
}

?>