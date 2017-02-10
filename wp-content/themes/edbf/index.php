<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


$is_sale_page = function() {



};






// if is home page
if(is_home()) {

        get_header('home');
        get_sidebar('home');
        get_template_part( 'content', 'home' );

}
//
//// if is sale page
//else if () {
//
//
//}
//// if is product page
//else if () {
//
//}
//// if is auto sale
// else if () {
//
//
// }
//
//// if is sale index
// else if () {
//
//
// }
//
//// if simple content
// else if () {
//
//
// }
//













?>

index.php



<?php




?>

<?php get_footer(); ?>
