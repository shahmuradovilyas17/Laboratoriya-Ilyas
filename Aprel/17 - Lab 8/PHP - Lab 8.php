<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php 
$nameErr = $surnameErr = $mark1Err = $mark2Err =  $mark3Err = "";
$name = $surname = $mark1 = $mark2 =  $mark3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])) {
        $nameErr = "Name is required";
    }
    else {
        $name = test_input($_POST["name"]);    
    }

    if(empty($_POST["surname"])) {
        $surnameErr = "Surname is required";
    }
    else {
        $surname = test_input($_POST["surname"]);    
    }

    if(empty($_POST["mark1"])) {
        $mark1Err = "Mark1 is required";
    }
    else {
        $mark1 = test_input($_POST["mark1"]);    
    }

    if(empty($_POST["mark2"])) {
        $mark2Err = "Mark2 is required";
    }
    else {
        $mark2 = test_input($_POST["mark2"]);    
    }

    if(empty($_POST["mark3"])) {
        $mark3Err = "Mark3 is required";
    }
    else {
        $mark3 = test_input($_POST["mark3"]);    
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



function calcAverage($mark1, $mark2, $mark3, $averMark) {
    $averMark = (intval($mark1) + intval($mark2)  + intval($mark3)) / 3;
}

function rateAverage($averageMark) {
    if ($averageMark >= 45) {
     echo "Siz keçmisiniz";
    }
    else if ($averageMark < 45) {
    echo "Siz kəsilmisiniz";
    }
}

$avrMark = intval($mark1) + intval($mark2)  + intval($mark3);

?>




<h1>Tələbə Məlumatı</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
    Name: <input type="text" name="name" >
    <span class="error">* <?php echo $nameErr; ?> </span>
    <br>
    Surname: <input type="text" name="surname">
    <span class="error">* <?php echo $surnameErr; ?> </span>
    <br> 
    Mark1: <input type="text" name="mark1">
    <span class="error">* <?php echo $mark1Err; ?> </span>
    <br>
    Mark2: <input type="text" name="mark2">
    <span class="error">* <?php echo $mark2Err; ?> </span>
    <br>
    Mark3: <input type="text" name="mark3">
    <span class="error">* <?php echo $mark3Err; ?> </span>
    <br>
    <input type="submit" name="submit" value="Submit">

</form>


<?php
echo "<h1>Your Input</h1>";
echo $name;
echo "<br>";
echo $surname;
echo "<br>";
echo $mark1;
echo "<br>";
echo $mark2;
echo "<br>";
echo $mark3;
echo "<br>";
calcAverage($mark1,$mark2,$mark3,$avrMark);
rateAverage($avrMark);
?>


</body>
</html>