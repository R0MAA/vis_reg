<?php
require_once 'db.php';

// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $event_date = filter_input(INPUT_POST, 'event_date', FILTER_SANITIZE_STRING);

    $stmt = $conn->prepare("INSERT INTO registrations 
        (first_name, last_name, email, phone, event_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $event_date);

    if ($stmt->execute()) {

    echo "<div class='alert alert-primary alert-dismissible fade show'>
            Registration successful!
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
          </div>";

    // -------------- QR CODE GENERATION --------------
    require_once 'phpqrcode/qrlib.php';

    // Create unique QR code content
    $qr_content = "Name: $first_name $last_name\nEmail: $email\nEvent Date: $event_date";

    // File path for QR
    $qr_filename = 'qrcodes/' . uniqid('qr_') . '.png';

    // Generate QR code
    QRcode::png($qr_content, $qr_filename, QR_ECLEVEL_L, 4);

    // -------------- SEND EMAIL WITH QR ATTACHED --------------
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rosemariebullo03@gmail.com';
        $mail->Password = 'hffl gtvd ytvz yxqa';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('rosemariebullo03@gmail.com', 'Event Organizer');
        $mail->addAddress($email, $first_name);

        // Attach QR code
        $mail->addAttachment($qr_filename);

        // Email HTML
        $mail->isHTML(true);
        $mail->Subject = "Event Registration Confirmation + QR Code";
        $mail->Body = "
            <h3>Hello $first_name $last_name,</h3>
            <p>Your registration is confirmed!</p>
            <p><b>Event Date:</b> $event_date</p>
            <p>Your unique QR code is attached to this email.</p>
            <br>
            <small>Thank you! - Event Organizer</small>
        ";

        $mail->send();

    } catch (Exception $e) {
        echo "<div class='alert alert-warning'>Email failed: {$mail->ErrorInfo}</div>";
    }

    } else {
        echo "<div class='alert alert-danger alert-dismissible fade show'>
                Error: " . $stmt->error . "
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
              </div>";
    }

    $stmt->close();
    $conn->close();
}
?>
