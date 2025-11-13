<?php
    function isPrime($n){
        if($n <=1){
            return false;
        }
        for($i=2;$i<=sqrt($n);$i++){
            if($n%$i==0){
                return false;
            }
        }
        return true;
    }
    $num=13;
    if(isPrime($num)){
        echo "$num is Prime";
    }else{
        echo "$num is not Prime";
    }
?>