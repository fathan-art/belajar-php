<?php
session_start();
$_SESSION["username"] = "Joko";
$_SESSION["password"] = "Rahasialah";

echo "Berhasil membuat session";
echo "<br>";

echo "<a href=cek_session.php>
Cek Session</a>";
?>