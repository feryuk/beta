<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>



<?php wp_footer(); ?>



<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START FOOTER -->
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.</span>
            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->



<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="/beta/test/js/plugins/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="/beta/test/js/materialize.min.js?gdfgf"></script>
<!--prism-->
<script type="text/javascript" src="/beta/test/js/plugins/prism/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="/beta/test/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!-- chartist -->
<script type="text/javascript" src="/beta/test/js/plugins/chartist-js/chartist.min.js"></script>


<!-- masonry -->
<script src="/beta/test/js/plugins/masonry.pkgd.min.js"></script>
<!-- imagesloaded -->
<script src="/beta/test/js/plugins/imagesloaded.pkgd.min.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="/beta/test/js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="/beta/test/js/custom-script.js?<?php echo time();?>"></script>

<script type="text/javascript">
    /*
     * Masonry container for eCommerce page
     */

    var $containerProducts = $("#products");
    //$containerProducts.css({opacity: 0});
    function reinitializeMasonry() {

        $containerProducts.imagesLoaded(function () {
            $containerProducts.masonry({
                itemSelector: ".product",
                columnWidth: ".product-sizer",
                isAnimated: false,
                transitionDuration: 1
            });
            $('.progress').css({display: 'none'})
            $containerProducts.css({opacity: 1});
        });
    }
    reinitializeMasonry();
</script>


</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/eCommerce-products-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2017 23:21:19 GMT -->
</html>