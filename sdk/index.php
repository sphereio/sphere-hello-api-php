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

?>
<html>
<head>
    <title>Commercetools Hello API SDK example</title>
    <style type="text/css">
        .product {
            height: 190px;
            width: 155px;
            margin: 10px 25px 0 0;
            float: left;
            font-size: 11px;
            color: #6d778e;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
        }

        .product-link {
            color: #00b5de;
        }

        .product-text {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            display: block;
        }
        .product-image {
            width: 140px;
            height: 140px;
            display: block;
            padding: 4px;
            max-width: 100%;
            vertical-align: middle;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,0.2);
            -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<?php
/**
 *
 * @var \Commercetools\Core\Model\Product\ProductProjection $product
 */
foreach ($products as $product) :
    ?>
    <div class="product">
        <a href="#" class="product-link">
            <img
                src="<?= count($product->getMasterVariant()->getImages()) > 0 ? $product->getMasterVariant()->getImages()->current()->getUrl() : "http://placehold.it/165.png" ?>"
                class="product-image">
            <span class="product-text"><?= $product->getName()->en ?></span>
        </a>
        <span class="product-text"><?= count($product->getVariants()) ?> Variants</span>
    </div>
<?php endforeach; ?>
</body>
</html>
