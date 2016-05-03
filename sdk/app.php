<?php
namespace Sphere\Hello;

use Commercetools\Core\Cache\NullCacheAdapter;
use Commercetools\Core\Client;
use Commercetools\Core\Config;
use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Request\Products\ProductProjectionQueryRequest;

$appConfig = include(__DIR__ . '/config.php');

$cache = new NullCacheAdapter();
$context = Context::of()->setLanguages(['en'])->setGraceful(true);
$config = Config::fromArray($appConfig)->setContext($context);
$client = Client::ofConfigAndCache($config, $cache);

$products = $client->execute(ProductProjectionQueryRequest::of())->toObject();
?>
