<!--
contains all shirts' information so that shirts.php and shirt.php can refer to
-->
<?php
// function to display a shirt's image
function get_list_view_html($product_id, $product) {

    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="shirt.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

function get_products_search($search_term){
  $results = array();
  $all_products = get_products_all();

  foreach($all_products as $product){
    if(stripos($product["name"],$search_term) !== false){
      $results[] = $product;
    }
  }
  return $results;
}


function get_products_all(){
  $products = array();
  $products[101] = array(
    "id" => "101",
  	"name" => "Baseball Jersey",
  	"img" => "img/shirts/rit-101.png",
  	"price" => 18,
  	"paypal" => "C4ZGR9PQYNVQG",
      "sizes" => array("Small","Medium","Large","X-Large")
  );
  $products[102] = array(
    "id" => "102",
  	 "name" => "Hockey Jersey",
      "img" => "img/shirts/rit-102.png",
      "price" => 20,
      "paypal" => "Y7YJR2FWR6NQU",
      "sizes" => array("Small","Medium","Large","X-Large")
  );
  $products[103] = array(
    "id" => "103",
      "name" => "Jansport Jersey",
      "img" => "img/shirts/rit-103.png",
      "price" => 20,
      "paypal" => "9PPNTCXQARFXY",
      "sizes" => array("Small","Medium","Large","X-Large")
  );
  $products[104] = array(
    "id" => "104",
      "name" => "Light Jacket",
      "img" => "img/shirts/rit-104.png",
      "price" => 80,
      "paypal" => "LRRAG523MDU3U",
      "sizes" => array("Small","Medium","Large","X-Large")
  );
  $products[105] = array(
    "id" => "105",
      "name" => "Long Sleeve",
      "img" => "img/shirts/rit-105.png",
      "price" => 25,
      "paypal" => "7DFNNPQ7JE62W",
      "sizes" => array("Small","Medium","Large","X-Large")
  );
  $products[106] = array(
    "id" => "106",
      "name" => "Sweatshirt",
      "img" => "img/shirts/rit-106.png",
      "price" => 40,
      "paypal" => "RBBT4ACJ9NMP8",
      "sizes" => array("Small","Medium","Large","X-Large")
  );
  $products[107] = array(
    "id" => "107",
      "name" => "Star Wars",
      "img" => "img/shirts/rit-107.png",
      "price" => 20,
      "paypal" => "MLLNJ5BY4PEK2",
      "sizes" => array("Small","Medium","Large","X-Large")
  );
  $products[108] = array(
    "id" => "108",
      "name" => "Sweater",
      "img" => "img/shirts/rit-108.png",
      "price" => 30,
      "paypal" => "TU78MSPX5FAF6",
      "sizes" => array("Large","X-Large")
  );
  $products[109] = array(
    "id" => "109",
      "name" => "Jansport Full Zip Hooded Sweatshirt",
      "img" => "img/shirts/rit-109.png",
      "price" => 35,
      "paypal" => "ZPZF93P2WT7VE",
      "sizes" => array("Small","Medium","Large")
  );

  $products[110] = array(
    "id" => "110",
      "name" => "Nike Dri Fit Training Top",
      "img" => "img/shirts/rit-110.png",
      "price" => 25,
      "paypal" => "YHVMA4NEN4HQC",
      "sizes" => array("Small","Medium","Large","X-Large")
  );

  $products[111] = array(
    "id" => "111",
        "name" => "Ascender Outerwear",
        "img" => "img/shirts/rit-112.png",
        "price" => 125,
        "paypal" => "YGFKLE7VP9SEA",
        "sizes" => array("Small","Medium","Large","X-Large","XX_Large")
    );

  $products[112] = array(
    "id" => "112",
      "name" => "Champion Ugly Holiday Sweatshirt",
      "img" => "img/shirts/rit-111.png",
      "price" => 25,
      "paypal" => "D7BEYHGFERG3Y",
      "sizes" => array("Small","Medium","Large","X-Large")
  );

  $products[113] = array(
    "id" => "113",
      "name" => "Under Armour Mens Rival Hood",
      "img" => "img/shirts/rit-113.png",
      "price" => 50,
      "paypal" => "632VYULYX2LZQ",
      "sizes" => array("Small","Medium","Large","X-Large")
  );

  $products[114] = array(
    "id" => "114",
      "name" => "League Twisted Triblend Long Sleeve",
      "img" => "img/shirts/rit-114.png",
      "price" => 35,
      "paypal" => "XMNVHZSK8SF52",
      "sizes" => array("Small","Medium","Large","X-Large")
  );

  $products[115] = array(
    "id" => "115",
      "name" => "Champion Double Dry Fleece Quarter Zip",
      "img" => "img/shirts/rit-115.png",
      "price" => 35,
      "paypal" => "KXGLWF5J35BK2",
      "sizes" => array("Small","Medium","Large","X-Large")
  );

  $products[116] = array(
    "id" => "116",
      "name" => "Under Armour Tech Tee",
      "img" => "img/shirts/rit-116.png",
      "price" => 35,
      "paypal" => "YVCG9WMYS97H2",
      "sizes" => array("Small","Medium","Large","X-Large")
  );

  $products[117] = array(
    "id" => "117",
      "name" => "Under Armour Mens Raid Tee",
      "img" => "img/shirts/rit-117.png",
      "price" => 40,
      "paypal" => "L6HG4FUTJ76VQ",
      "sizes" => array("Small","Medium","Large","X-Large")
  );

  $products[118] = array(
    "id" => "118",
      "name" => "Long Sleeve Raid Tee",
      "img" => "img/shirts/rit-118.png",
      "price" => 40,
      "paypal" => "ZZ3JCURN5QQYW",
      "sizes" => array("Small","Medium","Large","X-Large")
  );

  $products[119] = array(
    "id" => "119",
      "name" => "Under Armour Performance Polo",
      "img" => "img/shirts/rit-119.png",
      "price" => 60,
      "paypal" => "SPJDPUJ4F3WKG",
      "sizes" => array("Small","Medium","Large","X-Large")
  );

  $products[120] = array(
    "id" => "120",
      "name" => "Grand Textured Fleece",
      "img" => "img/shirts/rit-120.png",
      "price" => 65,
      "paypal" => "JDXMMYP3TQ8N8",
      "sizes" => array("Small","Medium","Large","X-Large")
  );
  return $products;
}
?>
