<?php
    $sub = [
            "Math" => [
                        "name"=>"Mathematics",
                        "grade"=>4
                      ],
            "OOP" => [
                        "name"=>"Object Oriented Programming",
                        "grade"=>3.5
                     ],
            "DBMS" => [
                        "name"=>"Database Management System",
                        "grade"=>3
                      ],
            ];
            
    echo "ชื่อวิชา " . $sub['Math']['name'] . " เกรด " . $sub['Math']['grade'] . "<br/>";
    echo "ชื่อวิชา " . $sub['OOP']['name'] . " เกรด " . $sub['OOP']['grade'] . "<br/>";
    echo "ชื่อวิชา " . $sub['DBMS']['name'] . " เกรด " . $sub['DBMS']['grade'] . "<br/>";