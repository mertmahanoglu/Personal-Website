<?php



if(!isset($_POST['submit'])){

    echo "error; you need to submit the form";
}
$ad = $_POST['Ad'];
$visitor_email = $_POST['Email'];
$message = $_POST['gorus'];


if(empty($ad)||empty($visitor_email)){

    echo "Name and email are mandatory!";
    exit;
}
$email_from = 'mahanoglumert73@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "You have received a new message from the user $visitor_email. \n";
$to="mahanoglumert73@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);


