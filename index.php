<?php

echo "== SERVER";
print_r($_SERVER);
echo "== GET";
print_r($_GET);
echo "== POST";
print_r($_POST);
echo "== INPUT";
echo file_get_contents('php://input');
?>
