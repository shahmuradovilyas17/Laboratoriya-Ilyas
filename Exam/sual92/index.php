<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
  
    <form action="" method="post">
      <div class="name">
        <label for="name">Adı:</label>
        <input type="text" name="name" />
      </div>
      <button>Göndər</button>
    </form>
    <h1>İstifadəçi məlumatları</h1>
    <?php 
    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
    
    if(strlen($name) == 0) {
      echo "<div class = 'error'>Adınızı daxil edin</div>";
    }
    
    ?>
    <?php 
    $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
    
    if(strlen($name) != 0) {
      echo "<div class = 'correct'>Adı: $name</div>";
    }
?>
    
  </body>
</html>
