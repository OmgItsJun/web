<!DOCTYPE html>
<html>
<head>
  <title>Supply Chain Management</title>
  <link rel="stylesheet" type="text/css" href="SAS.css">
</head>
<body>
  <h1>Warehouse Inventory</h1>
  <form action="process.php" method="POST">
    <label for="productname">Product Name:</label>
    <input type="text" name="productname" required><br>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required><br>
    <label for="price">Price:</label>
    <input type="text" name="price" required><br>
    <input type="submit" value="Add Product">
  </form>
  
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
    </tr>
    <?php include 'display.php'; ?>
  </table>
</body>
</html>
