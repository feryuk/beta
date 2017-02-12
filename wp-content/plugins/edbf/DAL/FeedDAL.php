<?php

/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 21/01/2017
 * Time: 09:01
 */
class FeedDAL
{

    private $connection;
    private $connect;

    function __construct()
    {
        $this->connect = new Connect();
        $this->connection = $this->connect->connect();
    }
   
   /**
    * THIS IS NOT THE MAIN QUERY WE ARE USING AT THE MOMENT, SEE GETRESULTSADVANCED METHOD BELOW
    * Gets the results from the database
    * @param $low_price
    * @param $high_price
    * @param $keywords
    * @param string $order_by
    * @param string $asc_desc
    * @return array
    */
    public function getResults($low_price, $high_price, $keywords, $order_by = 'price', $asc_desc = 'ASC')
    {
   
       /**
        * Get all the keywords, that are separatd by a comma
        */
        $keywords_pieces = explode(",", $keywords);
        $the_query = '';
        $and = ' AND ';
        $or = ' OR ';
       // Loop through the keywords that have been generated above
        foreach ($keywords_pieces as $keywords_piece) {
           // Get each individual keyword and put them in an array
            $keywords_array = explode(" ", $keywords_piece);
           // loop through the aray of keywords
            foreach ($keywords_array as $keyword) {
               
                $the_query .= "(website = '$keyword') $and";
               
            }
            $the_query = rtrim($the_query, "AND ");
            $the_query .= $or;


        }

        $the_query = rtrim($the_query, "OR ");
        // echo $the_query;


        $sql = "SELECT * FROM iphonere_wp46.wp_latest_main  WHERE $the_query AND status = 'on'  AND datetime >= DATE_SUB(NOW(), INTERVAL 20 DAY) AND PRICE > 0   ORDER BY $order_by $asc_desc LIMIT 20";

        $result = $this->connection->query($sql);

        while ($row = $result->fetch_assoc()) {

//            if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/vapebot/thumbnails/' . $row["thumbnail"])) {
//                $row['thumbnail'] = "http://www.everydayisblackfriday.co.uk/vapebot/thumbnails/" . $row['thumbnail'];
//            } else {
//                $row['thumbnail'] = "http://www.everydayisblackfriday.co.uk/vapebot/images/noimage/no%20image.jpg";
//            }
//
//
//            if (empty($row['img_code'])) {
//                $row['img_code'] = "http://www.everydayisblackfriday.co.uk/wp-content/uploads/2015/11/discount-sale.png";
//
//            }

            $rows[] = $row;

        }


        return $rows;

    }
   
   /**
    * This is the main method that gets called in the getresults.php file to generate the search results
    * @param $keywords
    * @return array
    */
    public function getResultsAdvanced($keywords, $low_price = 0, $high_price = 0, $order_by = 'sum', $asc_desc = 'DESC')
    {
       // save the keywords into a variable so we don't strip them
       // this way we can search for exact match occurances as well in the db
        $input_keywords = $keywords;
        $test_keyword = '';
        $keywords = explode(" ", $keywords);
        // create a special keyword so that keywords in can't match it unless exact match
       // not sure but as for 12 Feb this feature wasn't used when we generated the keywords_to_products data
        $special_keyword = implode("x", str_split($input_keywords));
        $keyword_in = "'$special_keyword',";
       //
        $keywords_number = 0;
        $where_statement = '';
        foreach ($keywords as $keyword) {
            $keyword_in .= "'" . $keyword . "',";

            $keywords_number++;
        }
        $keyword_in = rtrim($keyword_in, ',');
       
       /**
        * Defaults
        */
       $select_what = '';
       $low_price_statement = '';
       $high_price_statement = '';
       $having_count = '';
       
      
      
       /**
        * Conditions
        */
       // if order by price is selected it will add the price to select
       if($order_by == 'price') {
          $select_what = ', price';
       }
       
       if($order_by != 'sum') {
          
          $having_count = "having count(distinct ktp.keyword) = $keywords_number";
       }
       // if low price is greater than 0 from the range select
       if($low_price > 0) {
          $low_price_statement = "AND price >= $low_price";
       }
       // if high price is smaller than upper default value
       if($high_price < 2000) {
          $high_price_statement = " AND price <= $high_price";
       }
       // the price range statement
       $price_range_statement = "$low_price_statement $high_price_statement";
       // The where statement
       $where_statement = " WHERE ktp.status = 1 AND  (ktp.keyword IN('$test_keyword',$keyword_in) OR ktp.keyword like '$input_keywords') $price_range_statement";
   
       // The main query
       $query = "SELECT  product_id, SUM( ktp.relevance ) AS sum $select_what  FROM  iphonere_wp46.wp_keywords_to_product as ktp
                 INNER JOIN iphonere_wp46.wp_latest_main as wlm ON ktp.product_id = wlm.ID
                      $where_statement group by ktp.product_id $having_count  ORDER BY sum DESC, $order_by   $asc_desc  LIMIT 20";
   
        
        $product_ids = $this->getResultIds($query);
       /**
        * This is the query for getting the products
        * by the list of IDs generated above
        */
        $queryb = " SELECT * FROM iphonere_wp46.wp_latest_main WHERE ID IN ($product_ids) ORDER BY FIELD(ID, $product_ids); ";
       // testspeed method is actually not a test
       //it generates the results from the wp_latest_main table
        $test_datab = $this->testSpeed($queryb);
       // empty array, this is where the results will be saved
        $rows = array();
        foreach ($test_datab as $row) {
           // this takes care of the images
           // it checks whether the image is an exixting file on the server
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/vapebot/thumbnails/' . $row["thumbnail"])) {
               $row['thumbnail'] = "http://www.everydayisblackfriday.co.uk/vapebot/thumbnails/" . $row['thumbnail'];
           } else {
                $row['thumbnail'] = "http://www.everydayisblackfriday.co.uk/vapebot/images/noimage/no%20image.jpg";
           }
           //
           // This checks whether there is a cod for the 30 days history price chart
            if (empty($row['img_code'])) {
                $row['img_code'] = "http://www.everydayisblackfriday.co.uk/wp-content/uploads/2015/11/discount-sale.png";
            }
            $rows[] = $row;
        }
        // returns the array of results from wp_latest_main
        return $rows;

    }


    public function getSimilarProducts()
    {


        $sql = "SELECT * FROM iphonere_wp46.wp_latest_main WHERE title LIKE '%$keywords%' AND status = 'on' AND price < $high_price AND price > $low_price AND datetime >= DATE_SUB(NOW(), INTERVAL 10 DAY) ORDER BY $order_by $asc_desc LIMIT 25";
        $result = $this->connection->query($sql);
        if ($this->connection->error == '') {
            // the query worked, so fetch results from $result and do stuff with them.
        } else {
            // the query didn't work, so don't try to do anything with $result

            echo 'There was an error';
        }


    }



