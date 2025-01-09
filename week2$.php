<?php
    // $salary=300.90;
    // $bonus=40;
    // $total=$salary+$bonus;
    // echo "Full salary is:".$total;

    $html = 99;
    $css = 50;
    $javascript = 99;
    $total = $html + $css + $javascript;
    echo "Total score : " . $total . "<br>";
    $average=$total/3;
    echo "Average Score" .$average. "<br>";
    $result ="";
    if($average >50){
        $result = "you passed.<br>";
    }else if($average < 50){
        $result = "you failed.<br>";
    }
    $grade = "";
    if($average >= 90){
        $grade = "  A.<br>";
    }else if($average >=80){
        $grade = " B.<br>";
    }else if($average >=70){
        $grade = " C.<br>";
    }else if ($average >=60){
        $grade = " D.<br>";
    }else if($average >=50){
        $grade =" E.<br>";
    }else{
        $result = "you Failed!!!.<br>";
    }
    echo"<h1> Result = ".$result."<br>";
    echo"<h1> Grade = ".$grade."<br>";



    $color="red";
    echo "my fav color is ".$color."<br>";
    echo "my fav car is ".$color."<br>";
    echo "my fav moto is ".$color."<br>";
     

?>
