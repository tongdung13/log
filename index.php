<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; chatset=utf-8" />
<head>
    <title>may tinh cua dung</title>
<body>
<h1>Simple Calculator</h1>
<div>
<form method="post">
First operand:    <input type="text" name="nhapso1" placeholder="nhap so 1" /><br><br>
Operator:    <select name="addition" >
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br><br>
 Second operand: <input type="text" name="nhapso2" placeholder="nhap so 2"> <br><br>
    <input type="submit" value="Calculate"><br><br>

 Result:

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $nhapso1 = $_POST["nhapso1"];
        $addition = $_POST["addition"];
        $nhapso2 = $_POST["nhapso2"];

        echo calculate($nhapso2,$nhapso1,$addition);

    }
    function calculate($nhapso2,$nhapso1,$addition){

        if ($addition == '+') {
            $result = $nhapso1 + $nhapso2;
        }
        if ($addition == '-') {
            $result = $nhapso1 - $nhapso2;
        }
        if ($addition == '*') {
            $result = $nhapso1 * $nhapso2;

        }
        if ($addition == '/') {
            $result = $nhapso1 / $nhapso2;
        } else if ($nhapso2 == 0){
            $result = 'canh bao: nhap khong hop le';
        }
        return $result;
    }

    ?>
</form>
</div>
</body>


</head>
</html>






<?php
