<?php
session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Perform necessary processing and send emails if required

    //clean email address
    function filter_email_header($form_field) {  
      return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
    }
    $email_address = $email;
    $email_address  = filter_email_header($email_address);

    $headers = array(
      'From' => $email_address,
      'Reply-To' => $email_address,
      'X-Mailer' => 'PHP/' . phpversion()
    );

    #Send email
    $receiving_email_address = 'nicholasakin+pwebsiteform@gmail.com';
    $sent = mail($receiving_email_address, "WEBSITE: $subject", $feedback, $headers);
    echo $sent;
    


    // Redirect to the home page after processing the form
    header("Location: ../../index.html");
    exit();
  }

  // // Replace contact@example.com with your real receiving email address

?>
