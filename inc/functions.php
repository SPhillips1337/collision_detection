<?php
// Simple Collision Detection v2 - Functions
// By Stephen Phillips
// 12/03/21

// calculate shape width (for my own reference - this can be removed as not needed)
function get_dimesions($shapes) {
  foreach($shapes as $key=>$shape) {
    echo "<strong>Shape $key</strong><br>";

    echo "Cordinates - <br>".
    "bottom_left: ".$shape['bottom_left'][0].",".$shape['bottom_left'][1]." - ".
    "top_left: ".$shape['top_left'][0].",".$shape['top_left'][1]." - ".
    "bottom_right: ".$shape['bottom_right'][0].",".$shape['bottom_right'][1]." - ".
    "top_right: ".$shape['top_right'][0].",".$shape['top_right'][1]."<br>";

    // for simplicity we are considering all shapes square with equal co-ordinates for height and width
    $dimensions['width'] = ($shape['bottom_right'][0] - $shape['bottom_left'][0])+1;	
    echo "Width: ".$dimensions['width']."<br>";
    $dimensions['height'] = ($shape['top_right'][1] - $shape['bottom_left'][1])+1;
    echo "Height: ".$dimensions['height']."<br>";

  }
  return $dimensions;
}

// check to see shapes collide
// let's start by check to see if the bottom left co-rdinate of our first shape is higher or lower than the second
function collision_detect($shapes){
  if($shapes[0]['bottom_left'][0]<$shapes[1]['bottom_left'][0]){
      
    // check to see if the right hand co-ordinate is greater
    if($shapes[0]['bottom_right'][0]<$shapes[1]['bottom_left'][0]){
      // no collision
      $data['x_collision'] = false;
    }
    else{
      // collision
      $data['x_collision'] = true;
    }

  }
  else{
    // check to see if the right hand co-ordinate is greater
    if($shapes[0]['bottom_left'][0]>$shapes[1]['bottom_right'][0]){
      // no collision
      $data['x_collision'] = false;
    }
    else{
      // collision
      $data['x_collision'] = true;
    }

  }
  // checking left hand side
  // check to see the top co-ordinates intersect
  if($shapes[0]['bottom_left'][1]<$shapes[1]['bottom_left'][1]){
      
    // check to see if the second bottom co-ordinate is greater
    if($shapes[0]['top_left'][1]<$shapes[1]['bottom_left'][1]){
      // no collision
      $data['y_collision'] = false;
    }
    else{
      // collision
      $data['y_collision'] = true;
    }

  }
  else{
      
    // check to see if the second bottom co-ordinate is greater
    if($shapes[0]['bottom_left'][1]>$shapes[1]['top_left'][1]){
      // no collision
      $data['y_collision'] = false;
    }
    else{
      // collision
      $data['y_collision'] = true;
    }
  }

  // checking right hand side
  // check to see the top co-ordinates intersect
  if($shapes[0]['bottom_right'][1]<$shapes[1]['bottom_right'][1]){
      
    // check to see if the second bottom co-ordinate is greater
    if($shapes[0]['top_right'][1]<$shapes[1]['bottom_right'][1]){
      // no collision
      $data['y_collision'] = false;
    }
    else{
      // collision
      $data['y_collision'] = true;
    }

  }
  else{
      
    // check to see if the second bottom co-ordinate is greater
    if($shapes[0]['bottom_right'][1]>$shapes[1]['top_right'][1]){
      // no collision
      $data['y_collision'] = false;
    }
    else{
      // collision
      $data['y_collision'] = true;
    }
  }

  echo "<hr><h3>Result</h3>";

  if($data['x_collision']&&$data['y_collision']){
      echo "<br><strong>Collision</strong><br>";
    }
    else{
      // collision
      echo "<br><strong>No Collision</strong><br>";
  }

  return $data;

}

