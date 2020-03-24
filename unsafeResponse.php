<?php
    $fileName = $_POST['fileName'];
    system("touch $fileName", $retval);
    if ($retval == 0) {
        echo("$fileName created");
    } else {
        echo ("Whoops, something is not right");
    }
?>