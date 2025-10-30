<?php
    $marks=82;
    if($marks >= 90 && $marks <= 100){
        echo "Grade : A";
    }elseif($marks >= 75 && $marks <= 89){
        echo "Grade : B";
    }elseif($marks >= 50 && $marks <= 74){
        echo "Grade : C";
    }else{
        echo "Grade : F";
    }
?>