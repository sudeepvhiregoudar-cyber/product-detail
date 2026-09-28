<?php
// Product data stored as objects inside an array
$products = [
    (object)[
        "name" => "Laptop",
        "price" => 55000
    ],
    (object)[
        "name" => "Smartphone",
        "price" => 25000
    ],
    (object)[
        "name" => "Headphones",
        "price" => 2500
    ],
    (object)[
        "name" => "Keyboard",
        "price" => 1500
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        .product {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            margin: 10px 0;
            background: #f1f1f1;
            border-radius: 6px;
        }

        .price {
            font-weight: bold;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .product {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Product List</h1>

    <?php foreach ($products as $product): ?>
        <div class="product">
            <span><?php echo htmlspecialchars($product->name); ?></span>
            <span class="price">
                ₹<?php echo number_format($product->price, 2); ?>
            </span>
        </div>
    <?php endforeach; ?>

</div>

</body>
</html>