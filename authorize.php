<?php

//Username and password set
$username = 'admin';
$password = 'admin';


if (!isset($_SERVER['PHP_AUTH_USER']) ||  (!isset($_SERVER['PHP_AUTH_PW'])   ||  ($_SERVER['PHP_AUTH_USER'] != $username)  ||  ($_SERVER['PHP_AUTH_PW'] != $password))) {
//Authorize login
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Up2date"');
    exit('<h3>Sorry this is an admin page.</h3>
        <br>
        <a href="index.html">Return to Main Page</a>
        ');

} //end if

?>