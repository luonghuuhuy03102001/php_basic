<?php
    session_start();
    //  + xóa session 
    session_destroy();
    header('location: /session.php');
?>