<?php
$message=$_POST['message'].$_POST['email'];
$to = 'contact@utsolutionsplc.com';
$subject = "Feedback from".$_POST['name'];

if (mail($to, $subject, $message)) {
    include('index.html');
} else {
   echo "<script>alert('Error');</script>";
  include('index.html');
}
?>