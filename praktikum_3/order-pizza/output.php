<?php
$name = $_POST['name'];
$address = $_POST['address'];
$phoneNumber = $_POST['phoneNumber'];
$instruction = $_POST['instruction'];
$crust = $_POST['crust'];
$numberOfPizza = $_POST['numberOfPizza'];
$email = $_POST['email'];
$toppings = isset($_POST['toppings']) ? $_POST['toppings'] : [];

echo "<h2>THANK YOU</h2> <hr>";
echo "<p>Thank you for ordering from Black Goose Bistro we have received the following information about your order:</p> <hr>";
echo "<h3>Your Information: </h3>";
echo "<p><strong>Name:</strong> $name</p>";
echo "<p><strong>Address:</strong> $address</p>";
echo "<p><strong>Phone:</strong> $phoneNumber</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Delivery Instruction:</strong> $instruction</p>";
echo "<hr> <h3>Your Pizza: </h3>";
echo "<p><strong>Crust:</strong> $crust</p>";
echo "<p><strong>Toppings:</strong> " . implode(", ", $toppings) . "</p>";
echo "<p><strong>Number of pizzas:</strong> $numberOfPizza</p> <hr>";
