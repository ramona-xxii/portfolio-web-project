<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    // sanitize inputs
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phonenumber = htmlspecialchars(trim($_POST["phonenumber"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    
}