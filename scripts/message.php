<?php
if (isset($_POST['submit'])) {

    // Fetching variables of the form which travels in URL
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Crates a message to pass
    $fullmessage = 'Name: ' . $_POST['name'] . '     ' . 'E-mail: ' . $_POST['email'] . '    ' . 'Phone: ' . $_POST['phone'] . '    ' . 'Message: ' . $_POST['message'];
    if ($name != '' && $email != '' && $message != '' && $phone != '') {
        //  Send malil
        mail("heliotvilchis@gmail.com", "Message from the website", $fullmessage);
        //  To redirect form on a particular page
        header("https://cesarsplumbing.us/index.html");
    } else {
        header("https://cesarsplumbing.us/quote.html");
    }
}
