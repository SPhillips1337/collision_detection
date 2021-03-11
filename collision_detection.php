<?php
// Simple Collision Detection v1
// By Stephen Phillips
// 10/03/21

// set shapes and co-rdinates as an array
// shape = bottom_left, top_left, top_right, bottom_right, shape cordinates are in format of x,y
$shapes[] = ['bottom_left'=>[0,3],'top_left'=>[0,5],'bottom_right'=>[3,3],'top_right'=>[3,5]];
$shapes[] = ['bottom_left'=>[2,6],'top_left'=>[2,7],'bottom_right'=>[4,6],'top_right'=>[4,7]];

// calculate shape width (for my own reference - this can be removed as not needed)
foreach($shapes as $key=>$shape) {
	// for simplicity we are considering all shapes square with equal co-ordinates for height and width
	$width = ($shape['bottom_right'][0] - $shape['bottom_left'][0])+1;	
	echo "Width: $width<br>";
	$height = ($shape['top_right'][1] - $shape['bottom_left'][1])+1;
	echo "Height: $height<br>";

  $shapes[$key]['height']   = $height;
  $shapes[$key]['width']    = $width;
}
// check to see shapes collide
// let's start by check to see if the bottom left co-rdinate of our first shape is higher or lower than the second

echo $shapes[0]['bottom_left'][0]."<br>";
echo $shapes[1]['bottom_left'][0]."<br>";

if($shapes[0]['bottom_left'][0]<$shapes[1]['bottom_left'][0]){
    
  // check to see if the right hand co-ordinate is greater
  if($shapes[0]['bottom_right'][0]<$shapes[1]['bottom_left'][0]){
    // no collision
    $x_collision = false;
  }
  else{
    // collision
    $x_collision = true;
  }

}
else{
  // check to see if the right hand co-ordinate is greater
  if($shapes[0]['bottom_left'][0]>$shapes[1]['bottom_right'][0]){
    // no collision
    $x_collision = false;
  }
  else{
    // collision
    $x_collision = true;
  }

}
// checking left hand side
// check to see the top co-ordinates intersect
if($shapes[0]['bottom_left'][1]<$shapes[1]['bottom_left'][1]){
    
  // check to see if the second bottom co-ordinate is greater
  if($shapes[0]['top_left'][1]<$shapes[1]['bottom_left'][1]){
    // no collision
    $y_collision = false;
  }
  else{
    // collision
    $y_collision = true;
  }

}
else{
    
  // check to see if the second bottom co-ordinate is greater
  if($shapes[0]['bottom_left'][1]>$shapes[1]['top_left'][1]){
    // no collision
    $y_collision = false;
  }
  else{
    // collision
    $y_collision = true;
  }
}

// checking right hand side
// check to see the top co-ordinates intersect
if($shapes[0]['bottom_right'][1]<$shapes[1]['bottom_right'][1]){
    
  // check to see if the second bottom co-ordinate is greater
  if($shapes[0]['top_right'][1]<$shapes[1]['bottom_right'][1]){
    // no collision
    $y_collision = false;
  }
  else{
    // collision
    $y_collision = true;
  }

}
else{
    
  // check to see if the second bottom co-ordinate is greater
  if($shapes[0]['bottom_right'][1]>$shapes[1]['top_right'][1]){
    // no collision
    $y_collision = false;
  }
  else{
    // collision
    $y_collision = true;
  }
}

if($x_collision&&$y_collision){
    echo "Collision<br>";
  }
  else{
    // collision
    echo "No Collision<br>";
}

echo "<br><hr><pre>";
var_dump($shapes);
echo "</pre>";
