<?php

function find_all_salamanders() {
  global $db;
  $sql = "SELECT * FROM salamander ORDER BY id ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}