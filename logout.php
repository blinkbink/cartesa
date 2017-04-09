<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 21/02/2017
 * Time: 14:55
 */

session_start();
if(session_destroy())
{
    header("Location: index.php");
}

?>