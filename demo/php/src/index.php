<?php
$user = $_SERVER['HTTP_X_DW_USER'];
if ($user != "true") {
  echo 'No-code SSO for a PHP program by <a href="https://www.datawiza.com">Datawiza</a>.</br>';
  echo "User not found. </br>";
  echo 'You can see <a href="https://github.com/datawiza-inc/Azure-AD-SSO-PHP-App">here</a> how to use No-Code Datwiza to authenticate a PHP app using Microsoft Azure AD.';
} else {
  echo 'No-code SSO for a PHP program by <a href="https://www.datawiza.com">Datawiza</a>.</br>';
  echo "Welcome, " . $_SERVER['HTTP_USERNAME'] . "!</br>";
  echo "Email: " . $_SERVER['HTTP_EMAIL'] . "</br>";
  echo "Your Microsoft Azure AD access token: " . $_SERVER['HTTP_X_DATAWIZA_TOKEN_AAD_ACCESS_TOKEN'] . "</br>";
  echo '<a href="/ab-logout">Logout</a>';
}
?>
