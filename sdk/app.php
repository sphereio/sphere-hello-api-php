<?php
namespace Sphere\Hello;

use Sphere\Core\Client;
use Sphere\Core\Config;
use Sphere\Core\Model\Common\Context;
use Sphere\Core\Request\Products\ProductProjectionQueryRequest;

$appConfig = include(__DIR__ . '/config.php');

$context = Context::of()->setLanguages(['en'])->setGraceful(true);
$config = Config::fromArray($appConfig)->setContext($context);
$client = Client::ofConfig($config);

$products = $client->execute(ProductProjectionQueryRequest::of())->toObject();
?>
