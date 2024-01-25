function sendemail_verify($name, $email, $verify_token){

    $mail = new PHPMailer(true);
    // $mail - > SMTPDebug = 2;

    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->Username   = 'destinytechnology54@gmail.com';                     //SMTP username
    $mail->Password   = 'vaghmigltzxzpbcr';                               //SMTP password

    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('destinytechnology54@gmail.com', $name);
    $mail->addAddress($email);     //Add a recipient
   