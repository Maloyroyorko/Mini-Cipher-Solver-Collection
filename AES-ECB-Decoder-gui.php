<?php

$ciphertext_b64 = "aWl5IGlzIGhlcmU=";

// Decode the Base64 string
$decrypted_text = base64_decode($ciphertext_b64);

echo "Decrypted Flag: " . $decrypted_text . "<br>";

?>
