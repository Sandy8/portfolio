<?php
if (isset($_REQUEST['submit']))
{
    $_mailto = 'sandhyapatel848@gmail.com';
    $_firstname = $_REQUEST['fname'];
    $_firstname = filter_var($_firstname, FILTER_SANITIZE_STRING);
    $_lastname = $_REQUEST['lname'];
    $_lastname = filter_var($_lastname, FILTER_SANITIZE_STRING);
    $_name = $_firstname . $_lastname;
    $_fromemail = $_REQUEST['email'];
    $_fromemail = filter_var($_fromemail, FILTER_SANITIZE_EMAIL);
    $_subject = $_REQUEST['subject'];
    $_subject = filter_var($_subject, FILTER_SANITIZE_STRING);
    $_subject2 = "Confirmation - Message  sent successfully. | Sandhya Paghdar";
    $_message = "Sender's Name: " . $_name . "\n" . "Message: " . "\n" . $_REQUEST['message'];
    $_message2 = "Hello" . $_name . "\n" . "Thank you for contacting me. I will get back to you shortly!" . "Regards," . "\n" . "- Sandhya Paghdar";
    $_headers = "From: " . $_fromemail;
    $_headers2 = "From: " . $_mailto;

    $mail_status = mail($_mailto, $_subject, $_message, $_headers);
    // $mail_status2 = mail($_fromemail, $_subject2, $_message2, $_headers2);
    if ($mail_status)
    {
        echo "<p style='padding:20px;margin:0;'>Message was sent Successfully!</p>";
    }
    else
    {
        echo "<p style='padding:20px;margin:0;'>Sorry! Message was not sent, Try again Later.</p>";
    }
}

?>
