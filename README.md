# collision_detection
Simple 2D/3D collision detection in PHP
Link to script on my hosting https://stephenphillips.co.uk/collision_detection

# improvements/limitations
This script has been written to work on shapes with 4 points, top left, top right, bottom left, bottom right on an x, y, z axis and could be improved by allowing for more (n th) points

Currently the script works on square shapes with straight edges, it will check corners of different values, but it could be improved to work better with irregular shapes by calculating the edges based upon the co-ordinates as a line, for example given two co-ordinates for the top edge, one higher than the other it could calulate so that half way through the edge the line moves up by 1.

The current system doesn't work with circles, due to co-ordinate system such shapes are not possible.

Random co-ordinate generation could be added for each of the four corners ( or more points) to further test.
