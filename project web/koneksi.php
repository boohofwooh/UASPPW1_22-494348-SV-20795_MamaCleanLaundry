<?php

/**
 * Configuration file for connection to database
 * Using mysqli_connect for database connection
 */

$host = "localhost";
$username = "root";
$password = "";
$database = "mamacleanlaundry";

$mysqli = mysqli_connect($host, $username, $password, $database) or die("LOST CONNECTION CONTACT YOUR ADMINISTRATOR [IT]");
