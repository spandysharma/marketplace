<!-- This is the landing page that the vendor will see. The main function
for this page is to welcome to vendor and collect their contact and 
product information. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Marketplace</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@400;700&family=Plus+Jakarta+Sans:wght@200;300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <img src="images/online-shopping.png">
            <div class="top-left"><h1>Welcome to Marketplace!</h1></div>
        </div>
    </header>
    <form class="product-information" id="submitInitial" action="form.php" method="post">
        <h2>Please provide the following product information:</h2>
        
        <?php
            if (isset($_POST['submitButton']))
            {
                
                if (isset($error))
                {
                    echo "<p style='color:red;'>"
                    . $error . "</p>";
                }
            }  
		?>

        <!-- Product information -->
        <ol class="information" style="list-style: none;">
            <li>
                <!-- generating and storing a form submission number. This will later be used as
                    a confirmation code. -->
                <input type="hidden" id="productId" name="productId" value="">
                <label for="productName">Name:</label>
                <input type="text" id="productName" name="productName" placeholder="" required>
                <span style="color:red;">*</span>
            </li>
            <li>
                <label for="productPrice">Price:</label>
                <input type="number" id="productPrice" name="productPrice" placeholder="In USD" required>
                <span style="color:red;">*</span>
            </li>
            <li>
                <label for="productDescription">Description:</label>
                <textarea id="productDescription" name="productDescription" placeholder="" required></textarea>
                <span style="color:red;">*</span>
            </li>
            <li>
                <label for="productDimensions">Dimensions:</label>
                <input type="text" id="productDimensions" name="productDimensions" placeholder="In l x b x h format" required>
                <span style="color:red;">*</span>
                
                <input list="dimensionUnits" id="unitsChoice" name="unitsChoice" placeholder="Dimension unit" required>
                <span style="color:red;">*</span>
                <datalist id="dimensionUnits">
                    <option value="in">
                    <option value="cm">
                    <option value="m">
                    <option value="mm">
                    <option value="ft">
                </datalist> 
            </li>
            <li>
                <label for="productDeliveryTimeStart">Delivery time range:</label>
                <input type="number" id="productDeliveryTimeStart" name="productDeliveryTimeStart" placeholder="Estimated start" required>
                <span style="color:red;">*</span>
                <label for="productDeliveryTimeEnd">to</label>
                <input type="number" id="productDeliveryTimeEnd" name="productDeliveryTimeEnd" placeholder="Estimated end" required>
                <span style="color:red;">*</span>
                
                <input list="deliveryUnits" id="timeChoice" name="timeChoice" placeholder="days/weeks" required>
                <span style="color:red;">*</span>
                <datalist id="deliveryUnits">
                    <option value="days">
                    <option value="weeks">
                </datalist> 
            </li>
            <li>
                <label for="productImage">Product image:</label>
                <input type="file" id="productImage" name="productImage" accept="image/*,video/*" required>
            </li>
            <li>
                <label for="productInventoryCount">Inventory count:</label>
                <input type="number" id="productInventoryCount" name="productInventoryCount" placeholder="" required>
                <span style="color:red;">*</span>
            </li>
        </ol>

        <!-- Vendor's contact and policies -->
        <h2>Now, please provide your information:</h2>
        <section>
            <ol class="information" style="list-style: none;">
                <li>
                    <label for="buyerName">Full name:</label>
                    <input type="text" id="buyerName" name="buyerName" placeholder="Firstname Lastname" required>
                    <span style="color:red;">*</span>
                </li>
                <li>
                    <label for="buyerPhoneNumber">Phone number:</label>
                    <input type="tel" id="buyerPhoneNumber" name="buyerPhoneNumber" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                    <span style="color:red;">*</span>
                </li>
                <li>
                    <label for="buyerEmails">Email:</label>
                    <input type="email" id="buyerEmails" name="buyerEmails" required>
                    <span style="color:red;">*</span>
                </li>
                <li>
                    <label for="policyDescription">Refund and exchange policy:</label>
                    <textarea id="policyDescription" name="policyDescription" placeholder="" required></textarea>
                    <span style="color:red;">*</span>
                </li>
                
            </ol>
        </section> 
        <input type="submit" value="Submit" onclick="submitForm()" class="button" name="submitButton">   
    </form>
    <script type="text/javascript" src="js\script.js"></script>
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