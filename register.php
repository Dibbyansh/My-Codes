<?php 
error_reporting(0);
 $name = $_POST['name'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $gender = $_POST['gender'];
 $dob = $_POST['dob'];
 $country = $_POST['country'];
 $phone_no = $_POST['phone_no'];
 $billing_address = $_POST['billing_address'];
 
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "mydb";
    
$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
if ($conn) {
    if (!empty($name) && !empty($username) && !empty($password) && !empty($gender) && !empty($dob) && !empty($country) && !empty($phone_no) && !empty($billing_address)) {
      $sql_ut = "SELECT * FROM login_kinara WHERE username ='$username' ";
       $res_ut = mysqli_query($conn, $sql_ut);
       if (mysqli_num_rows($res_ut)>0) {
         echo '<script>alert("Username already taken!!")</script>';
       }
       else {
	       $Insert = "INSERT INTO login_kinara VALUES ('$name' , '$username', '$password', '$gender', '$dob', '$country', '$phone_no', '$billing_address')";
	       if (mysqli_query($conn, $Insert)==true){
            header("Location:thanks.html");
           }
         }
       }
    else {
      echo '<script>alert("All fields are required!!")</script>';
        die();
      }
    }
else {
	die("Connection failed because ".mysqli_connect_error());
  }
?>
