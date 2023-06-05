<!-- This file connects the form from the landing page and stores
the input in the database system. -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Confirmation</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Laila:wght@400;700&family=Plus+Jakarta+Sans:wght@200;300;400;600&display=swap" rel="stylesheet">
	</head>
	<body style="padding: 10px;">
		<?php
			$conn = mysqli_connect("localhost", "root", "", "products");
				
			// Check connection
			if($conn === false){
				die("ERROR: Could not connect. "
					. mysqli_connect_error());
			}

			// Taking all values from the form data(input)
			$productName = $_REQUEST['productName'];
			$productPrice = $_REQUEST['productPrice'];
			$productDescription = $_REQUEST['productDescription'];
			$productDimensions = $_REQUEST['productDimensions'];
			$unitsChoice = $_REQUEST['unitsChoice'];
			$productDeliveryTimeStart = $_REQUEST['productDeliveryTimeStart'];
			$productDeliveryTimeEnd = $_REQUEST['productDeliveryTimeEnd'];
			$timeChoice = $_REQUEST['timeChoice'];
			$productImage = $_REQUEST['productImage'];
			$productInventoryCount = $_REQUEST['productInventoryCount'];
			$buyerName = $_REQUEST['buyerName'];
			$buyerPhoneNumber = $_REQUEST['buyerPhoneNumber'];
			$buyerEmails = $_REQUEST['buyerEmails'];
			$policyDescription = $_REQUEST['policyDescription'];
			$productId = $_REQUEST['productId'];

			// Performing insert query execution
			// here our table name is productsinformation
			$sql = "INSERT INTO productsinformation  VALUES ('$productName',
				'$productPrice','$productDescription','$productDimensions',
				'$unitsChoice','$productDeliveryTimeStart','$productDeliveryTimeEnd',
				'$timeChoice','$productImage','$productInventoryCount','$buyerName',
				'$buyerPhoneNumber','$buyerEmails','$policyDescription','$productId')";
				
			if(mysqli_query($conn, $sql)){
				
				echo "<h3>Your confirmation number is:". " " . $productId . "</h3>";
				echo nl2br("Product name: $productName\n Price: $productPrice\n "
					. "Description: $productDescription\n Dimensions: $productDimensions $unitsChoice \n"
					. "Delivery time range: $productDeliveryTimeStart - $productDeliveryTimeEnd $timeChoice\n "
					. "Attached image: $productImage\n Inventory count: $productInventoryCount\n Vendor name: $buyerName\n "
					. "Phone number: $buyerPhoneNumber\n Email: $buyerEmails\n Policy: $policyDescription\n");
				
			} else{
				echo "ERROR: Hush! Sorry $sql. "
					. mysqli_error($conn);
			}

		?>
	</body>
	<footer>
	<img src="images/online-shopping.png" id="footer-img" style="width:200px; height:auto;">
    <div>
        <a href="index.php">Homepage</a>
        <a href="modify.php">Have a confirmation code?</a>
        <h3>Contact Us</h3>
        <p>Email: customer-service@marketplace.com</p>
        <p>Address: 462 Parkway Street, Pittsburgh - 15213</p>
    </div>
		</footer>
</html>
<?php
mysqli_close($conn);
?>