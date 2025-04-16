<!-- Vowel count using for loop in a given name and show the vowels.
 -->


<?php
include("./header.php");

$name = "mohsin khan";
$len = strlen($name);
for($i = 0; $i < $len ; $i++){
    $sub = substr($name,$i,1);
        
    if($sub == "a" || $sub == "o" || $sub == "i" || $sub == "o" || $sub == "u" ){
        $vowel_count++;
    }
}


?>
