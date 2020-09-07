<?php
if (isset($_POST['submit'])) {

    // Fetching variables of the form which travels in URL
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Crates a message to pass

    $subject = "Message from the website";

    $fullmessage = "
    <html>
    <body style='font-family: Arial ; color: #1F4B70;'>
        <div style='text-align: center; font-size: 36px; font-weight:900; display: flex; flex-wrap: wrap;'>
            <div style='width: 100%;'>
                <p>Name:</p>
                <p style='font-size: 26px; font-weight:500; color: black;'>" . "$name" . "</p>
            </div>
            <div style='width: 100%;'>
                <p>Email:</p>
                <p style='font-size: 26px; font-weight:500; color: black;'>" . "$email" . "</p>
            </div>
            <div style='width: 100%;'>
                <p>Phone:</p>
                <p style='font-size: 26px; font-weight:500; color: black;'>" . "$phone" . "</p>
            </div>
            <div style='width: 100%;'>
                <p>Message:</p>
                <p style='font-size: 26px; font-weight:500; color: black;'>" . "$message" . "</p>
            </div>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <cesarsplumbing.us>' . "\r\n";

    //send Message
    mail("cesarplumbing2020@hotmail.com", $subject, $fullmessage, $headers);
    header("Location: /index.html");
}
