<?php require_once('../auth.php'); ?>
<?php if (isset($auth) && $auth) {?>
<?php
$NFSpoint = $_GET['NFSpoint'];
putenv("NFSpoint=$NFSpoint");
exec('sudo /opt/de_GWD/ui-offNFS $NFSpoint >/dev/null 2>&1 &');
?>
<?php }?>