<?php
if (isset($_POST["ime"])) {
    $ime = $_POST["ime"];
    echo "Pozdrav, " . htmlspecialchars($ime) . "!";
}
?>