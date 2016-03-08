<?php
for($x=1; $x<=3; $x++){
//$wantedgood = 3;

switch($wantedgood){
//switch($wantedgood){
    case 1:
        echo "have to be 21 or above";
        break;
    case 2:
        echo "have to be 18 or above";
        break;
    case 3:
        echo "have to be 16 or above";
        break;
    default:
        echo "Thank you for participating";
}

}
?>