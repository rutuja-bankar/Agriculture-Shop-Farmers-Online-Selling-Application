<?php
  try
  {
    $dbuser='root';
    $dbpass='';
    $host='localhost';
    $dbname='store';
    $connec=new PDO("mysql:host=$host;dbname=$dbname",$dbuser,$dbpass);
     
  }
  catch (PDOException $e)
  {
    echo "Error:".$e->getMessage()."<br>";
    die();	
    
  }
  //echo "database connection is successful!!"."<br>";
  
   
   ?>
