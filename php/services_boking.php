<?php


$ser_name = $_POST['ser_name'];
$ser_email = $_POST['ser_email'];
$ser_phone = $_POST['ser_phone'];
$ser_post = $_POST['ser_post'];
$ser_adds = $_POST['ser_adds'];
$ser_city = $_POST['ser_city'];
$ser_comment = $_POST['ser_comment'];
$ser_option = $_POST['ser_option'];





$to = 'expjoomworker@gmail.com';
$subject = ($sub != '') ? $sub : 'Service Booking Query';

$message = 'Service booking request from MyClean.<br/><br/>'; 
$message .= '<strong>Services Name : </strong>'.$ser_name.'<br/><br/>';
$message .= '<strong>Last Name : </strong>'.$ser_email.'<br/><br/>';
$message .= '<strong>Eamil : </strong>'.$ser_phone.'<br/><br/>';
$message .= '<strong>Eamil : </strong>'.$ser_post.'<br/><br/>';
$message .= '<strong>Eamil : </strong>'.$ser_adds.'<br/><br/>';
$message .= '<strong>Eamil : </strong>'.$ser_city.'<br/><br/>';
$message .= '<strong>Eamil : </strong>'.$ser_comment.'<br/><br/>';
$message .= '<strong>Eamil : </strong>'.$ser_option.'<br/><br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$ser_email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;