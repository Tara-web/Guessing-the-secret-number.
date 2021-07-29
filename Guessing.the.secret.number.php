<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing the secret number</title>
</head>

<body>
    <form action="" method="POST">
       
    <p>Guess a Number Between 1 and 10:
        <input type="text" name="number_entered" value='' /> <br><br>
        <input type="submit" name="submit" value="Search" /><br><br>
</p>

        <?php
         $number = "";
        $number = $_POST['number_entered'];
        $submitbutton = $_POST['submit'];
        $secret = mt_rand(1, 10);

        if ($submitbutton) {
  

            if ($number != null) {

                if ($number > $secret) {
                    echo "$number is greater than secret. The secret was $secret <br>";
                } elseif ($number == $secret) {
                    echo "$number is equal secret. The secret was $secret <br>";
                } else {
                    echo "$number is less than secret. The secret was $secret <br>";
                }
            }
        }
        ?>
 
    </form>


</body>

</html>