<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'title' ); ?></title>
    <meta content="summary" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <?php wp_head(); ?>
</head>
<?php 
$homepage = ''; 
if( is_front_page() ) { $homepage = 'll-homepage '; } 
$has_user = is_user_logged_in() ? ' user--is-active ' : '';
$bodyclasses = $homepage . $has_user; 
$headerClass =  !empty( get_field('header_style') ) ? get_field('header_style') : 'primary'; 
?>
<body>
 