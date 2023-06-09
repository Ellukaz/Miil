<?php
// KAS VORM ON ESITATUD
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // SAA INFO VORMIST
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate the login credentials (example validation)
  if ($username === 'root' && $password === 'Passw0rd!') {
    // Viib admin.php lehele
	header("Location: admin.php");
    echo 'Oled sisse loginud administraatorina.';
  } else {
    // Sisse logimine ei õnnestunud
    echo 'Vale kasutajanimi või parool.';
  }
}
?>
