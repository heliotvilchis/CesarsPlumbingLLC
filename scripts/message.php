<?php
if (isset($_POST['submit'])) {

    // Fetching variables of the form which travels in URL
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Crates a message to pass
    $fullmessage = 'Name: ' . $_POST['name'] . '     ' . 'E-mail: ' . $_POST['email'] . '    ' . 'Phone: ' . $_POST['phone'] . '    ' . 'Message: ' . $_POST['message'];
    if ($name != '' && $email != '' && $subject != '' && $message != '') {
        //  Send malil
        mail("cesarplumbing2020@hotmail.com", $subject, $fullmessage);
        //  To redirect form on a particular page
        header("https://cesarsplumbing.us/index.html");
    } else {
        header("https://cesarsplumbing.us/quote.html");
    }
}
