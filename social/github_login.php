<?php

$client_id = "Ov23liEiHAUjam2XjcfH";
$redirect_uri = "http://localhost/support_app/social/github_callback.php";

header("Location: https://github.com/login/oauth/authorize?client_id=$client_id&redirect_uri=$redirect_uri");
exit();

?>