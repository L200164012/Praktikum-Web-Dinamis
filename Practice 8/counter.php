<?php
  session_start();
  error_reporting(E_ALL ^ E_NOTICE);
?>
<html>
<head>
<title>Mengakses Data Session</title>
</head>
<body>
<?php
  $_SESSION['counter']++;
  $_SESSION['visitor_name'] = "Adul";
  echo "Selamat Datang ".$_SESSION['visitor_name']."<br/>";
  echo "Anda telah mengunjungi halaman ini sebanyak ".$_SESSION['counter']." kali.";
?>
</body>
</html>
