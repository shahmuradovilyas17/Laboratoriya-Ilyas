<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php 
$nameErr = $surnameErr = $emailErr = $nicknameErr =  $genderErr = "";
$name = $surname = $email = $nickname =  $gender = "";

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

    if(empty($_POST["email"])) {
        $emailErr = "Email is required";
    }
    else {
        $email = test_input($_POST["email"]);    
    }

    if(empty($_POST["nickname"])) {
        $nicknameErr = "Nickname is required";
    }
    else {
        $nickname = test_input($_POST["name"]);    
    }

    if(empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    }
    else {
        $gender = test_input($_POST["gender"]);    
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<h1>Qeydiyyat</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
    Name: <input type="text" name="name" >
    <span class="error">* <?php echo $nameErr; ?> </span>
    <br>
    Surname: <input type="text" name="surname">
    <span class="error">* <?php echo $surnameErr; ?> </span>
    <br> 
    E-mail: <input type="email" name="email">
    <span class="error">* <?php echo $emailErr; ?> </span>
    <br>
    Nickname: <input type="text" name="nickname">
    <span class="error">* <?php echo $nicknameErr; ?> </span>
    <br>
    Gender: 
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <span class="error">* <?php echo $genderErr; ?> </span>
    <br>
    <input type="submit" name="submit" value="Submit">

</form>


<?php
echo "<h1>Your Input</h1>";
echo $name;
echo "<br>";
echo $surname;
echo "<br>";
echo $email;
echo "<br>";
echo $nickname;
echo "<br>";
echo $gender;
?>


</body>
</html>