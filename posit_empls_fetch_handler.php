<?php
require_once 'connect.php';


$data = json_decode(file_get_contents("php://input"), true);
$posit_id = $data["posit_id"];

$res = mysqli_query($connect, "SELECT `id`, `surname`, `name` FROM `employees2` 
  JOIN `employees_positions2` 
  ON `employees2`.`id` = `employees_positions2`.`empl_id` 
  WHERE `posit_id` = $posit_id");
$empls = mysqli_fetch_all($res);

if (mysqli_num_rows($res) > 0) {
  foreach ($empls as $empl) {
    echo '<option value="' . $empl[0] . '">' . $empl[1] . " " . $empl[2] . '</option>';
  }
}

