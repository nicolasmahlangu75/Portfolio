<?php
<?php
 require "vendor/autoload.php";
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 
 $to = 'nicolasmahlangu75@gmail.com';
 $email = $_POST["email"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];
                                                
                                                $mail = new PHPMailer(true);
                                                $mail->isSMTP();
                                                $mail->SMTPAuth = true;

                                                $mail->Host = "smtp.gmail.com";
                                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                                $mail->Port = 587;
                                                $mail->Username = "nicolasmahlangu75@gmail.com";
                                                $mail->Password="ykbq ecat ctyl avbb ";

                                                $mail->setFrom($email, "Mr Nicholus - Software Developer");
                                                $mail->addAddress("nicolasmahlangu75@gmail.com","Nicholus");
                                                $mail->addAddress("nicolasmahlangu75@gmail.com","Nicholus");
                                                $mail->Subject= "$subject";
                                                $mail->Body="$message";

                                                $mail->send();
                                                echo "email sent";
  // // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'nicolasmahlangu75@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  // $contact->smtp = array(
  //   'host' => 'smtp.gmail.com',
  //   'username' => 'nicolasmahlangu75@gmail.com',
  //   'password' => 'bmitllpgvgnadqqf',
  //   'port' => '587'
  // );
  

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>
?>
