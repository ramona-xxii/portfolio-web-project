<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    // sanitize form inputs
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL));
    $phonenumber = trim(preg_replace("/[^0-9]/", "", $_POST["phonenumber"] ?? ""));    

    // validate name
    function isValidName($name){
        return !empty($name);
    }

    // validate phone number
    function isValidPhoneNumber($phonenumber){
       return preg_match("/^\d{10}$/", $phonenumber);
    }

    // validate email
    function isValidEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

    }

    // validate message
    function isValidMessage($message){
        return !empty($message);
    }

    // set receiving email
    $to = "ramona.mcbrearty@gmail.com";

    // email content setup
    

}