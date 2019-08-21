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
              $db = parse_url(getenv("DATABASE_URL"));
                $pdo = new PDO("pgsql:". sprintf(
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
                if ($pdo === false) {
                  echo "ERROR: Could not connect Database";
                }
                $sql = 'SELECT * FROM public.Product';
                $stmt = $pdo->prepare($sql);
                //Thiết lập kiểu dữ liệu trả về
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $resultSet = $stmt->fetchAll();
                echo '<p>Product Information:</p>';
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
                        <td><?php echo $value['productID']; ?></td>
                        <td><?php echo $value['Productname']; ?></td>
                        <td><?php echo $value['Shopname']; ?></td>
                        <td><?php echo $value['Price']; ?></td>
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