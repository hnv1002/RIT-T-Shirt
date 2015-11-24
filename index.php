<?php
$pageTitle = "Huy's Store";
$section = "home";
include("inc/header.php");
?>
<div class="section banner">
  <div class="wrapper">
    <!-- button to direct to shirts page */ -->
    <img class="hero" src="img/huy-the-tiger.png" alt="Mike says: " style="padding:40px 0px;"/>
    <div class="button">
      <a href="shirts.php">
        <h2>Hey, I&rsquo;m Huy!</h2>
        <p>Check Out My Shirts</p>
      </a>
    </div>
  </div>
</div>
<!-- Show latest shirts -->
<div class="section shirts latest">
  <div class="wrapper">
    <h2 style="padding:20px;">RIT&rsquo; Latest Shirts</h2>
    <?php include("inc/products.php"); ?>
    <ul class="products">
    <!-- Loop through each shirt and display the last four shirts. -->
      <?php
        $current = 0;
        $list_view_html = "";
        foreach(get_products_all() as $product_id => $product){
          $current += 1;
          if($current > 16){
            $list_view_html = get_list_view_html($product_id, $product).$list_view_html;
          }
        }
        echo $list_view_html;
      ?>
    </ul>
  </div>
</div>
<?php
include("inc/footer.php");
?>
