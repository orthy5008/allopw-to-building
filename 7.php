<?php
$check = "dd";
switch ($check){
     case 'yes':
         case 'YES':
         echo 'Your are allowed to this building';   // You are wearing a mask
         break;                                     //you are COVID negative
                                                    // You have under 98 degree body temperature
         case 'no':
             case 'NO':
             echo 'Sorry you are not allowed to this building';      // IF anyone choose any option no
             break;
             default:
                 echo 'Please Give The Answare Of Our Question';
    
    
}
?>
