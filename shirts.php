<?php
$pageTitle = "Full Catalog of Shirts";
$section = "shirts";
include("inc/products.php");
include("inc/header.php");
?>
<div class = "section shirts page">
  <div class="wrapper">
    <h1>Huy&rsquo; Catalog of Shirts</h1>
    <ul class="products">
      <!-- Loop through all available shirts and display their images -->
      <?php foreach(get_products_all() as $product_id => $product){
        echo get_list_view_html($product_id, $product);
      } ?>
    </ul>
  </div>
</div>
<?php include("inc/footer.php"); ?>
