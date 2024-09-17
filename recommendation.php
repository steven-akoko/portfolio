<?php 
include("connect.php");
if (isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($con,$_POST['name']);
     $email=mysqli_real_escape_string($con,$_POST['email']);
     $phone=mysqli_real_escape_string($con,$_POST['phone']);
     $tel=mysqli_real_escape_string($con,$_POST['tel']);
     $message=mysqli_real_escape_string($con,$_POST['message']);


     if(empty($_POST['name']))
     {
     	$name_error="please fill your name";
     }

    elseif (empty($_POST['email'])) {
    	$email_error="please enter your email";
    }

    elseif (empty($_POST['tel'])) {
    	$phone_error="please input your phone  number";

    }
    elseif (empty($_POST['message'])) {
    	$message_error="Add your comment please";
    }
     else
     	$email_check="SELECT * FROM recommendation where email = '$email'";
     $check_email_run=mysqli_query($con,$email_check);
     $result=mysqli_fetch_array($chech_email_run);
     if ($result>1)
     	$email_error="You have recommendated thank you";
     else 
     {
     	$insert=mysqli_query($con,"INSERT into recommendation (name,email,tel,message) VALUES('$name','$email','$tel','$message')");
     	$i=mysqli_query($con,$insert_data);

     	if($i)
     	{
     		$success="Thank you for your recommendation";
     	}
     }
}
  
 ?>
