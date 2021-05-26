<?php
function greaterFn($num){
    if($num>30){
        echo "$num greater than 30<br>";
    }else if($num>20){
     echo "$num greater than 20<br>";  
    }else if($num>10){
echo "$num greater than 10<br>";
    }else{
        echo "$num less than 10<br>";
    }
}
greaterFn(40);
greaterFn(30);
greaterFn(21);
greaterFn(11);
greaterFn(8);

?>