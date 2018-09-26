<?php
require 'text-logic.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Input Examples</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>
</head>
<body>

<h3>Message Encryptor</h3>

<form method='GET' action='text.php'>
    <br>
    <input type='hidden' name='userId' value='<?= $userId ?>'>
    <br>
    <label for='message'>Message</label><br>
    <textarea name='description'><?php if ($description) echo $description ?></textarea>
    <br><br>
    <input type='submit' class='btn btn-primary btn-sm'>

</form>
</body>
</html>