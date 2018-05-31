<!DOCTYPE HTML>
<html>
  <head>
    <title>
      PHP - By Purshey!
    </title>
  </head>
  <body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <h4>Input </h4> <input type="text" name="pkname">
      <input type="submit">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
      $name = $_REQUEST['pkname'];
      if(empty($name)){
        echo "<h5> Name not typed </h5>";
      }else {
        echo "<h1> Your name: $name </h1> ";
      }
      /**
      Thank you! Guys
      */
    }
    ?>
  </body>
</html>
