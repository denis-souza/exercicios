<?php
for ($i = 0; $i <= 100 ; $i++) {
  $mod3 = $i % 3;
  $mod5 = $i % 5;

  echo (!$mod3 && !$mod5 ? "FizzBuzz" : (!$mod3 ? "Fizz" : (!$mod5 ? "Buzz" : $i))) . "--";
}
?>
