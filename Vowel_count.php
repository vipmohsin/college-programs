<!-- Vowel count using for loop in a given name and show the vowels.
 -->


<?php
include("./header.php");

$name = "mohsin faheem mehtab khan";
$name = strtolower($name);
$len = strlen($name);
$vowel_count=0;
$vowels="";
for($i = 0; $i < $len ; $i++){
    $sub = substr($name,$i,1);
        
    if($sub == "a" || $sub == "e" || $sub == "i" || $sub == "o" || $sub == "u" ){
        $vowel_count++;
        $vowels.=$sub;
    }
}
echo "Input : <b>$name</b> <br> The Number of vowels in Given name are <b>$vowel_count</b> <br> They are <b>$vowels";
 
?>
