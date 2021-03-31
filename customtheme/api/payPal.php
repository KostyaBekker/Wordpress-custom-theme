<?php

console.log($_POST['first_name']);
$is_all_firlds_ok = false;
if (isset($_POST['first_name'])) {
  console.log($_POST['first_name']);
}
if ($is_all_firlds_ok) {
  echo 'ok';
} else {
  echo 'error';
}

