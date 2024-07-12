<?php
$connect = mysqli_connect('localhost', 'root', '', 'staff');
if (!$connect) {
  die('Ошибка подключения');
}