<?php
include(dirname(__FILE__) . "/sdk/rbkmoney_autoload.php");

header('Location: /personal/order/rbkmoney_payment/failed.php', true, RBKmoney::HTTP_CODE_MOVED_PERMANENTLY);
exit();
?>
