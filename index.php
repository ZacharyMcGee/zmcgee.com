<!doctype html>

<html>

<?php include('connect.php'); ?>

<?php include('includes/functions.php'); ?>

<?php include('header.html'); ?>

<?php include('sidebar.html'); ?>

<?php
if(isset($_GET['category'])){
  $category = $_GET["category"];
  include 'category.php';
}
else if(isset($_GET['page']))
{
  $page = $_GET["category"];
  $filename = $page . '.html';

  if(file_exists($filename)){
    getPage($filename);
  }
  else
  {
    include 'frontpage.html';
  }
}
else
{
    include('frontpage.html');
}
?>

<script src="js/treenav.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
<script src="js/firebase_initialize.js"></script>
<script src="js/loadpage.js"></script>
<script src="js/tabs.js"></script>

<meta http-equiv="Cache-control" content="no-cache">
</html>
