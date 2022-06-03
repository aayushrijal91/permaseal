<?php
include __DIR__ . '/../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score');
        }

        $to = $admin_email;

        $subject = "Message from " . $site;

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $postcode = $_POST['postcode'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $service = $_POST['service'];

        $message = '<!DOCTYPE html><html><body>' .
            'Name: <strong>' . strip_tags($name) . '</strong><br>' .
            'Phone: <strong>' . strip_tags($phone) . '</strong><br>' .
            'Email Address: <strong>' . strip_tags($email) . '</strong><br>' .
            'Post Code: <strong>' . strip_tags($postcode) . '</strong><br>' .
            'Preferred Inspection Date: <strong>' . strip_tags($date) . '</strong><br>' .
            'Preferred Inspection Time: <strong>' . strip_tags($time) . '</strong><br>' .
            'Service: <strong>' . strip_tags($service) . '</strong><br>';

        $headers = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <". $no_reply_email . ">" . "\r\n" .
            // "Bcc: " . $bcc_email . "\r\n" .
            "Reply-To: " . $site . " <". $no_reply_email . ">" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            header('location:./../thankyou');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
