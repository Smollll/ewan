<?php
$errors = array();

if (isset($_POST["next"])) {
    // Validate name field
    if (empty($_POST["fullname"])) {
        $errors['fullname'] = "Name is required";
    } else {
        $fullname = $_POST['fullname'];
        $san_fullname = filter_var($fullname, FILTER_SANITIZE_STRING);
        $pattfull = "/^[a-zA-Z\s\.\-]+$/";
        $resname = preg_match($pattfull, $san_fullname);

        if ($resname !== 1) {
            $errors['fullname'] = "Invalid name format";
        }
    }

    // If there are no errors, proceed to the next page
    if (empty($errors)) {
        header("Location: rstep3.php");
        exit(); // Ensure script execution stops after redirect
    }
}
?>

<h1>sdasdasd</h1>