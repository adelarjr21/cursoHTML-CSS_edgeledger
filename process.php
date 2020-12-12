<?php
    if (isset($_POST['email'])) {
        
        //Email Information
        $admin_email = "adelarjr.s@gmail.com";
        $name = $_POST['name']
        $email = $_POST['email']
        $phone = $_POST['phone']
        $message = $_POST['message']

        //send email
        mail($admin_email, "New Form Submission", $message .' - ' . $phone, "From:" . $email);

        header('Location: https://adelarjr21.github.io/cursoHTML-CSS_edgeledger/success.html');
    }