<?php
header("Content-Type: application/json"); // tell browser its receiving json

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    //--------------
    // GET RAW INPUT
    //--------------
    $rawName = $_POST['name'] ?? ''; // use '' if undefined/missing value --> use instead of isset()
    $rawEmail = $_POST['email'] ?? '';
    $rawPhonenumber = $_POST['phonenumber'] ?? '';
    $rawMessage = $_POST['message'] ?? '';
    $error_message = "";

    //---------------------
    // SANITIZING FUNCTIONS
    //---------------------

    // FUNCTION => Sanitize NAME 
    function SanitizeName ($rawName, $maxLength = 50) {
        $name = trim($rawName);     // 1. trim whitespace
        $name = strip_tags($name);  // 2. Remove all HTML tags
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); // 3. excape specials chars to prevent XSS
        if (strlen($name) > $maxLength) { $name = substr($name, 0, $maxLength); } // 4. cap name length at 50
        return $name;
    }

    // FUNCTION => Sanitize EMAIL
    function SanitizeEmail ($rawEmail, $maxLength = 50){ 
        $email = trim($rawEmail);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (strlen($email) > $maxLength){ $email = substr($email, 0, $maxLength); }
        return $email;
    }

    // FUNCTION => Sanitize PHONE #
    function SanitizePhonenumber ($rawPhonenumber, $maxLength = 10) {
        $phonenumber = trim($rawPhonenumber);
        $phonenumber = preg_replace("/[^0-9]/", "", $phonenumber);
        if(strlen($phonenumber) > $maxLength) { $phonenumber = ""; }
        return $phonenumber;
    }

    // FUNCTION => Sanitize MESSAGE
    function SanitizeMessage ($rawMessage, $maxLength = 500) {
        $message = trim($rawMessage);
        $message = strip_tags($message);
        $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
        if(strlen($message) > $maxLength){ $message = substr($message, 0, $maxLength); }
        return $message;
    }

    //---------------------
    // VALIDATION FUNCTIONS
    //---------------------
    function isValidName($name){ return !empty($name); }
    function isValidPhoneNumber($phonenumber){ return empty($phonenumber) || preg_match("/^\d{10}$/", $phonenumber); }
    function isValidEmail($email){ return filter_var($email, FILTER_VALIDATE_EMAIL) !== false; }
    function isValidMessage($message){ return !empty($message); }

    //----------------
    // SANITIZE INPUTS
    //----------------
    $name = SanitizeName($rawName);
    $email = SanitizeEmail($rawEmail);
    $phonenumber = SanitizePhonenumber($rawPhonenumber);
    $message = SanitizeMessage($rawMessage);

    //-----------------
    // VALIDATE INPUTS
    //-----------------
    if(!isValidName($name)
        || !isValidPhoneNumber($phonenumber) 
        || !isValidEmail($email) 
        || !isValidMessage($message)){
            $error_message = "ERROR: INVALID INPUTS";
        }
    
    //----------------
    // ERROR HANDLING
    //----------------
    if(!empty($error_message)){
        echo json_encode([
            "success" => false,
            "message" => $error_message // sends $error_message as 'message' to contact.js
        ]);
        exit; // stop execution so email isn't sent
    }

    //------------
    // EMAIL DATA
    //------------
    $to = "testeremail@email.com"; // fix later
    $subject = "Portfolio Website Contact Form Submission";
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