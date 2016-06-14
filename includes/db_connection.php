<?php
  // 1. Create a database connection

  define("DB_SERVER", "localhost");
  define("DB_USER", "widget_cms");
  define("DB_PASS", "runeStar28");
  define("DB_NAME", "widget_corp");


  // $connection can be any name (i.e. $db)
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  // errno() returns the error number or zero
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>