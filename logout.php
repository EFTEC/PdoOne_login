<?php
include "app/app.php";
@session_destroy();
@session_write_close();
header('location:index.php');
