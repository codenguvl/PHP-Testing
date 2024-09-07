<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST["yourname"])) {
        $errors[] = "Your Name is required.";
    } else {
        $name = htmlspecialchars(trim($_POST["yourname"]));
    }

    if (empty($_POST["email"])) {
        $errors[] = "Email Address is required.";
    } else {
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }
    }

    if (empty($_POST["phone"])) {
        $errors[] = "Phone Number is required.";
    } else {
        $phone = htmlspecialchars(trim($_POST["phone"]));
        if (!preg_match("/^\+?[0-9]{10,15}$/", $phone)) {
            $errors[] = "Invalid phone number format.";
        }
    }

    if (empty($_POST["message"])) {
        $errors[] = "Message is required.";
    } else {
        $message = htmlspecialchars(trim($_POST["message"]));
    }

    $company = !empty($_POST["company"]) ? htmlspecialchars(trim($_POST["company"])) : '';

    sleep(3);

    if (empty($errors)) {
        echo json_encode([
            "status" => "success",
            "message" => "Form submitted successfully.",
            "data" => [
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "company" => $company
            ]
        ]);
    } else {
        echo json_encode(["status" => "error", "errors" => $errors]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>