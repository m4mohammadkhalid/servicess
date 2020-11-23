<?php


$con_fname = $_POST['con_fname'];
$con_lname = $_POST['con_lname'];
$con_email = $_POST['con_email'];
$con_message = $_POST['con_message'];





$to = 'expjoomworker@gmail.com';
$subject = ($sub != '') ? $sub : 'User Query';

$message = '<strong>Services Name : </strong>'.$con_fname.'<br/><br/>';
$message .= '<strong>Last Name : </strong>'.$con_lname.'<br/><br/>';
$message .= '<strong>Eamil : </strong>'.$con_email.'<br/><br/>';
$message .= $con_message.'<br/><br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$con_email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;