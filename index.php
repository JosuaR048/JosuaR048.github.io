<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Josua Raun Martahan 360fc8df</title>
    <h1>Welcome to my guessing game</h1>
</head>
<body>
    <?php
        $correctnumber=58; //change this number //
        if(isset($_GET['guess']))
        {
          if (is_numeric($_GET['guess'])===FALSE)
         {
        echo "Your guess is not a number";
        }
        else if ($_GET['guess']<$correctnumber)
         {
        echo "Your guess is too low";
        }
        else if ($_GET['guess']>$correctnumber)
         {
        echo "Your guess is too high";
        }
        else if ($_GET['guess']==$correctnumber)
         {
        echo "Congratulations - You are right";
        }
        }
        else
        {
        echo "Missing guess parameter <br> Your guess is too short";
        }
    ?>
</body>
</html>