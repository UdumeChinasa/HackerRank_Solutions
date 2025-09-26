
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon</title>
</head>
<body>
    <button> click me </button>

<?php

    function Raceresult($finalresult){

        $winner = '';
        $loser ='';
        $draw = '';

        // $beck = '';
        // $romeo ='';

       $randomnumber = rand(1,2);
       
       
       if ($randomnumber >= $winner){
            echo "who won";
       }
       elseif($randomnumber <= $loser)
        {
        echo "who lost";
       } 
       
       elseif($randomnumber == $draw)
       
       {
        echo " this is a draw";
       }
    }


?>
</body>
</html>
