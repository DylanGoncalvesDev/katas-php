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

        
for ($i = 0; $i < $number; $i++) {
     if ($i != 0) { 
         for ($j = 0; $j < $number; $j++) {
              $middle = (int) ($number / 2);
              if ($j == $middle) {
                  echo "T";
              } else {
                echo " ";
              }
         }
     } else { 
        for ($k = 0; $k < $number; $k++) {
             echo "T";
        }
     }
     echo PHP_EOL;
}


  
  