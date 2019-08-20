<!DOCTYPE html>
<html>
<script>
    function CheckClass() {
        var CheckClassName = document.getElementById("Class1").value;
        var checkFullName = document.getElementById("Name1").value;
        var checkEmail = document.getElementById("Email1").value;
        if (CheckClassName == "GCD0818") {
            return true;
        } else if (checkFullName == "") {
            alert("FullName should have Data");
            return false;
        } else if (checkEmail == "") {
            alert("Email should have Data");
            return false;
        } else {
            alert("ClassName should equal GCD0818");
            return false;
        }
    }
</script>

<head>
    <title>Insert data to PostgreSQL with php - creating a simple web application</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css">
    <style>
        li {
            list-style: none;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="row justify-content-center">
        <div class="col-9">
            <h1>INSERT DATA TO DATABASE</h1>
            <h2>Enter data into student table</h2>
            <ul>
                <form name="InsertData" action="InsertData.php" method="POST">
                    <li>ID:</li>
                    <li><input type="text" name="id" /></li>
                    <li>Name:</li>
                    <li><input type="text" name="name" id="Name" /></li>
                    <li>Address:</li>
                    <li><input type="text" name="address" id="Address" /></li>
                    <li>Phone:</li>
                    <li><input type="text" name="phone" id="Phone" /></li>
                    <li><input type="submit" name="Submit" onclick="true" /></li>
                </form>
            </ul>
            <div class="row">
                <div class="col-12">
                      <button type="button" class="btn btn-danger"><a href="ConnectToDB.php" class="myButton pl-3">View Data</a></button>
                      <button type="button" class="btn btn-info"><a href="DeleteData.php" class="myButton pl-3">Delete data to the database</a></button>
                      <button type="button" class="btn btn-warning"><a href="UpdateData.php" class="myButton pl-3">Update data to the database</a></button>
                </div>
            </div>
        </div>
    </div>
    <?php

    $pdo = new PDO("pgsql:dbname=dbrdj5ncji5jht;host=ec2-174-129-227-51.compute-1.amazonaws.com","mcgukeefumpzju", "a7a1360fc5b23a76cb0614c11b07e6dbf69f9604c8b5dacec301037c53c44236" );

    if ($pdo === false) {
      echo "ERROR: Could not connect Database";
    }
    $sql = 'INSERT INTO Supplier("Supplier_ID", "Supplier_Name","Supplier_Address", "Supplier_Phone")'
        . ' VALUES(:id,:name,:address,:phone)';
        //'$_POST[id]','$_POST[name]','$_POST[address]','$_POST[phone]'
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $_POST[id]);
    $stmt->bindParam(':name', $_POST[name]);
    $stmt->bindParam(':address', $_POST[address]);
    $stmt->bindParam(':phone', $_POST[phone]);
    //$stmt->execute();
    if (is_null($_POST[id])) {
        echo "Supplier ID must be not null";
    } else {
        if ($stmt->execute() == TRUE) {
            echo "Record inserted successfully.";
        } else {
            echo "Error inserting record: ". $sql->errorInfo();
        }
    }
    ?>
</body>

</html>