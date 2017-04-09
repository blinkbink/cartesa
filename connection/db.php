<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 21/02/2017
 * Time: 14:37
 */

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '0110');
define('DB_DATABASE', 'pips');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>
