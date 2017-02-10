<?php
/**
 * Created by PhpStorm.
 * User: Feri
 * Date: 16/01/2017
 * Time: 21:20
 */






 include('../../../../wp-blog-header.php');


global $wpdb;



date_default_timezone_set("Europe/London");

$gbp_to_usd = 0.83015;

$codes = json_decode(file_get_contents('http://country.io/iso3.json'), true);
$names = json_decode(file_get_contents('http://country.io/names.json'), true);
$iso3_to_name = array();
foreach($codes as $iso2 => $iso3) {
    $iso3_to_name[$iso3] = $names[$iso2];
}





$url = "http://localhost/edbf/wordpress/wp-content/themes/taxcalculatorxxx/uploads/wages.csv";




$row = 1;
if (($handle = fopen($url, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {



// print_r($data);


        foreach ($data as $item) {



            $cells = explode(",",$item);


            $country = $cells[0];
            $wage = $cells[6];

            $country_to_save = $iso3_to_name[$country];




            echo $count;
            if(!empty($country_to_save)) {


                $wpdb->insert(wp_income_by_countries, array(

                    'country' =>  $country_to_save,
                    'wage_in_usd' =>  round($wage * $gbp_to_usd)

                ));

                echo $country_to_save.'----'.round($wage * $gbp_to_usd).'<br>';

            }




}







            // echo $data[0] ." ---and search volume is--- ". $data[3] . "<br />\n";













        }
    }



    fclose($handle);



echo $names["PL"]; // => "Poland"
echo $iso3_to_name["POL"]; // => "Poland"




?>

