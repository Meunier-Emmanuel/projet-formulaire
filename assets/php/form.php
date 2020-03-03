<?php 

    $gender = $firstname = $lastname = $email =$country =$city =$subject = $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $gender = $_POST["gender"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $country = $_POST["country"];
        $city = $_POST["city"];
        $subject= $_POST["subject"];
        $message= $_POST["message"];
    }


?>