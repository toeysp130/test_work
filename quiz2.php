<?php 
    $arr_head = array(100,7,107,3,104);
    @$arr_input = array($_POST['value0'],$_POST['value1'],$_POST['value2'],$_POST['value3'],$_POST['value4']);
    $arr_output = array();
    $result;
    for ($check=0; $check < 5; $check++) { 
        if($arr_input[$check] != ""){
            $arr_output[$check] = $arr_input[$check];
            $result = $arr_input[$check]/$arr_head[$check];
        }
    }
    for ($assign=0; $assign < 5; $assign++) { 
        if(@$arr_output[$assign] == ""){
            @$arr_output[$assign] = $result*$arr_head[$assign];
        }
    }
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
    <b>ผู้ใช้กรอกได้ 1 ช่อง</b>
    <br>
    <form action="" method="POST">
        <table border="1" style="width: 20%;">
            <tbody >
                <tr>
                    <?php
                    for($i = 0 ; $i < count($arr_head); $i++){
                        echo "<td style='text-align: center;'><b>$arr_head[$i]</b></td>";
                    }
                    ?>
                </tr>
                <tr>
                    <?php 
                    if(isset($_POST['submit'])){
                        for($j = 0 ; $j < 5 ; $j++){ ?>
                            <td><input type='text' value = <?php echo @$arr_output[$j] ?>></td>
                        <?php }
                    }else{ 
                        for($j = 0 ; $j < 5 ; $j++){ ?>
                            <td><input type='text' name='<?php echo "value$j" ?>'></td>
                    <?php }}?>
                </tr>
            </tbody>
        </table>
        <br>
        <button type="submit" name="submit" >GO</button>
        <a href="quiz2.php">clear</a>
    </form>
</body>
</html>