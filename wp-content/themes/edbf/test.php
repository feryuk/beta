<?php
/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 27/01/2017
 * Time: 23:36
 */



//require ($_SERVER['DOCUMENT_ROOT'] . '/wp-blog-header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/beta/wp-content/plugins/edbf/config/config.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/beta/wp-content/plugins/edbf/db/connect.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/beta/wp-content/plugins/edbf/DAL/FeedDAL.php');
$feed = new FeedDAL();




/******************************************* WORKING WELL **************************************/

$keywords = "".$_GET['q']."";

$time1 = microtime(true);


$keyword_in = '';
$keywords = explode(" ", $keywords);
foreach ($keywords as $keyword) {

    $keyword_in .= "'" . $keyword . "',";

    $keywords_number++;
}


$keyword_in = rtrim($keyword_in, ',');


$query = "SELECT  product_id, SUM( relevance ) AS sum FROM  iphonere_wp46.wp_keywords_to_product  
          WHERE   keyword IN($keyword_in) group by product_id  ORDER BY sum DESC LIMIT 24";


// $query = "SELECT  product_id FROM  iphonere_wp46.wp_keywords_to_product
     //     WHERE   keyword IN($keyword_in)   ORDER BY relevance DESC LIMIT 24";

echo $query;

$product_ids = $feed->testSpeed($query);
//$queryb = " SELECT * FROM iphonere_wp46.wp_latest_main WHERE ID IN ($product_ids) ";


//$test_datab = $feed->testSpeed($query);



//$test_datab = $feed->getResultsAdvanced($_GET['q']);





$time2 = microtime(true);
echo 'script execution time: ' . ($time2 - $time1); //value in seconds
?>
<br>
<?php

//$explain_data = $feed->testSpeed('EXPLAIN EXTENDED '.$query);

//print_r($explain_data);
?>
<br><br>
<?php
print_r($product_ids);








