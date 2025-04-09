<?php
    $file = fopen("data.txt", "r");
        if ($file) {
            while (($line = fgets($file)) !== false) {
                echo htmlspecialchars($line) . "<br>";
            }
            fclose($file);
        } else {
            echo "Tidak dapat membuka file.";
        }
        ?>