<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<style>
    li {
        list-style: none;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
    <div class="row justify-content-center">
        <div class="col-9">
            <h1>Update to the database</h1>
            <ul>
                <form name="UpdateData" action="UpdateData.php" method="POST">
                    <li>Supplier ID:</li>
                    <li><input type="text" name="id" id= /></li>
                    <li>Name:</li>
                    <li><input type="text" name="name" id="name" /></li>
                    <li>Address:</li>
                    <li><input type="text" name="address" id="Address" /></li>
                    <li>Phone:</li>
                    <li><input type="text" name="phone" id="phone" /></li>
                    <li><input type="submit" onclick="true" /></li>
                </form>

            </ul>
            <div class="row">
                <div class="col-12">
                  <button type="button" class="btn btn-info"><a href="InsertData.php" class="myButton pl-3">Insert data to the database</a></button>
                  <button type="button" class="btn btn-warning"><a href="ConnectToDB.php" class="myButton pl-3">View Data</a></button>
                  <button type="button" class="btn btn-danger"><a href="DeleteData.php" class="myButton pl-3">Delete data to the database</a></button>
                </div>
            </div>
        </div>
    </div>
    <?php
    // ini_set('display_errors', 1);
    // echo "Update database!";
    ?>

    <?php


    $pdo = new PDO("pgsql:dbname=dbrdj5ncji5jht;host=ec2-174-129-227-51.compute-1.amazonaws.com","mcgukeefumpzju", "a7a1360fc5b23a76cb0614c11b07e6dbf69f9604c8b5dacec301037c53c44236" );

    //$sql = 'UPDATE student '
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
    $sql = "UPDATE student SET fname = '$_POST[fname]', email = '$_POST[email]', classname = '$_POST[classname]'
        WHERE stuid = '$_POST[stuid]'";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute() == TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record. ";
    }

    ?>
</body>

</html>