<?php
 $mini = 1;
 $maxi = 100;
 for ($i = $mini; $i < $maxi; $i++) {
   if ($i%3==0 && $i%5==0) {
     echo "fIZZbUZZ";
   }elseif ($i%5==0) {
     echo "Buzz";
   }elseif ($i%3==0) {
     echo "Fizz";
   }else {
     echo "$i";}
   }
   ?>
