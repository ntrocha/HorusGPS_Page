<?php
$host ='database-mysql-design.cpvucarfpwnw.us-east-1.rds.amazonaws.com';
$user ='admin';
$pass ='Nd200117';
$db_name = 'GPS';

$json=array();

    if(isset($_GET["Id"]) && isset($_GET["Lat"]) && isset($_GET["Log"]) && isset($_GET["Time"])){
        $Id=$_GET['Id'];
        $Lat=$_GET['Lat'];
        $Log=$_GET['Log'];
        $Time=$_GET['Time'];

        $conn =new mysqli($host, $user, $pass, $db_name);
        if($conn->connect_error){
            die('Connection error: '.$conn->connect_error);
        }

        $insert="INSERT INTO co_gps(Id, Lat, Log, Time) VALUES ('{$Id}','{$Lat}', '{$Log}', '{$Time}')";
        $result_insert = mysqli_query($conn, $insert);

    }



?>