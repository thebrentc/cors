<?php
$cors = true; 
if (isset($_REQUEST['cors'])) {
    $cors = ($_REQUEST['cors']=="true")?true:false;
}
if ($cors) {
    header("Access-Control-Allow-Origin: *");
}
echo '<!DOCTYPE html>'."\n";
echo '<html lang="en">'."\n";
echo '<head>'."\n";
echo '<meta charset="utf-8" />'."\n";
echo '<title>CORS server</title>'."\n";
echo '</head>'."\n";
echo '<body>'."\n";
echo '<p>Hello</p>'."\n";
echo '<p>CORS is '.($cors?'ON':'OFF').'</p>'."\n";
echo '</body>'."\n";
echo '</html>'."\n";


