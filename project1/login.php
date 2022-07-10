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
    $username1= $_POST['username'];
    $password1 = $_POST['password'];
    $sql="select * from register where username='$username1' and password1='$password1'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    echo($username1);
    echo($password1);
     if (empty($username1)) {
        echo "<script> alert('Username is empty')</script>";
        echo "<script> location.replace('register.html') </script>";
     }
     else if (empty($password1)) {
        echo "<script> alert('Password is empty')</script>";
        echo "<script> location.replace('register.html') </script>";
     }
    else if($row['username']==$username1 && $row['password1']==$password1)
    {
        echo "<script> location.replace('demo.html') </script>";
    }
     else {
         echo "<script> alert('Check your Credentials')</script>";
         echo "<script> location.replace('register.html') </script>";
   }


 mysqli_close($conn);
 }

 ?>