<?php require_once('../auth.php'); ?>
<?php if (isset($auth) && $auth) {?>
<?php
exec('sudo /opt/de_GWD/ui-onUDP r >/dev/null 2>&1 &');
?>
<?php }?>
