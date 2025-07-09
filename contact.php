<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    // sanitize inputs
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phonenumber = htmlspecialchars(trim($_POST["phonenumber"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // validate name
        // not empty
        // not null
        // no numbers
    if($name === "" || $name === NULL){
        // invalid name
    }

    // auto add dashes for phone number

    // validate email
    if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
        // invalid email error
    }

    // validate message
        // not empty
        // not null

}