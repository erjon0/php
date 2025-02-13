 <?php
function calculateTotalPrice($products) {
    $totalPrice = 0;

    foreach ($products as $product) {
        foreach ($product as $key => $value) {
            if ($key == 'price') {
                $totalPrice += $value;
            }
        }
    }

    return $totalPrice;
}

$products = array(
    array("name" => "hose", "price" => 10),
    array("name" => "pot", "price" => 20),
    array("name" => "lighter", "price" => 30)
);

echo "Total Price: " . calculateTotalPrice($products);

 ?>