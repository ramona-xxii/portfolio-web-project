<?php
header("Content-Type: application/json"); // tell browser its receiving json

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $name = $_POST['name'] ?? ''; // use '' if undefined/missing value --> use instead of isset()

    //---------------------
    // SECURE FORM HANDLING
    //---------------------
    function SanitizeName($rawName, $maxLength = 30){
        // 1. trim whitespace
        $name = trim($rawName);

    }

    //----------------------
    // SANITIZE FORM INPUTS
    //----------------------
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL));
    $phonenumber = trim(preg_replace("/[^0-9]/", "", $_POST["phonenumber"] ?? ""));
    $message = trim(filter_input(INPUT_POST, "message"));

    $error_message = "";

    //---------------------
    //VALIDATION FUNCTIONS
    //---------------------
    function isValidName($name){ return !empty($name); }
    function isValidPhoneNumber($phonenumber){ return preg_match("/^\d{10}$/", $phonenumber); }
    function isValidEmail($email){ return filter_var($email, FILTER_VALIDATE_EMAIL) !== false; }
    function isValidMessage($message){ return !empty($message); }

    //-----------------
    // FORM VALIDATION
    //-----------------
    if(!isValidName($name)){ $error_message .= "INVALID NAME\n"; }
    if(!empty($phonenumber) && !isValidPhoneNumber($phonenumber)){ $error_message .= "INVALID PHONE NUMBER\n"; }
    if(!isValidEmail($email)){ $error_message .= "INVALID EMAIL\n"; }
    if(!isValidMessage($message)){ $error_message .="INVALID MESSAGE\n"; }
    
    //----------------
    // ERROR HANDLING
    //----------------
    if(!empty($error_message)){
        echo json_encode([
            "success" => false,
            "message" => trim($error_message) // sends $error_message as 'message' to contact.js
        ]);
        exit; // stop execution so email isn't sent
    }

    //------------
    // EMAIL DATA
    //------------
    $to = "testeremail@email.com"; // fix later
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phonenumber\nMessage: $message\n";
    $headers = "From: $email\r\nReply-To: $email";
    
    //------------
    // SEND EMAIL
    //------------
    if(mail($to, $subject, $body, $headers)){
        echo json_encode([
            "success" => true,
            "message" => "Thanks for your message!"
        ]);
    }else{
        echo json_encode([
            "success" => false,
            "message" => "Sorry, something went wrong."
        ]);
    }
    
    
}