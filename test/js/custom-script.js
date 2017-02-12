/*================================================================================
 Item Name: Materialize - Material Design Admin Template
 Version: 3.1
 Author: GeeksLabs
 Author URL: http://www.themeforest.net/user/geekslabs
 ================================================================================

 NOTE:
 ------
 PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
 WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */

var myVar;
$(document).ready(function () {


    /**
     * Generate results when the input form is submityted
     */
    $( "#search_form" ).submit(function( event ) {
        clearTimeout(myVar);
        product = '<div class="product-sizer"></div>';
        event.preventDefault();

      delayEffect();

        getResults();

    });

    /**
     * Generate results when the price range slider is changed
     */
    slider.noUiSlider.on('set.one', function(values, handle){
        $('#low_price').val(values[0]);
        $('#high_price').val(values[1]);

        clearTimeout(myVar);
        product = '<div class="product-sizer"></div>';
        event.preventDefault();
        delayEffect();
        getResults();

    });


    /**
     *
     * @param ev
     */
    window.onscroll = function(ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 100) {
            console.log("you're at the bottom of the page");
        }
    };


});


var keywords = '';
//var results_container = $('#products');
var json_url = ' http://www.everydayisblackfriday.co.uk/beta/wp-content/plugins/edbf/getjson/getresults.php?fdfdhgydgfdsef=&q=';
var product = '<div class="product-sizer"></div>';
var image;
var image_prefix = '';
var jqobj;
function getResults() {

    var query = $('#search').val();
    var order_by = $('#order_by').val();
    var asc_desc = $('#asc_desc').val();
    var low_price = $('#low_price').val();
    var high_price = $('#high_price').val();


    // Change url on form submit
    var queryformatted = query.replace(/\s+/g, '-').toLowerCase();
    //window.history.pushState('page2', 'Title', '/beta/'+queryformatted);
    // then use the below to capture the prev/back button
    // window.onpopstate = function(e){
    //     if(e.state){
    //         document.getElementById("content").innerHTML = e.state.html;
    //         document.title = e.state.pageTitle;
    //     }
    // };


    $.getJSON( json_url+query+'&order_by='+order_by+'&asc_desc='+asc_desc+'&low_price='+low_price+'&high_price='+high_price, function( data ) {


        //console.log(data);
        var finalData = data;

        var title_ready = '';
        $.each(finalData, function( index, value ) {

            if (value.title == null) {
                value.title = '';
            } else {
                value.title =  shorten(value.title, 80);
                title_ready = value.title;
                //title_ready = title_readyx.replace("adidas", "W3Schools");


                // value.title = str.replace(query, "W3Schools");
            }




            product += " <div class=\"product\"> <div class=\"card\"> <p class=\" grey-text ultra-small center-align product-title\"><a href=\""+value.url+"\" class=\"grey-text text-lighten-1\">"+title_ready+" <span style='font-weight: bold;'>sony</span></a> </p> <div class=\"center-align grey-text text-lighten-2 mega-small\">"+value.website+" "+value.ID+"</div> <div class=\"card-image waves-effect waves-block waves-light\"> <a href=\"#\"><img src=\""+value.thumbnail+"\" alt=\"product-img\"> </a> </div> <ul class=\"card-action-buttons\"> <li><a class=\"btn-floating waves-effect waves-light red accent-1\"><i class=\"mdi-action-favorite\"></i></a> </li> <li><a class=\"btn-floating waves-effect waves-light light-blue accent-1\"><i class=\"mdi-action-info activator\"></i></a> </li> </ul> <div class=\"card-content\"> <div class=\"row\"> <div class=\"col s12\">£"+value.price+" </div></div> </div> <div class=\"card-reveal\"> <span class=\"card-title grey-text text-darken-4\"><i class=\"mdi-navigation-close right\"></i> Apple MacBook Pro A1278 13\"</span> <p>Here is some more information about this product that is only revealed once clicked on.</p> </div> </div> </div>";
        });

         jqobj = $(product);

        $containerProducts.html('');
        $containerProducts.append( jqobj ).imagesLoaded(function(){

            $containerProducts.masonry( 'prepended', jqobj, true );
            clearTimeout(myVar);
            $containerProducts.css({opacity: 1});
            $('.progress').css({display: 'none'})


        });

        clearTimeout(myVar);
        $containerProducts.css({opacity: 1});
        $('.progress').css({display: 'none'})
    });






    //return jqxhr;
}

function shorten(str, maxLen, separator = ' ') {
    if (str.length <= maxLen) return str;
    return str.substr(0, str.lastIndexOf(separator, maxLen));
}


function delayEffect() {

    myVar = setTimeout(function(){
    $containerProducts.css({opacity: 0.25});
    $('.progress').css({display: 'block'});
    }, 160);
}

/**
 * Noui slider
 */

var slider = document.getElementById('slider');

noUiSlider.create(slider, {
    start: [0, 2000],
    tooltips: [
        wNumb({ decimals: 0,
        thousand: ',',
        prefix: '£',})
    ,
        wNumb({ decimals: 0,
        thousand: ',',
        prefix: '£',})
    ],
    connect: true,
    range: {
        'min': 0,
        'max': 2000
    }
});
