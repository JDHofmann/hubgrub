<?php
if($_POST["Message"]) {
mail("jdbrewerhofmann@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HubGrub</title>
</head>
<body>
    <form method="post" action="contact.php">
        <textarea name="message"></textarea>
        <input type="submit">
        </form>
</form>
</body>
</html>