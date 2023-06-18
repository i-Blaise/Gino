<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root_ID_user');
define('DB_PASS' ,'admin@2023');
define('DB_NAME', 'ginopomopromotion');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class DataBase
{
  // public static $con;
 function __construct()
 {
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 }
}