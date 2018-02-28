<!DOCTYPE html>
<html>
<head>
	<title>Action</title>
</head>
<body>
  <?php 

  $error = '';
  $myemail = 'randomvids304@gmail.com';

  if (empty($_POST['Name'])|| empty($_POST['Email'])|| empty($_POST['Message'])){
    $error .= "\n Error:: all fields are required";
  }

  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $message = $_POST['Message'];

  if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
   $email_address)){
    $errors .= "\n Error: Invalid email address";
}

if(empty($error)){
  $to = $myemail;
  $emailSubject = "Contact Form Submission: $name";
  $emailBody = "You have recieved a new message. " . "Here are the details: \n Name: " . $name "\n" . "Email :" . $email . "\n" . "Message: " . $message . "\n -END-";
  $headers = "From: " . $myemail \n;
  $headers .= "Reply-To: " . $email;

  mail($to, $emailSubject, $emailBody, $headers);

}

?>

</body>
</html>