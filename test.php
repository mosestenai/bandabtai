<?php
// Complete this function to return either
// "Hello, [name]!" or "Hello there!"
// based on the input

function say_hello($name){
    // You can print to STDOUT for debugging like you normally would:
     $output ='Hello, '. $name;
    
    // but you need to return the value in order to complete the challenge
    return $output; // TODO: return the correct value
}
$name = 'Qualified!';
echo say_hello($name);

?>