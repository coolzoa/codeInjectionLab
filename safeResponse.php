<?php
    $fileName = $_POST['fileName'];
    $escapedFileName = escapeshellcmd($fileName);
    system("touch $escapedFileName", $retval);
    if ($retval == 0) {
        echo("$fileName created");
    } else {
        echo ("Whoops, something is not right");
    }
?>