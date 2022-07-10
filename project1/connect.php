<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="breast_cancer";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
	echo "Connection failed...";

}

if(isset($_POST['save']))
{	
	 $fname = $_POST['fname'];
	 $surname = $_POST['surname'];
	 $email_id = $_POST['email_id'];
	 $username1= $_POST['username'];
	 $password1 = $_POST['password1'];
	 $dob = $_POST['dob'];

	 $sql_query = "INSERT INTO register (fname,surname,email_id,username,password1,dob)
	 VALUES ('$fname','$surname','$email_id','$username1','$password1','$dob')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "<script> alert('Account created successfully')</script>";
        echo "<script> location.replace('register.html') </script>";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>