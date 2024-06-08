<?php

$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));

echo "Xoş gəlmisiz, $name<br/>";
echo "Sizin email ünvanınız: $email";


?>