<pre><?php
session_start();
//echo session_id();
//echo session_name();
echo session_encode();
//session_unset();
//session_destroy();
// session_abort();
var_dump($_SESSION);