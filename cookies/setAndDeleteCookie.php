<!DOCTYPE html>
<html>
<body>

<?php
  $cookie_name = "password";
  $cookie_string = "UserPassword";
  $cookie_encrypt_method = "AES-128-ECB";
  $cookie_encrypt_pswd = "superTrooperSecretu8328hfjd";
  $cookie_value_encrypted = openssl_encrypt($cookie_string, $cookie_encrypt_method, $cookie_encrypt_pswd);
  $cookie_value_decrypted = openssl_decrypt($cookie_value_encrypted, $cookie_encrypt_method, $cookie_encrypt_pswd);
  if(array_key_exists('create', $_POST)) {
    createCookie($cookie_name, $cookie_value_encrypted);
  } else if(array_key_exists('delete', $_POST)) {
    deleteCookie($cookie_name);
  }

  function createCookie($cookie_name, $cookie_value_encrypted) {
    setcookie($cookie_name, $cookie_value_encrypted, time() + (86400 * 30), "/");
  }

  function deleteCookie($cookie_name) {
    unset($_COOKIE[$cookie_name]);
  }

  if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
    echo "<p><strong>Note:</strong> Deleted, or you might have to reload the page to see the value of the cookie.</p>";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
    echo "Original value is: " . $cookie_value_decrypted;
  }
?>

<br>
<form method="post">
  <input type="submit" name="delete" id="delete" value="DELETE COOKIE" />
  <input type="submit" name="create" id="create" value="CREATE COOKIE" />
</form>

</body>
</html>