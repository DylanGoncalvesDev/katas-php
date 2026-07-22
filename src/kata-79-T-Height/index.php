<?php
/*kata-t-height
Kata 79 per a especialitats web 3-6-26: Avui rendirem un petit tribut a la lletra "T", Donat un enter n, imprimiu "T" d'alçada n.

Input: 5, Output: TTTTT   
                    T   
                    T  
                    T  
                    T  

Input: 7, Output: TTTTTTT   
                     T          
                     T    
                     T    
                     T   
                     T   
                     T 

Imput: 4, Output: TT TT    
                    T     
                    T    
                    T*/     

$number = readline("Introduce un Numero: ");
$pair = $number % 2;

if ($pair == 0) {
    $number += 1;
}

$middle = (int) ($number / 2);
        
for ($i = 0; $i < $number; $i++) {
     if ($pair == 0 && $i == ($number - 1)) {
         break;
     }
     if ($i != 0) { 
         for ($j = 0; $j < $number; $j++) {
              if ($j == $middle) {
                  echo "T";
              } else {
                echo " ";
              }
         }
     } else { 
        for ($k = 0; $k < $number; $k++) {
             if ($pair == 0 && $k == $middle) {
                 echo " ";
             } else {
               echo "T";
             }
        }
     }
     
     echo PHP_EOL;
}


  
  