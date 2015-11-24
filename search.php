<?php
$search_term = "";
if(isset($_GET["s"])){
  $search_term = trim($_GET["s"]);
  if($search_term != ""){
    require_once("inc/products.php");
    $products = get_products_search($search_term);
  }
}
$pageTitle = "Search";
$section = "search";
include("inc/header.php");
 ?>
<div class="section shirts search page">
  <div class="wrapper">
    <h1>Search</h1>
    <form method="get" action="search.php">
      <input type="text" name="s" value="<?php echo htmlspecialchars($search_term); ?>">
      <input type="submit" value="Go">
    </form>
    <?php if($search_term != ""){
            if(!empty($products)){
                $list_view_html = ""; ?>
                <?php foreach($products as $product){
                  $list_view_html = get_list_view_html($product["id"], $product).$list_view_html;
                ?>
            <?php } ?>
            <ul class="products">
              <?php echo $list_view_html; ?>
            </ul>
            <?php } else { ?>
              <p> No matching products were found.</p>
            <?php } ?>
          <?php } ?>
  </div>
</div>
 <?php
include("inc/footer.php");
  ?>
