<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');


$server= "localhost";
$username ="root";
$password="";
$dbname ="hospital_db";

$conn = new mysqli($server, $username, $password, $dbname);

// include "db.php";

// ALTER TABLE hospital_data AUTO_INCREMENT = 1;

$sql = "SELECT * FROM `hospital_data` WHERE `state` LIKE '%Maharastra%'";

// $sql = "SELECT * FROM `hospital_data`";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

  if (mysqli_num_rows($result) > 0)
   {
       $rows=array();
       while ($r = mysqli_fetch_assoc($result)) 
       {

          // $rows["result"][] = $r;
        $rows[] = $r;
       }

       echo json_encode($rows);
   }  
  else
    {
      echo '{"result": "no data found"}';
    }

?>
