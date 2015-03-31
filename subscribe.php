<?php

    $return = array();

    if (!isset($_POST['email']) || is_null($_POST['email']) || $_POST['email'] == "") {
        $return['message'] = "Oops! We had some problems processing your e-mail. Plea, try again in a few moments.";
    } else {
        $email = $_POST['email'];
        $result = file_put_contents("emails.txt", "$email,\n", FILE_APPEND);

        if ($result === false) {
            $return['message'] = "Oops! We had some problems processing your e-mail. Please, try again in a few moments.";
        } else {
            $return['message'] = "Thanks for subscribing!";
        }
    }

    echo json_encode($return);
?>
