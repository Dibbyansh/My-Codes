<?php  
error_reporting(0);
$_name = $_POST['user'];
$_pass = $_POST['pass'];

 
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "mydb";
    
$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
if ($conn) {
	if (count($_POST)>0) {
		$res = "SELECT username, password from login_kinara where username = '$_name' and password = '$_pass'";
		$result = mysqli_query($conn, $res);
		$count = mysqli_num_rows($result);
		if($count==0){
				echo '<script>alert("invalid Credential!!")</script>';
			}
		else {
				echo '<script>alert("U R Logged In!!")</script>';
			}
		}
	}
else {
	echo '<script>alert("Conntion Error!!")</script>';
}
