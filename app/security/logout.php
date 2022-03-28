<?php
require_once dirname(__FILE__).'/../../config.php';

session_start();
session_destroy();

// 2. przekieruj lub "forward" na stronę główną
//redirect
header("Location: "._APP_URL);
//"forward"
//include _ROOT_PATH.'/index.php';