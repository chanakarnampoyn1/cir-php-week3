<?php
    $star = "Namax star";//Global varoable

    function drakonball(){
        //echo "สวัสดีชาว $star";
        static $x = 0;
        $star = "Earth star";//Local variable

        echo "1Local variable $star";
        echo "<br />";
        echo "3.staticvariable $x";
        echo "<br />";
    }
    drakonball(); //call function drakonball

    echo "2Global varoable $star";
?>