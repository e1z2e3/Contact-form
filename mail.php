<?php

$name -  $_POST['name'];
$email - $_POST['email'];
$subject -  $_POST['subject'];
$message -  $_POST['message'];

$mailheader -  "From: ".$name."<".$email.">\r\n";

$recipient - "ezejuiletc122@gmail.com";

mail($recipient, $subject, $message, $mailheader)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
or die("Error!");

echo'

<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="emai.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&family=Poppins&display=swap" rel="stylesheet">
  
</head>
<body>
    
    <div class="container">
        <h1>Thank you for sending that order , we will get back to you as soon as posible</h1>
       
        <p class="back" >Go back to the <a href="email.html">Homepage</a></p>


    </div>

</body>
</html>








';



?>