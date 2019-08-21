<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
  body {
    width: 100%;
    height: 100%;
    background: url(gun.png) no-repeat;
    background-size: cover;
  }

  p {
    text-align: center;
  }
</style>
</head>
<body>
    <div class="row justify-content-center">
            <div class="col-9">
              <h1>Database For Store</h1>

              <?php
               ini_set('display_errors', 1);

              ?>

              <?php
                echo '<p>The DB exists</p>';
                echo getenv("dbname");
                $pdo = new PDO("pgsql:dbname=d6h89lsnl3a8d4;host=ec2-107-22-238-217.compute-1.amazonaws.com","vpfgbbzvnyifkc", "987a9247716d140d93d1fbec9ca96c2715d76597779e58c0cc4e8871688c1364" );
                if ($pdo === false) {
                  echo "ERROR: Could not connect Database";
                }
                $sql = 'SELECT * FROM public."Supplier"';
                $stmt = $pdo->prepare($sql);
                //Thiết lập kiểu dữ liệu trả về
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $resultSet = $stmt->fetchAll();
                echo '<p>Supplier Information:</p>';
              ?>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($resultSet as $key => $value) : ?>
                      <tr class="odd gradeX">
                        <td><?php echo $value['Supplier_ID']; ?></td>
                        <td><?php echo $value['Supplier_Name']; ?></td>
                        <td><?php echo $value['Supplier_Address']; ?></td>
                        <td><?php echo $value['Supplier_Phone']; ?></td>
                      </tr>
                    <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="button" class="btn btn-info"><a href="InsertData.php" class="myButton pl-3">Insert data to the database</a></button>
                  <button type="button" class="btn btn-warning"><a href="UpdateData.php" class="myButton pl-3">Update data to the database</a></button>
                  <button type="button" class="btn btn-danger"><a href="DeleteData.php" class="myButton pl-3">Delete data to the database</a></button>
                </div>
              </div>
            </div>
        </div>
</body>

</html>