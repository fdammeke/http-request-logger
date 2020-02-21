<?php

echo "== SERVER";
print_r($_SERVER);
file_put_contents(api.log, $_SERVER, FILE_APPEND);
echo "== GET";
print_r($_GET);
file_put_contents(api.log, $_GET, FILE_APPEND);
echo "== POST";
print_r($_POST);
file_put_contents(api.log, $_POST, FILE_APPEND);
echo "== INPUT";
echo file_get_contents('php://input');
file_put_contents(api.log, file_put_contents(api.log, $_SERVER, FILE_APPEND), FILE_APPEND);



?>
