<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label for="input">Number of Star: </label>
    <input type="text" name="number_of_star" id="input">
    <input type="submit" value="Go">
    <br><br>
    </form>
    
</body>
</html>

<?php 
    @$number = $_POST['number_of_star'];
    if(isset($number)){
        if($number % 2 == 0){
            for($i = 0 ; $i < $number ; $i++){
                for($j = 0 ; $j <= $i ; $j++ ){
                    echo "*";
                }
                echo "<br>\n";
            }
        }
        else if($number % 2 != 0){
            for($i = $number ; $i > 0 ; $i--){
                for($j = $i ; $j > 0 ; $j-- ){
                    echo "*";
                }
                echo "<br>\n";
            }
        }

    }
    else{
        echo null;
    }
    ?>