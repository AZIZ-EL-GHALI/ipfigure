<?php
$bot_agents = array("Googlebot", "Bingbot", "Slurp", "DuckDuckBot", "Baiduspider", "YandexBot", "Sogou");

foreach($bot_agents as $bot) {
    if(strpos($_SERVER['HTTP_USER_AGENT'], $bot) !== false) {
        header("Location: https://www.example.com/block-message");
        exit();
    }
}

// The rest of your PHP code
?>
