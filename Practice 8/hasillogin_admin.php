<?php
 session_start();
 echo "Anda Berhasil Login Sebagai ".$_SESSION['username']." Dan Anda Terdaftar Sebagai ".$_SESSION['status'];
?>
<img src="admin.png" alt="Admin">
<br/>
Silakan Logout dengan klik link <a href='logout.php'> Disini</a>
