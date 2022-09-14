<?php
    $sub = [
            "Math"=>"4",
            "OOP"=>"3.5",
            "DBMS"=>"3",
           ];
    
    foreach($sub as $key=>$value){
        echo "ชื่อวิชา $key เกรด $value <br/>";
    }