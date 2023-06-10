<!DOCTYPE html>
<html>
<head>
    <title>Chatbox</title>
</head>
<body>
<div id="chatbox">
    <?php include 'display_message.php'; ?>
</div>

<form method="post" action="save_message.php">
    <textarea name="message" placeholder="Enter your message"></textarea>
    <input type="submit" value="Send">
</form>
</body>
</html>
