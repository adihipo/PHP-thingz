<!DOCTYPE html>
<?php
$cookie_name = "password";
$cookie_string = "UserPassword";
$cookie_encrypt_method = "AES-128-ECB";
$cookie_encrypt_pswd = "superTrooperSecretu8328hfjd";
$cookie_value_encrypted = openssl_encrypt($cookie_string, $cookie_encrypt_method, $cookie_encrypt_pswd);
$cookie_value_decrypted = openssl_decrypt($cookie_value_encrypted, $cookie_encrypt_method, $cookie_encrypt_pswd);
setcookie($cookie_name, $cookie_value_encrypted, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
     echo "<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
     echo "Original value is: " . $cookie_value_decrypted;
}
?>

</body>
</html>