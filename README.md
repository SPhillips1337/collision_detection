# collision_detection
Simple 2D/3D collision detection in PHP
Link to script on my hosting https://stephenphillips.co.uk/collision_detection

# brief
Given the 2D coordinates and dimensions of multiple objects on a 2D plane. We want to determine if any of these objects intersect or occupy the same space.
Bonus points if the solution allows for 3D coordinates and/or supports different shapes.

There’s no need to provide a visual solution to this, We are more interested in seeing the business logic. The shapes and their coordinates can be randomly generated or user-provided. No specific requirement on the structure he should use for the solution or for defining a shape – can be as simple as an array [[0,0],[1,0],[0,1],[1,1]] to define a square of width ‘1’ – We want to be able to see a solution that can be run and verified that it calculates the result correctly.

# improvements/limitations
This script has been written to work on shapes with 4 points, top left, top right, bottom left, bottom right on an x, y, z axis it provides a solution for the brief and above which works and can be tested,but could be improved by allowing for more (n th) points.

Currently the script works on rectangles shapes with straight edges, it will check corners of different values, but it could be improved to work better with irregular shapes by calculating the edges based upon the co-ordinates as a line, for example given two co-ordinates for the top edge, one higher than the other it could calulate so that half way through the edge the line moves up by 1.

The current system doesn't work with circles, due to co-ordinate system such shapes are not possible.

Random co-ordinate generation could be added for each of the four corners ( or more points) to further test.
