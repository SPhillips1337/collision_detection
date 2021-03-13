<?php
// Simple Collision Detection v2
// By Stephen Phillips
// 12/03/21

// require header and functions
require('./inc/header.php');

// set shapes and co-rdinates as an array (we are assuming all shapes will not have negative co-ordinates
// shape = bottom_left, top_left, top_right, bottom_right, shape cordinates are in format of x,y, z front, z back
$shapes[] = ['bottom_left'=>[3,3,0,1],'top_left'=>[3,5,0,1],'bottom_right'=>[6,3,0,1],'top_right'=>[6,5,0,1]];
$shapes[] = ['bottom_left'=>[4,4,-2,-1],'top_left'=>[4,5,-2,-1],'bottom_right'=>[5,4,-2,-1],'top_right'=>[5,5,-2,-1]];

?>
<hr><h3>Test 11</h3>
<p>3D Test 4, No Collision. Shape 2 inside/front of shape 3. Shapes are defined as per below</p>
<img src="img/example-shapes-diag11.png"><br>

<?php
// calculate shape width (for my own reference - this can be removed as not needed)
get_dimesions_3d($shapes);

// check to see shapes collide
// let's start by check to see if the bottom left co-rdinate of our first shape is higher or lower than the second
collision_detect($shapes);

echo "<br><hr><h3>Debug</h3><pre>";
var_dump($shapes);
echo "</pre>";

?>