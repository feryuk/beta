<?php
/**
 *
 * Template Name: Home Page
 * Created by PhpStorm.
 * User: Feri
 * Date: 18/12/2016
 * Time: 10:52
 */


get_header();




?>

<?php

$products = get_products_by_keyword('super');

foreach($products as $product) {
    echo $product->title.'<br>';


}

?>



<?php get_footer(); ?>
