<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
  <meta charset="utf-8">
  </head>
  <body>

<h2>
Получены данные
</h2>

<?php

echo "<pre>";
print_r($_POST);

$filename = "base.txt";
file_put_contents ( $filename , json_encode($_POST));
?>

<h2>
JSON
</h2>

<?php
$data = json_decode(file_get_contents ( $filename ), true);
print_r($data);

?>

<h2>
Получены файлы
</h2>

<?php

print_r($_FILES);


?>
