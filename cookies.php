<?php
    // cookie = Information about a user stoed in a user's web browser
    //          targeted advertisments, browsing prefrences, and
    //          other non sensitive data.
 setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
 setcookie("fav_drink", "Sprite", time() + (86400 * 3), "/");
 setcookie("fav_music", "I'm Tryna", time() + (86400 * 4), "/");
?>