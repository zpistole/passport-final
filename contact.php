<?php

// configure
$from = 'Playcraft Passport Promo <info@playcraftsystems.com>';
$sendTo = 'playcraftmarketing@gmail.com';
$subject = 'Playcraft Passport Promo';

// array variable name => Text to appear in email
$fields = array('firstName' => 'First Name', 'lastName' => 'Last Name', 'phone' => 'Phone', 'email' => 'Email', 'newsletter' => 'Newsletter Signup', 'catalog' => 'Catalog Signup', 'howHear' => 'How Did You Hear', 'address-line1' => 'Address Line 1', 'address-line2' => 'Address Line 2', 'city' => 'City', 'state' => 'State', 'zipcode' => 'Zipcode', 'country' => 'Country');
$okMessage = 'Contact form successfully submitted. Thanks, we\'ll get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending

try
{
    $emailText = "Playcraft Passport User Info:\n\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}
