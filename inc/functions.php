<?php
// Simple Collision Detection v2 - Functions
// By Stephen Phillips
// 12/03/21

// calculate shape width (for my own reference - this can be removed as not needed)
function get_dimesions($shapes) {
  foreach($shapes as $key=>$shape) {
    echo "<strong>Shape $key</strong><br>";

    echo "Cordinates - x,y<br>".
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


// calculate shape width (for my own reference - this can be removed as not needed)
function get_dimesions_3d($shapes) {
  foreach($shapes as $key=>$shape) {
    echo "<strong>Shape $key</strong><br>";

    echo "Cordinates - x,y,z1 (front),z2 (back)<br>".
    "bottom_left: ".$shape['bottom_left'][0].",".$shape['bottom_left'][1].",".$shape['bottom_left'][2].",".$shape['bottom_left'][3]." - ".
    "top_left: ".$shape['top_left'][0].",".$shape['top_left'][1].",".$shape['bottom_left'][2].",".$shape['bottom_left'][3]." - ".
    "bottom_right: ".$shape['bottom_right'][0].",".$shape['bottom_right'][1].",".$shape['bottom_left'][2].",".$shape['bottom_left'][3]." - ".
    "top_right: ".$shape['top_right'][0].",".$shape['top_right'][1].",".$shape['bottom_left'][2].",".$shape['bottom_left'][3]."<br>";

    // for simplicity we are considering all shapes square with equal co-ordinates for height and width
    $dimensions['width'] = ($shape['bottom_right'][0] - $shape['bottom_left'][0])+1;	
    echo "Width: ".$dimensions['width']."<br>";
    $dimensions['height'] = ($shape['top_right'][1] - $shape['bottom_left'][1])+1;
    echo "Height: ".$dimensions['height']."<br>";

  }
  return $dimensions;
}

function collision_detect($shapes){
  // check to see shapes collide on x axis
  // let's start by check to see if the bottom left co-rdinate of our first shape is higher or lower than the second  
  if($shapes[0]['bottom_left'][0]<$shapes[1]['bottom_left'][0]){
      
    // check to see if the right hand co-ordinate is less
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
  // check to see the top co-ordinates intersect on y axis
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
  // let's check to see if we are dealing with a 3d shape
  if(isset($shapes[0]['bottom_left'][2])){
    // check to see shapes collide on z axis
    // let's start by check to see if the bottom left front co-rdinate of our first shape is higher or lower than the second (checking if shape 1 is in front of or behind shape 2)
    if($shapes[0]['bottom_left'][2]<$shapes[1]['bottom_left'][2]){
      // shape 1 is in front of shape 2
      // check the position of all 4 corners
      // check to see if shape 1 bottom left hand back co-ordinate is less than shape 2 bottom left front
      if($shapes[0]['bottom_left'][3]<$shapes[1]['bottom_left'][2]){
        // no collision
        $data['z_collision'] = false;
      }
      else{
        // collision
        $data['z_collision'] = true;
      }
        
      // check to see if shape 1 bottom right hand back co-ordinate is less than shape 2 bottom left front
      if($shapes[0]['bottom_right'][3]<$shapes[1]['bottom_right'][2]){
        // no collision
        $data['z_collision'] = false;
      }
      else{
        // collision
        $data['z_collision'] = true;
      }
        
      // check to see if shape 1 top left hand back co-ordinate is less than shape 2 bottom left front
      if($shapes[0]['top_left'][3]<$shapes[1]['top_left'][2]){
        // no collision
        $data['z_collision'] = false;
      }
      else{
        // collision
        $data['z_collision'] = true;
      }
        
      // check to see if shape 1 top right hand back co-ordinate is less than shape 2 bottom left front
      if($shapes[0]['top_right'][3]<$shapes[1]['top_right'][2]){
        // no collision
        $data['z_collision'] = false;
      }
      else{
        // collision
        $data['z_collision'] = true;
      }

    }
    else{
      // shape 1 is in behind shape 2
      // check the position of all 4 corners
      // check to see if shape 1 bottom left hand back co-ordinate is less than shape 2 bottom left front
      if($shapes[0]['bottom_left'][2]>$shapes[1]['bottom_left'][3]){
        // no collision
        $data['z_collision'] = false;
      }
      else{
        // collision
        $data['z_collision'] = true;
      }
        
      // check to see if shape 1 bottom right hand back co-ordinate is less than shape 2 bottom left front
      if($shapes[0]['bottom_right'][2]>$shapes[1]['bottom_right'][3]){
        // no collision
        $data['z_collision'] = false;
      }
      else{
        // collision
        $data['z_collision'] = true;
      }
        
      // check to see if shape 1 top left hand back co-ordinate is less than shape 2 bottom left front
      if($shapes[0]['top_left'][2]>$shapes[1]['top_left'][3]){
        // no collision
        $data['z_collision'] = false;
      }
      else{
        // collision
        $data['z_collision'] = true;
      }
        
      // check to see if shape 1 top right hand back co-ordinate is less than shape 2 bottom left front
      if($shapes[0]['top_right'][2]>$shapes[1]['top_right'][3]){
        // no collision
        $data['z_collision'] = false;
      }
      else{
        // collision
        $data['z_collision'] = true;
      }

    }
  }
  else{
        // if no z axis is set then we always consider z axis true
        $data['z_collision'] = true;    
  }


  echo "<hr><h3>Result</h3>";

  if($data['x_collision']&&$data['y_collision']&&$data['z_collision']){
      echo "<br><strong>Collision</strong><br>";
    }
    else{
      // collision
      echo "<br><strong>No Collision</strong><br>";
  }

  return $data;

}

