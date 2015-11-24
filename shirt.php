<?php
// get shirtss details from products.php
include("inc/products.php");

// check if shirt id is valid
if(isset($_GET["id"])){
  $product_id = $_GET["id"];
  $products = get_products_all();
  if(isset($products[$product_id])){
    $product = $products[$product_id];
  }
}

// redirect to shirts.php if there is no such shirt
if(!isset($product)){
  header("Location: shirts.php");
  exit();
}

$section = "shirts";
$pageTitle = $product["name"];
include("inc/header.php");
 ?>
<div class="section page">
  <div class="wrapper">
    <!-- display shirt's details -->
    <div class="breadcrumb"><a href="shirts.php">Shirts</a> &gt; <?php echo $product["name"]; ?></div>
    <div class="shirt-picture">
      <span>
        <img src="<?php echo $product["img"];?>" alt="<?php echo $product["name"]; ?>"/>
      </span>
    </div>
    <div class="shirt-details">
      <h1><span class="price">$<?php echo $product["price"]; ?></span><?php echo $product["name"]; ?></h1>
      <!-- paypal form that contains shirt's sizes and Add to Cart button -->
      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
        <input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
        <table>
          <tr>
            <th>
              <input type="hidden" name="on0" value="Size">
              <label for="os0">Size</label>
            </th>
            <td>
              <!-- Loop through shirt's sizes array to display avaialble sizes of a shirt -->
              <select name="os0" id="os0">
            	<?php foreach($product["sizes"] as $size){ ?>
            	   <option value="<?php echo $size ?>"><?php echo $size; ?></option>
              <?php } ?>
              </select>
            </td>
          </tr>
        </table>
        <input type="submit" value="Add to Cart" name="submit">
      </form>
      <p class="note-designer">* All shirts are designed by RIT.</p>
    </div>
  </div>
</div>
<?php include("inc/footer.php"); ?>
