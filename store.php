<?php

include 'consulta.php';
$Id=$_POST['Id'];
$Lat=$_POST['Lat'];
$Log=$_POST['Log'];
$Time=$_POST['Time'];

//$cons = "insert into co_gps ('".$Id."','".$Lat."','".$Log."','".$Time"')";
$query = "INSERT INTO co_gps(Id,Lat,Log,Time) values('$Id', '$Lat', '$Log', '$Time')";
mysqli_query($consulta,$query) or die (mysqli_error());
mysqli_close($consulta);
//
        //String url = "http://44.194.75.149/consulta.php?Id="+Nexo.id+"&Lat="+Nexo.lat+"&Log="+Nexo.log+
                      "&Time="+Nexo.tim;

?>