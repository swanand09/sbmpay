<?php

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/sbmpay.php');

if (!$cookie->isLogged())
    Tools::redirect('authentication.php?back=order.php');
	
$sbmpay = new Sbmpay();
echo $sbmpay->execPayment($context);

include_once(dirname(__FILE__).'/../../footer.php');

?>