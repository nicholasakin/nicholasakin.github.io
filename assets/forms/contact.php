<?php
session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Perform necessary processing and send emails if required

    // Redirect to the "thank you" page after processing the form
    header("Location: ../../404.html");
    exit();
  }



  // // header("location: 404.html");
  
  // // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'nicholasakin+pwebsiteform@gmail.com';

  
  // //clean email address
  // function filter_email_header($form_field) {  
  //   return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
  // }
  // $email_address = $_POST['email'];
  // $email_address  = filter_email_header($email_address);

  // $name = $_POST['name'];
  // $subject = $_POST['subject'];
  // $message= $_POST['message'];

  // #Send email
  // $headers = "From: $email_address", "Reply-To: $$email_address";
  // $sent = mail($receiving_email_address, "WEBSITE: $subject", $feedback, $headers);
  // echo $sent;

//   $to      = 'nobody@example.com';
//   $subject = 'the subject';
//   $message = 'hello';
//   $headers = array(
//     'From' => 'webmaster@example.com',
//     'Reply-To' => 'webmaster@example.com',
//     'X-Mailer' => 'PHP/' . phpversion()
// );

// mail($to, $subject, $message, $headers);


//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>
