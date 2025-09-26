
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon</title>
</head>
<body> 
         <form action="project.php" method="post">
         >
        <button type="submit" name="submit">Submit</button>
    </form> 

<?php

    function raceResults(){
    // Assuming beck was running on a speed 2p faster than romeo
        $bethSpeed = 2;
        $romeoSpeed = 1;
    // number of checkpoints provided
        $checkpoints = 1001;
    
    //value for $I and $j
    $i = 1;
    $j = 6;
    
    //where romeo = j and beth = i
    $beth = $i;
    $romeo = $j;

    //using for loop to loop through the checkpoints and start the match
    for($i=0; $i <= $checkpoints ; $i++){

        //incrementng as they are racing
        $beth +=  $bethSpeed;
        $romeo += $romeoSpeed;

        //using nested if statements to output the result
        if($beth >= $checkpoints ){
            echo " beth wins";
            break;

        }elseif($romeo >= $checkpoints ){
            echo "romeo wins";
            break;

        }elseif($beth >= $checkpoints && $romeo >= $checkpoints  ){
            echo "draw";
        }
    }
     // SECOND QUESTION

    //what position can romeo be placed if beth is at position 1 to win beth who is running on a speed of 2p

    //beck has at least 1001 - 1 checkpoint to complete
    $beckDistance = $checkpoints - $i;

    // and since shes 2 time faster

    $distanceRemaining = $beckDistance / 2;

    // to get romeos distance

    $j = $checkpoints - $distanceRemaining;

    echo " Romeo has to be at checkpoint $j to win beth";
    
    }
       raceResults();
?>

 

   
</body>
</html>