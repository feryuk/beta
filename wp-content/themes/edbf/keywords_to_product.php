<?php
/**
 * This file saves the keywords in the keywords_to_product database
 * Created by PhpStorm.
 * User: Feri
 * Date: 28/01/2017
 * Time: 00:50
 */

require($_SERVER['DOCUMENT_ROOT'] . '/wp-blog-header.php');
global $wpdb;

//require ($_SERVER['DOCUMENT_ROOT'] . '/wp-blog-header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/beta/wp-content/plugins/edbf/config/config.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/beta/wp-content/plugins/edbf/db/connect.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/beta/wp-content/plugins/edbf/DAL/FeedDAL.php');
$feed = new FeedDAL();






 $query = "SELECT * FROM iphonere_wp46.wp_latest_main WHERE ID NOT IN (SELECT product_id FROM iphonere_wp46.wp_keywords_to_product) AND status = 'on' AND (title  NOT like '' OR title NOT LIKE null) AND price > 0 ORDER BY datetime DESC LIMIT  200";

//$query = "SELECT * FROM iphonere_wp46.wp_latest_main WHERE status = 'on' AND title NOT LIKE ''ORDER BY ID LIMIT  1 ";



// get the products from wp_latest_main
$test_data = $feed->testSpeed($query);

//print_r($test_data);
// loop through the products
foreach ($test_data as $data) {
    //print_r($data);
    $title = strtolower($data['title']);
    $website_from_db = $data['website'];
  //  echo $title;




    $parse = parse_url($data['url']);
    $website = $parse['host'];
    $domaintostrip = $parse['scheme'].'://'.$parse['host'].'/';
    $urlwithkeywords = str_replace($domaintostrip, '', $data['url']);
  //  echo $urlwithkeywords.' is the url with keywords';

    $keywords = str_replace('-', ' ', $urlwithkeywords);
    $keywordstoadd = str_replace('sale', '', $keywords);
    $keywordstoadd = str_replace('/', ' ', $keywordstoadd);
    $keywordstoadd = str_replace('.html', '', $keywordstoadd);
    $keywordstoadd = str_replace('.htm', '', $keywordstoadd);
    $keywordstoadd = str_replace('.aspx', '', $keywordstoadd);
    $keywordstoadd = strtolower($keywordstoadd);

   // echo ' <br><br><strong>'.$keywordstoadd.'</strong> are the keywords<br><br>';









    $text = $title.' '.$keywordstoadd;

    $test_match = preg_match_all('~\b(\d+(?:\.\d{1,2})?)\s*(ml|gm?|kg|cm|inches|lb)\b~i', $text, $matches);
    preg_match_all('/([0-9]+)( "|")/', $text, $quote_inches);



    $modified_quote_inches = [];
    foreach($quote_inches as $quote_inch) {

        $modified_inch = str_replace('"', ' inches', $quote_inch);

        array_push($modified_quote_inches, $modified_inch);

    }






    $matched_keywords = '';
    foreach($matches[0] as $match) {

        $matched_keywords .= $match.' ';

    }


    $title .= ' '.$keywordstoadd;



    // REGEX TO GET ALL THE WORDS
    $n_words = preg_match_all('/([a-zA-Z]|[0-9]|\xC3[\x80-\x96\x98-\xB6\xB8-\xBF]|\xC5[\x92\x93\xA0\xA1\xB8\xBD\xBE]){1,}/', $title, $match_arr);
    $word_arr = ($match_arr[0]);
    //$word_arr['ID'] = $data['ID'];

    // Extract the words from the url


    // add the matched keywords into the array
    $word_arr = array_merge($word_arr, $matches[0]);


    $word_arr = array_merge($word_arr, array($website_from_db));


    $word_arr = array_merge($word_arr, $modified_quote_inches[0]);

   // print_r($modified_quote_inches);



    // make sure there is no repeat words
    $word_arr = array_unique($word_arr);

    // remove test words from array
    $array2 = array( "shir", "sale");
    $word_arr = array_diff($word_arr, $array2);




    // filter the stopwords


    // if price < previous_price OR price < subcatb OR price < subcatc OR price < subcatd THEN STATUS = 2



    //LOOP THROUGH THE WORDS
    foreach ($word_arr as $keyword) {

        $product_id = $data['ID'];

         //http://stackoverflow.com/questions/28985888/regex-to-get-number-and-string-after-number


        //echo '+++++++' . $keyword . '-----' . $data['ID'] . '<br>';

        $relevance = 50;
        if(is_numeric($keyword)) {

            $relevance = 30;
        }

      $wpdb->insert('wp_keywords_to_product', array(

    'product_id' =>  $product_id,
    'keyword' =>  $keyword,
    'relevance' =>  $relevance


));



    }

    //echo '<br><br>';

}




?>


<script>setTimeout(function(){window.location.reload(1);}, 15000);</script>