<?php
namespace Commercetools\Hello;

use Commercetools\Core\Cache\NullCacheAdapter;
use Commercetools\Core\Client;
use Commercetools\Core\Config;
use Commercetools\Core\Model\Common\Context;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$appConfig = include(__DIR__ . '/config.php');

$logger = new Logger('hello', [new StreamHandler('resource.log')]);

$cache = new NullCacheAdapter();

$context = Context::of()->setLanguages(['en'])->setGraceful(true);
$config = Config::fromArray($appConfig)->setContext($context);
$client = Client::ofConfigCacheAndLogger($config, $cache, $logger);

?>
