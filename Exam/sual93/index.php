<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
  
    <form action="" method="post">
      <input type="text" name="first-num">
      <input type="text" name="second-num">
      <input type="text" name="calculation">
      <button>Hesabla</button>
    </form>

    <?php 
    $firstNum = trim(filter_var($_POST['first-num'], FILTER_SANITIZE_SPECIAL_CHARS));
    $secondNum = trim(filter_var($_POST['second-num'], FILTER_SANITIZE_SPECIAL_CHARS));
    $calculation = trim(filter_var($_POST['calculation'], FILTER_SANITIZE_SPECIAL_CHARS));
    $answer = 0;
    switch($calculation) {
      case "+":
       $answer = $firstNum + $secondNum;
       echo "<div>$answer</div>";
        break;
      case "-":
        $answer = $firstNum - $secondNum;
       echo "<div>$answer</div>";
        break;
      case "*":
        $answer = $firstNum * $secondNum;
       echo "<div>$answer</div>";
        break;
      case "/":
        $answer = $firstNum / $secondNum;
       echo "<div>$answer</div>";
        break;
      case "%":
        $answer = $firstNum % $secondNum;
       echo "<div>$answer</div>";
        break;
      case "**":
        $answer = $firstNum ** $secondNum;
       echo "<div>$answer</div>";
        break;
      default:
       echo "Sehv emeliyyat";
        break;
    }
    ?>
  </body>
</html>