//
//$query = "
//    SELECT  product_id, SUM( relevance ) AS sum
//    FROM  iphonere_wp46.wp_keywords_to_product kp
//
//
//
//
//
//    WHERE   keyword IN($keyword_in) group by product_id having count(distinct keyword) = 2 ORDER BY sum ASC LIMIT 24";
//
//
//
//
//$queryb = " SELECT * FROM iphonere_wp46.wp_latest_main WHERE ID IN ('1601855','2356040','1213476','2299253','721631','699059','704012') ";
//
//
//$time1 = microtime(true);
//
//$test_data = $feed->testSpeed($query);
//
//$test_datab = $feed->testSpeed($queryb);


    public function testSpeed($query)
    {


        $sql = "$query";
        $result = $this->connection->query($sql);

        $rows = array();
        if ($this->connection->error == '') {
            // the query worked, so fetch results from $result and do stuff with them.
            while ($row = $result->fetch_assoc()) {

                $rows[] = $row;
            }
            return $rows;
        } else {
            // the query didn't work, so don't try to do anything with $result

            //echo 'There was an error';
            return array();
        }

        //$result = $this->connection->query($sql);



    }


    public function getResultIds($query)
    {


        $sql = "$query";
        $result = $this->connection->query($sql);

        //$result = $this->connection->query($sql);

        $rows = [];
        while ($row = $result->fetch_assoc()) {

            $rows[] = $row['product_id'];
        }


        $product_id_list = '';
        foreach ($rows as $product_id) {
            $product_id_list .= "'$product_id',";
        }
        $product_id_list = rtrim($product_id_list, ",");


        return $product_id_list;

    }

    
    public function test() {
   
       /**
        * Defaults
        */
       $select_what = '';
       $low_price_statement = '';
       $high_price_statement = '';
       $orderby = 'sum';
       $asc_desc = 'DESC';
       $low_price = '51';
       $high_price = '56';
       /**
        * Conditions
        */
       // if order by price is selected it will add the price to select
       if($orderby == 'price') {
          $select_what = ', price';
       }
       // if low price is greater than 0 from the range select
       if($low_price > 0) {
          $low_price_statement = "AND price >= $low_price";
       }
       // if high price is smaller than upper default value
       if($high_price < 2000) {
          $high_price_statement = " AND price <= $high_price";
       }
       // the price range statement
       $price_range_statement = "$low_price_statement $high_price_statement";
       // The where statement
       $where_statement = " WHERE ktp.status = 1 AND  (ktp.keyword IN('adidas') OR ktp.keyword like 'nike') $price_range_statement";
       
       // The main query
       $query = "SELECT  product_id, SUM( ktp.relevance ) AS sum $select_what  FROM  iphonere_wp46.wp_keywords_to_product as ktp
                 INNER JOIN iphonere_wp46.wp_latest_main as wlm ON ktp.product_id = wlm.ID
                      $where_statement group by ktp.product_id   ORDER BY $orderby $asc_desc LIMIT 200";
   
       $result = $this->connection->query($query);
       $rows = array();
       if ($this->connection->error == '') {
          // the query worked, so fetch results from $result and do stuff with them.
          while ($row = $result->fetch_assoc()) {
         
             $rows[] = $row;
          }
          
       }
       print_r($rows);
       return $rows;
       
    }

}