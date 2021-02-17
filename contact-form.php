<?php 
$style_css = 'style/contact-form.css';
include 'usr-interface-navbar.php';
$email_style = "width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;box-sizing:border-box;margin-top: 6px;margin-bottom: 16px;resize: vertical;";


require 'PHPMailerAutoload.php';
require 'acc.php';

if (isset($_POST['submit'])){



session_start();
$_SESSION["emailsender"] = null;

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                            

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = mm_mail;                 // SMTP username
$mail->Password = pp_pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_POST['mail'], 'Mailer');
$mail->addAddress('example@gmail.com', 'Joe User');     // Add a recipient
              // Name is optional
$mail->addReplyTo(mm_mail, 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// Content
    $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->Subject = $_POST['mail'];
    $mail->Body    = $_POST['msg'];
    $mail->AltBody = $_POST['name'];

    if($mail->send()==true){ 

echo '
  <div class="container ">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> your message has been asent successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  </div>
    ';




    }else{echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";}
    







}



?> 










<div style="width: 100%; height: 100px ; padding : 20px ; color : rgb(77, 33, 223); font-size: 30px;">
<span> Contact Us </span>

</div>

<div class="container">
  <form action="" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="email" id="lname" name="mail" placeholder="Your last name.." style="<?php if (isset ($email_style)){echo $email_style;} ;?>" >




  

    <label for="subject">Message</label>
    <textarea id="subject" name="msg" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit">
  </form>
</div>
