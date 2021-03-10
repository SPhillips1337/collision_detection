<?php
// Simple Collision Detection v1
// By Stephen Phillips
// 10/03/21

// set shapes and co-rdinates as an array
// shape = bottom_left, top_left, top_right, bottom_right
$shapes[] = ['bottom_left'=>[3,3],'top_left'=>[5,3],'bottom_right'=>[3,6],'top_right'=>[5,6]];
$shapes[] = ['bottom_left'=>[0,0],'top_left'=>[2,0],'bottom_right'=>[0,4],'top_right'=>[2,4]];

// calculate shape width (for my own reference - this can be removed as not needed)
foreach($shapes as $key=>$shape) {
	// for simplicity we are considering all shapes square with equal co-ordinates for height and width
	$width = $shape['bottom_right'][1] - $shape['bottom_left'][1];	
	echo "Width: $width<br>";
	$height = $shape['top_right'][0] - $shape['bottom_left'][0];
	echo "Height: $height<br>";

  $shapes[$key]['height']   = $height;
  $shapes[$key]['width']    = $width;
}
// check to see shapes collide
// let's start by check to see if the bottom left co-rdinate of our first shape is higher or lower than the second

echo $shapes[0]['bottom_left'][1]."<br>";
echo $shapes[1]['bottom_left'][1]."<br>";

if($shapes[0]['bottom_left'][1]<$shapes[1]['bottom_left'][1]){
    
  // check to see if the right hand co-ordinate is greater
  if($shapes[0]['bottom_right'][1]<$shapes[1]['bottom_right'][1]){
    // no collision
    echo "No collision<br>";
  }
  else{
    // collision
    echo "X Collision 1<br>";
  }

}
else{
    
  // check to see if the right hand co-ordinate is greater
  if($shapes[0]['bottom_right'][1]>$shapes[1]['bottom_right'][1]){
    // no collision
    echo "No collision<br>";
  }
  else{
    // collision
    echo "X Collision 2<br>";
  }

}

// check to see the top co-ordinates intersect
if($shapes[0]['bottom_left'][0]<$shapes[1]['bottom_left'][0]){
    
  // check to see if the second bottom co-ordinate is greater
  if($shapes[0]['top_left'][0]<$shapes[1]['bottom_left'][0]){
    // no collision
    echo "No collision<br>";
  }
  else{
    // collision
    echo "Y Collision 3<br>";
  }

}
else{
    
  // check to see if the second bottom co-ordinate is greater
  if($shapes[0]['bottom_left'][0]>$shapes[1]['top_left'][0]){
    // no collision
    echo "No collision<br>";
  }
  else{
    // collision
    echo "Y Collision 4<br>";
  }
}

echo "<br><hr><pre>";
var_dump($shapes);
echo "</pre>";
