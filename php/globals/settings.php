<?php

//DB Connection
define("glob_db_host", "127.0.0.1");
define("glob_db_user", "root");
define("glob_db_pwd", "");
define("glob_db_db", "rewordpress");

//Language
define("glob_lang", "en");

//Navigation
$navigation = [
    "Home" => "1",
    "Users" => "1",
    "Datamaster" => "1",
    "Settings" => "1"
];
define("glob_sidebar_items", $navigation);

$navigation_icons = [
    "Home" => "fa-link",
    "Users" => "fa-users",
    "Datamaster" => "fa-youtube",
    "Settings" => "fa-cogs"
];
define("glob_sidebar_item_icons", $navigation_icons);
 
//