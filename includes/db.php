
<?php 
$con = mysqli_connect("localhost","root","030720","doanphpkhoihung");

if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"SET NAMES 'utf8' ");

?>