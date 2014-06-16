<?php
  $dbh = mysqli_connect("localhost", "parkjh", "password") or die(mysql_error());
  mysqli_select_db($dbh, "testcms");
  
  if(isset($_POST[title])){
    
  }
  
?>