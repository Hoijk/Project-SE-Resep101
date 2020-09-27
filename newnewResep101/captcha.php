<?php

$first_num = rand(1,100);
         $second_num= rand(1,100);
     
         $operators = array("+","-","*");
         $operator  = rand(0, count($operators)-1);
         $operator = $operators[$operator]; 
         $answer = 0;
     
     switch($operator){
     
             case "+" :
             $answer = $first_num + $second_num;
             break;
             case "-" :
             $answer = $first_num - $second_num;
             break;
             case "*":
             $answer = $first_num * $second_num;
             break;
     }
     $_SESSION["answer"] = $answer;

     ?>