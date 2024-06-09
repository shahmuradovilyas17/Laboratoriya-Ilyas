<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="post">
      <div class="username">
        <label for="username">username:</label>
        <input type="text" name="username" />
      </div>
      <div class="password">
        <label for="password">Password:</label>
        <input type="text" name="password" />
      </div>
      <button>Göndər</button>
    </form>

    <?php
    $corUsername = "Ilyas123";
    $corPassword = "1357913579";
    $try = 1;
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
    if($try < 3) {
      if($corUsername == $username && $corPassword == $password) {
        echo "<p>Sisteme daxil oldunuz</p>";
      }
      else {
        echo "<p>Yeniden cehd edin</p>";
        $try++;
      }
    }
    else {
      echo "<p>Hesabiniz bloklandi</p>";
    }
    
    ?>
  </body>
</html>
