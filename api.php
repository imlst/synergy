<?php
    session_start(['cookie_lifetime' => 60 * 60 * 24 * 30]);

    if (isset($_GET['openBar'])) {
        $_SESSION['openBar'] = filter_var($_GET['openBar'], FILTER_VALIDATE_BOOLEAN);
    }

    echo 'костыль';
