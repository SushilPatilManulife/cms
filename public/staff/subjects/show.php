<?php require_once('../../../private/initialize.php'); ?>
<?php

$page= $_GET['id'] ?? 'hi';
//echo $page;
echo h($page);
 ?>
