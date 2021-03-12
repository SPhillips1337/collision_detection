<?php
// Simple Collision Detection v2
// By Stephen Phillips
// 12/03/21

// require header and functions
require('./inc/header.php');

// set shapes and co-rdinates as an array (we are assuming all shapes will not have negative co-ordinates
// shape = bottom_left, top_left, top_right, bottom_right, shape cordinates are in format of x,y
$shapes[] = ['bottom_left'=>[0,3],'top_left'=>[0,5],'bottom_right'=>[3,3],'top_right'=>[3,5]];
$shapes[] = ['bottom_left'=>[2,6],'top_left'=>[2,7],'bottom_right'=>[4,6],'top_right'=>[4,7]];

?>
<hr><h3>Test 1</h3>
<p>No Collision, Shape 2 above shape 1. Shapes are defined as per below</p>
<img src="img/example-shapes-diag1.png"><br>

<?php
// calculate shape width (for my own reference - this can be removed as not needed)
get_dimesions($shapes);

// check to see shapes collide
// let's start by check to see if the bottom left co-rdinate of our first shape is higher or lower than the second
collision_detect($shapes);

echo "<br><hr><h3>Debug</h3><pre>";
var_dump($shapes);
echo "</pre>";

?>