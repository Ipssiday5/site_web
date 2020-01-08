<?php 
$name_error = $email_error = "";
$name = $email = $phone = $message = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Le nom est requis";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Seules les lettres sont autorisées"; 
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Votre email est requis";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "format d'email invalide"; 
    }
  }
  
  if (empty($_POST["phone"])) {
    $phone_error = "Le téléphone est requis";
  }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
  
  if ($name_error == '' and $email_error == '' ){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      
      $to = 'ipssiday@gmail.com';
      $subject = 'message du site ipssiDay';
      if (mail($to, $subject, $message)){
          $success = "Message envoyé, merci de nous avoir contacter,!";
          $name = $email = $message = '';
      }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}