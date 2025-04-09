<?php

  session_start();

  $BASE_URL = "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"]."?" . "/");
  define("SITE", 'http://localhost/mytask/');