<?php
    $count = $_POST['count'];
    $dice = $_POST['dice'];
    
    if($count == null || $dice == null )
        echo "<h1>Fail with data!</h1>";

    $results = [];

    for($i = 0; $i < $count; $i++){
        switch($dice){
            case "d4":
                $results[] = rand(1, 4);
                break;
            case "d6":
                $results[] = rand(1, 6);
                break;
            case "d8":
                $results[] = rand(1, 8);
                break;
            case "d10":
                $results[] = rand(1, 10);
                break;
            case "d12":
                $results[] = rand(1, 12);
                break;
            case "d20":
                $results[] = rand(1, 20);
                break;
        } 
    }

    echo ('Rolled '. $count . ' ' . strtoupper($dice) . ': ' . array_sum($results) .' | Rolls: ');
    foreach($results as $key => $value){
        if($key == count($results) - 1)
            echo(' '. $value . '');
        else
            echo(''. $value . ', ');
    }
?>