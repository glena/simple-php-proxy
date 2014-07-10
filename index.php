<?php

$url = base64_decode($_GET['url']);
echo file_get_contents($url);

?>