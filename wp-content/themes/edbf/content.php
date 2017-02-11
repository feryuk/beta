<?php
/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 21/01/2017
 * Time: 21:06
 * Thios is where the main content ui
 *
 */

?>

content.php

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    // Post thumbnail.

    ?>

    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>

    </div><!-- .entry-content -->


</article><!-- #post-## -->