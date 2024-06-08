<?php
//The logout page. It terminates the session and sends the user back to the home page.
session_start();
session_destroy();

header("Location: index.php");
exit;
?>