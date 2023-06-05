<!-- This is the page that vendor can visit once they have already submmited their
application. They can enter their confirmation code and either retrieve, delete, or
edit their data. Please note only retrieve and delete are working. -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tracking</title>
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
        <form class="product-information" id="editDelete" action="modifyDatabase.php" method="post">
            <h2>Please provide your confirmation number to proceed:</h2>
            <input type="text" placeholder="8-digit alphanumeric number" name="confirmationProductId" id="confirmationProductId" required>
            <input type="submit" name="retrieve" id="retrieveButton" value="Retrieve Product Info">
            <input type='submit' name="delete" id="deleteButton" value='Delete'/>
            <input type='submit' name="edit" id="editButton" value='Edit'/>
        </form>
        <script src="js\modify.js"></script>
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