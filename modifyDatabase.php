<!-- This file accesses data from database and edit/deletes it. -->

<?php
    // var_dump($_POST);
    error_reporting(E_ALL ^ E_WARNING);
    $conn = mysqli_connect("localhost", "root", "", "products");
				
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    if(isset($_POST['retrieve'])) {
        $confirmationProductId = $_POST['confirmationProductId'];
        echo "<h3>Your confirmation number is:". " " . $confirmationProductId . "</h3>";

        $sql = "select * from productsinformation where productId = '" . $confirmationProductId . "'";

    }
    if(isset($_POST['delete'])) {
        $confirmationProductId = $_POST['confirmationProductId'];
        echo "<h3>Your confirmation number is:". " " . $confirmationProductId . "</h3>";

        $sql = "delete from productsinformation where productId = '" . $confirmationProductId . "'";

    }

    $result =  ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 

    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Marketplace</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Laila:wght@400;700&family=Plus+Jakarta+Sans:wght@200;300;400;600&display=swap" rel="stylesheet">
        <style>
            td,th {
                border: 1px solid black;
                padding: 10px;
                margin: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <h2>Here is your product information:</h2>
        </header>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>	
                    <th>Product Price</th>	
                    <th>Product Description</th>	
                    <th>Product Dimensions</th>	
                    <th>Time Unit</th>
                    <th>Delivery Time Start</th>	
                    <th>Delivery Time End</th>
                    <th>Time Choice</th>	
                    <th>Product Image</th>
                    <th>Product InventoryCount</th>	
                    <th>Buyer Name</th>	
                    <th>Buyer PhoneNumber</th>	
                    <th>Buyer Emails</th>	
                    <th>Policy Description</th>	
                    <th>Confirmation Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(!empty($row))
                foreach($row as $rows)
                { 
                ?>
                <tr>

                    <td><?php echo $rows['productName']; ?></td>
                    <td><?php echo $rows['productPrice']; ?></td>
                    <td><?php echo $rows['productDescription']; ?></td>
                    <td><?php echo $rows['productDimensions']; ?></td>
                    <td><?php echo $rows['unitsChoice']; ?></td>
                    <td><?php echo $rows['productDeliveryTimeStart']; ?></td>
                    <td><?php echo $rows['productDeliveryTimeEnd']; ?></td>
                    <td><?php echo $rows['timeChoice']; ?></td>
                    <td><?php echo $rows['productImage']; ?></td>
                    <td><?php echo $rows['productInventoryCount']; ?></td>
                    <td><?php echo $rows['buyerName']; ?></td>
                    <td><?php echo $rows['buyerPhoneNumber']; ?></td>
                    <td><?php echo $rows['buyerEmails']; ?></td>
                    <td><?php echo $rows['policyDescription']; ?></td>
                    <td><?php echo $rows['productId']; ?></td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
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
    <script>
    </script>
</html>
<?php   
    mysqli_close($conn);
?>