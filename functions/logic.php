<?php

if (isset($_POST['pswlength']) && !empty($_POST['pswlength'])) {
    $password = '';
    for ($i = 0; $i < $_POST['pswlength']; $i++) {
        $rand = rand(1, 3);
        // variabile 1 lettera
        if ($rand == 1) {
            $moment = array_rand($arrayLetters);
            $rand2 = rand(1, 2);
            if ($rand2 == 1) {
                $password = $password . strtoupper($arrayLetters[$moment]);
            } else {
                $password = $password . $arrayLetters[$moment];
            }
        }
        // variabile 2 numeri
        elseif ($rand == 2) {
            $moment = array_rand($arrayNumbers);
            $password = $password . $arrayNumbers[$moment];
        }
        // variabile 3
        else {
            $moment = array_rand($arraySpecials);
            $password = $password . $arraySpecials[$moment];
        }
    }
    ;
    session_start();
    $_SESSION[`passwordgen`] = $password;
    header('Location: ./success.php');
}
;
?>