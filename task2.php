<?php
// Basic Authentication System

define("USER", "Siyum");
define("PASS", "909090");

echo "Enter Username: ";
$username = trim(fgets(STDIN));
echo "Enter Password: ";
$password = trim(fgets(STDIN));

if ($username == USER && $password == PASS) {
    echo "Hi $username, Welcome to OSTAD Batch 6! ";
}else{
    echo "OSTAD bhul credential dicchen keno??";
}