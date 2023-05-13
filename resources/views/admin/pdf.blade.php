<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        h3 {
            margin: 10px 0;
        }

        .customer-info {
            margin-bottom: 20px;
        }

        .product-info {
            margin-bottom: 40px;
        }

        .product-info h3 {
            font-weight: normal;
        }
    </style>
</head>
<body>

<h1>Order Details</h1>

<div class="customer-info">
    <h3>Customer Name: {{$order->name}}</h3>
    <h3>Customer Email: {{$order->email}}</h3>
    <h3>Customer Phone: {{$order->name}}</h3>
    <h3>Customer ID: {{$order->user_id}}</h3>
</div>

<div class="product-info">
    <h3>Product Name: {{$order->product_title}}</h3>
    <h3>Product Price: {{$order->price}}</h3>
    <h3>Product Quantity: {{$order->quantity}}</h3>
    <h3>Product ID: {{$order->product_id}}</h3>
</div>

</body>
</html>

