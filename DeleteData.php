<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
    body {
        width: 100%;
        height: 100%;
        background: url(gunn.jpg) no-repeat;
        background-size: cover;
    }

    p {
        text-align: center;
    }
</style>

<style>
    li {
        list-style: none;
    }
</style>
<script>
    x = document.getElementById("take");
    if (x == "") {
        alert("");
    }
</script>

<body>


    <h1>Delete from database's ATNs</h1>
    <ul>
        <form name="DeleteData" action="DeleteData.php" method="POST">
            <li>PRODUCT ID:</li>
            <li><input type="text" name="productid" id="take" /></li>
            <li><input type="submit" /></li>
        </form>

    </ul>
    <div class="row">
        <div class="col-12">
            <a href="ConnectToDB.php" class="myButton pl-3">view data to the database's ATN</a>

            <a href="InsertData.php" class="myButton pl-3">Insert data to the database's ATN</a>

            <a href="UpdateData.php" class="myButton pl-3">Update data to the database's ATN</a>

            <a href="index.php" class="myButton pl-3">Go Home</a>


        </div>
    </div>

    <?php
    // ini_set('display_errors', 1);
    // echo "Insert database!";
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

    $sql = "DELETE FROM product WHERE productID = '$_POST[productID]'";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute() == TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: ";
    }

    ?>
</body>

</html>