<?php

require_once "config.php";
$users = "SELECT * FROM users";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-page container-page-edit">
      <div class="table_title table_title-edit">User Information</div>
      <div class="table_header">Name</div>
      <div class="table_header">Last Name</div>
      <div class="table_header">Address</div>
      <div class="table_header">Telephone</div>
      <div class="table_header">Option</div>

      <?php $result = $connection->query($users);
while ($row = $result->fetch_assoc()) {
    ?>

        <div class="table_item"><?php echo $row['name'] ?></div>
        <div class="table_item"><?php echo $row['lastName'] ?></div>
        <div class="table_item"><?php echo $row['address'] ?></div>
        <div class="table_item"><?php echo $row['telephone'] ?></div>
        <div class="table_item">
            <a href="modifyForm.php?id=<?php echo $row['id_user'] ?>" class="table_item_link">Modify</a> |
            <a href="delete.php?id=<?php echo $row['id_user'] ?>" class="table_item_link">Delete</a>
        </div>
        <?php }
$result->free();?>
    </div>
    <a class="link_home" href="home.php">Home</a>
</body>
</html>