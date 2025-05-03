<?php
session_start(); 

function checkAccess($rolesAllowed) { 
    if(!isset($_SESSION['username']) || !in_array($_SESSION['role'], $rolesAllowed)) { 
        echo "Akses Ditolak <a href='login.php'>silahkan Login lagi</a>";
        exit;
    }
}


?>