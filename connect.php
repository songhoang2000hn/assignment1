<?php
$conn_string="host=ec2-35-172-73-125.compute-1.amazonaws.com dbname=ddf1csdppt6h66 user=vhwlhzcqpmoypw password=a9b0efd65f333f8bede090965211e5c0c728d8abbd20f65eaab928b07298ba1d";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE _user='".$username."' AND _pass'".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if($row==1)
{
	echo "Login success";
}
else
{
	echo "Login Failed";
}
?>
