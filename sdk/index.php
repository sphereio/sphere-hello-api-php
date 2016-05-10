<?php

namespace Commercetools\Hello;

use Commercetools\Core\Request\Products\ProductProjectionQueryRequest;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * @var \Commercetools\Core\Client $client
 */
include(__DIR__ . '/app.php');

$request = ProductProjectionQueryRequest::of();
$response = $request->executeWithClient($client);
$products = $request->mapResponse($response);

include(__DIR__ . '/header.php');

/**
 *
 * @var \Commercetools\Core\Model\Product\ProductProjection $product
 */
foreach ($products as $product) :
    ?>
    <div class="product">
            <img
                src="<?= count($product->getMasterVariant()->getImages()) > 0 ? $product->getMasterVariant()->getImages()->current()->getUrl() : "http://placehold.it/165.png" ?>"
                class="product-image">
            <span class="product-text"><?= $product->getName()->en ?></span>
        </a>
        <span class="product-text"><?= count($product->getVariants()) ?> Variants</span>
    </div>
<?php 
endforeach;

include(__DIR__ . '/footer.php');
