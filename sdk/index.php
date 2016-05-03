<?php

require_once __DIR__ . '/../vendor/autoload.php';

include(__DIR__ . '/app.php');

/**
 * @var \Commercetools\Core\Model\Product\ProductProjection $product
 */
  foreach($products as $product) {
?>
<div style="height: 190px;
  width: 155px;
  margin: 10px 25px 0 0;
  float: left;
  font-size: 11px;
  color: #6d778e;
  font-family: 'Open Sans',sans-serif;
  font-weight: 400;
  ">
  <a href="#" style="color: #00b5de;">
    <img src="<?= count($product->getMasterVariant()->getImages()) > 0 ? $product->getMasterVariant()->getImages()->getAt(0)->getSmall() : "http://placehold.it/165.png" ?>" style="width: 140px;
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
      ">
    <span style="text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
      display: block;
      "><?= $product->getName()->en ?></span>
  </a>
  <span style="text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    display: block;
    "><?= count($product->getVariants()) ?> Variants</span>
</div>
<?php } ?>
