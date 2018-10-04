<?php
require 'logic.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Message Encryptor</title>
    <meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
          rel='stylesheet' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
          crossorigin='anonymous'>
</head>
<body>

<h3>Message Encryptor</h3>
<p>This message encryptor would replace the number of characters that you specify with the symbols that have been chosen.</p>

<form method='GET' action='output.php'>
    <br>
    <label for='message'>Message</label><br>
    <textarea required minlength="8" name='description'><?php if ($description) echo $description ?></textarea> 
    <br><br>
    <label for='number'>Maximum number of characters to change</label><br>
    <input required type="number" name='nochar' max='5' min='0'><br><br>
    <label for='sym'>Which characters do you want to include in your message?</label><br>
        <label><input type='checkbox' name='syms[]' value='@'> @</label><br>
        <label><input type='checkbox' name='syms[]' value='#'> #</label><br>
        <label><input type='checkbox' name='syms[]' value='$'> $</label><br>
        <label><input type='checkbox' name='syms[]' value='%'> %</label><br>
        <label><input type='checkbox' name='syms[]' value='^'> ^</label><br>
    <input type='submit' value='Encrypt' class='btn btn-primary btn-sm'>
</form>
</body>
</html>
