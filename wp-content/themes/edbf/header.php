<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">

    <?php wp_head(); ?>

   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mat.css">

    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.css">

</head>

<body>

        <?php get_sidebar(); ?>



