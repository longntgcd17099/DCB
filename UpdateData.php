<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<style>
    li {
        list-style: none;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
    body {
        width: 100%;
        height: 100%;
        background: url(gun1.jpg) no-repeat;
        background-size: cover;
    }

    p {
        text-align: center;
    }
</style>
<script>
    function CheckClass() {
        var CheckSupplierName = document.getElementById("Supplier1").value;
        var checkProductName = document.getElementById("Name1").value;
        var checkPrice = document.getElementById("Price1").value;
        if (CheckSupplierName == "ToyCompany") {
            return true;
        } else if (checkProductName == "") {
            alert("ProductName should have Data");
            return false;
        } else if (checkPrice == "") {
            alert("Price should have Data");
            return false;
        } else {
            alert("Supplier Name should equal ToyCompany");
            return false;
        }
    }
</script>

<body>

    <h1>Update to the database</h1>
    <ul>
        <form name="UpdateData" action="UpdateData.php" method="POST">
            <li>ProductID:</li>
            <li><input type="text" name="productID" id= /></li>
            <li>Name:</li>
            <li><input type="text" name="name" id="Name1" /></li>
            <li>Shopname:</li>
            <li><input type="text" name="Shopname" id="Shopname1" /></li>
            <li>price:</li>
            <li><input type="text" name="price" id="price1" /></li>
            <li><input type="submit" onclick="CheckSupplier()" /></li>
        </form>

    </ul>
    <div class="row">
        <div class="col-12">
            <a href="ConnectToDB.php" class="myButton pl-3">view data to the database's ATN</a>

            <a href="InsertData.php" class="myButton pl-3">Insert Product to the database's ATN</a>

            <a href="DeleteData.php" class="myButton pl-3">Delete Product to the database's ATN</a>

            <a href="index.php" class="myButton pl-3">Go Home</a>
        </div>
    </div>
    <?php
    // ini_set('display_errors', 1);
    // echo "Update database!";
    ?>

    <?php
    
    if (empty(getenv("DATABASE_URL"))) {
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
   } else {

        $db = parse_url(getenv("DATABASE_URL"));
        $pdo = new PDO("pgsql:" . sprintf(
         "host=ec2-54-227-245-146.compute-1.amazonaws.com;
      port=5432;
      user=dphhigcaqlnlbo;
      password=2d9e255af360659b3de3c0428221be071372fbfdc09c6a64422cc8a73395b004;
      dbname=d5c9hsgmdvbs20",
            $db["host"],
            $db["port"],
            $db["user"],
            $db["pass"],
            ltrim($db["path"], "/")
        ));
    }

    //$sql = 'UPDATE productid '
    //                . 'SET name = :name, '
    //                . 'WHERE ID = :id';
    // 
    //      $stmt = $pdo->prepare($sql);
    //      //bind values to the statement
    //        $stmt->bindValue(':name', 'Lee');
    //        $stmt->bindValue(':id', 'SV02');
    // update data in the database
    //        $stmt->execute();

    // return the number of row affected
    //return $stmt->rowCount();
    $sql = "UPDATE Product SET productID = '$_POST[productID]', Shopname = '$_POST[Shopname]', Price = '$_POST[Price]'
        WHERE productID = '$_POST[productID]'";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute() == TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record. ";
    }

    ?>
</body>

</html>