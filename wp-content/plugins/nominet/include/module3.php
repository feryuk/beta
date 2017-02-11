<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );
$modulenr = 3;



global $wpdb;
$image = $wpdb->get_row( "SELECT * FROM wp_nominet WHERE ID = $modulenr" );

$bgimage = $image->image_url;

$headline = $image->headline;

$tagline = $image->tagline;

$button = $image->button;


?>


<html>

<head>

<style>

body {
	
	background-image:    url(<?php echo $bgimage;?>);
    background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center; 
	
	
}


.nomidiv {
	background:#fff;
	width:470px;
	height:300px;
	
	position:fixed;
	left:50%;
	bottom:70px;
	margin-top: -150px;
    margin-left: -235px;
	margin-bottom:70px;
	
	text-align:center;
	color:#353535;
	
	
	 
	
}



.nomih {
	
	
	
	
}

.nomip {
	padding:0px 18px 0px 18px;
	font-size:1.2em;
	
	
	
}

.nomibutton {
	

 text-transform: uppercase;
    background: #353535;
    margin-top: 17px;
    font-size: 1.3em;
    padding: 10px 50px;
    border: none;
    color: #fff;
	word-spacing: 2px;
}	
	
}


</style>

</head>



<body>
<div class="nomidiv">


<div class="nomibox" >

 


</div>


<h1 class="nomih"><?php echo $headline;?></h1>


<p class="nomip">
<?php echo $tagline;?>


</p>

<input class="nomibutton" type=button value ="<?php echo $button;?>">


</div>






</body>
</html>