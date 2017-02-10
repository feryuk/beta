
<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );


$modulenr = 4;
global $wpdb;
$image = $wpdb->get_row( "SELECT * FROM wp_nominet WHERE ID = $modulenr" );

$headline = $image->headline;

$tagline = $image->tagline;

$button = $image->button;


?>
<html>

<head>
<style>
.nomib img {
  -webkit-clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
          clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
}

.nomint {
 -webkit-clip-path: polygon(0 15%, 100% 0%, 100% 85%, 0 100%);
clip-path: polygon(0 15%, 100% 0%, 100% 85%, 0 100%);
}

.nomib {
  color: #fff;
  font-family: 'Fira Sans', sans-serif;
  position: relative;
  text-align: center;
  text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.9);
}
.nomib img {
  width: 100%;
}
.nomib figcaption {
  left: 50%;
  
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 100%;
}


.nomint {
    z-index: 1;
    background: rgba(255, 0, 71, 0.53);
    position: absolute;
    padding: 65px 135px 105px 120px;
    padding-left: 75px;
    top: 50px;
    right: 0px;
    width: 360px;
    text-align: left;
    text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.5);
}



body {
margin:0px;	
	
	
}

figure {
	
    display: block;
    -webkit-margin-before: 0em;
    -webkit-margin-after: 0em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;	
	
}
	
	
.nsearch {

height: 35px;
border:none;
margin-right:0px;
width:250px;

}	
.sbutt {
	
	width: 35px;
    
height: 35px;
	background-color:#fff;
    background-image: url(<?php echo site_url();?>/wp-content/plugins/nominet/images/magnifier.png);
    background-repeat: no-repeat;
	border:none;
	margin-left:0px;
    background-position: center; 
	    position: absolute;

}

</style>

</head>


<body>

<div style="width:1200px; margin:0 auto;">

<div class="nomib">
 

  <div class="nomint">
  <h1><?php echo $headline;?></h1>
  <p><?php echo $tagline;?></p>
  
   <input type="text" class="nsearch" ><button class="sbutt" />
</div>
 <figure>
  
    <img src="<?php echo site_url();?>/wp-content/plugins/nominet/images/module-4.jpg" alt="" />
    
  </figure>
  

  
</div>

<div style="width:100%; text-align:center;">
<h1 style="color:#ff0099">Heading 2</h1>
  <p><?php echo $tagline;?></p>

</div>


</div>





</body>