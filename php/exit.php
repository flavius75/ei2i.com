<?php
session_start();


if (isset($_POST['exit'])){
  session_destroy();
  echo(json_encode(array('success' => false, 'data' => null)));
}else{
  echo(json_encode(array('success' => true, 'data' => array())));
}

 ?>
