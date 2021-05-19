<?php
 
include 'config/lib.php';
 
$pages = include 'config/pages.php';
 
$page = getPage($pages);
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Магазин</title>
        <link rel="stylesheet" href="css.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

      </head>
      <body>

<p > &emsp;  &emsp;
<a href="?page=1">Главная</a> &emsp;  &emsp;
    <a href="?page=2">О себе</a>   &emsp; &emsp;
    <a href="?page=3">Контакты</a>   &emsp; &emsp;
    <a href="?page=5">Пользователь</a>   &emsp; &emsp;
    <a href="?page=4"><img src="/img/Korzina.png" width="25" alt="Корзина" /></a>
    </p>

        <?php
 
include 'pages/' . $page;
 
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
crossorigin="anonymous"></script>
      </body>
    </html>