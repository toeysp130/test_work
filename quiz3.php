<?php 
    $arr_1 = array(
                array(  "code"=>"101",
                        "name" => "AAA"
                ),
                array(  "code"=>"102",
                        "name" => "BBB"
                ),
                array(  "code"=>"103",
                        "name" => "CCC"
                )
            );
    $arr_2 = array(
                array(  "code"=>"103",
                        "name" => "Singapore"
                ),
                array(  "code"=>"102",
                        "name" => "Tokyo"
                ),
                array(  "code"=>"101",
                        "name" => "Bangkok"
                )
            );
    $json_arr1 = json_encode($arr_1); 
    $json_arr2 = json_encode($arr_2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>Array1</b>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $de = json_decode($json_arr1);
                for($i = 0 ; $i < count($arr_1) ; $i++){ ?>
                <tr>
                <td><?php echo $de[$i]->code; ?></td>
                <td><?php echo $de[$i]->name; ?></td>
                <?php } ?>
            </tr>
        </tbody>
    </table><br>
    <b>Array2</b>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                $de = json_decode($json_arr2);
                for($i = 0 ; $i < count($arr_2) ; $i++){ ?>
                <tr>
                <td><?php echo $de[$i]->code; ?></td>
                <td><?php echo $de[$i]->name; ?></td>
                <?php } ?>
            </tr>
            </tbody>
    </table>
    <br><hr><br>
    <b>Output</b>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                $de1 = json_decode($json_arr1);
                $de2 = json_decode($json_arr2);
                for($i = 0 ; $i < count($arr_1) ; $i++){ ?>
                <tr>
                <td><?php echo $de1[$i]->code; ?></td>
                <td><?php echo $de1[$i]->name; ?></td>
                <?php 
                    for($j = 0 ; $j < count($arr_2) ; $j++){ 
                        if($de1[$i]->code == $de2[$j]->code){ ?>
                            <td><?php echo $de2[$j]->name; ?></td>
                        <?php }
                }} ?>
            </tr>
        </tbody>
        
    </table>
</body>
</html>