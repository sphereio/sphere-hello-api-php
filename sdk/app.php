<?php
namespace Sphere\Hello;

use Sphere\Core\Cache\NullCacheAdapter;
use Sphere\Core\Client;
use Sphere\Core\Config;
use Sphere\Core\Model\Common\Context;
use Sphere\Core\Request\Products\ProductProjectionQueryRequest;

$appConfig = include(__DIR__ . '/config.php');

$cache = new NullCacheAdapter();
$context = Context::of()->setLanguages(['en'])->setGraceful(true);
$config = Config::fromArray($appConfig)->setContext($context);
$client = Client::ofConfigAndCache($config, $cache);

$products = $client->execute(ProductProjectionQueryRequest::of())->toObject();
?>
