<?php
namespace Sphere\Hello;

use Sphere\Core\Client;
use Sphere\Core\Config;
use Sphere\Core\Model\Common\Context;
use Sphere\Core\Request\Products\ProductProjectionQueryRequest;

$appConfig = include(__DIR__ . '/config.php');

$context = Context::of()->setLanguages(['en'])->setGraceful(true);
$config = new Config();
$config->fromArray($appConfig)->setContext($context);
$client = new Client($config);

$products = $client->execute(ProductProjectionQueryRequest::of())->toObject();
?>
