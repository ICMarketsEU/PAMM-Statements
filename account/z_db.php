<?php
@$con = new mysqli("localhost","u575327465_root","8T#lX[s@h~","u575327465_db");
if (@$con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>