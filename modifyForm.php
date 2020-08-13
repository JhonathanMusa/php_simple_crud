<?php

require_once "config.php";
$id = $_GET['id'];
$users = "SELECT * FROM users  WHERE user_id = '$id'";

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

<form class="container-table container-table-edit" action="actionUpdate.php" method="post">
      <div class="table_title table_title-edit ">User Information</div>
      <div class="table_header">Name</div>
      <div class="table_header">Last Name</div>
      <div class="table_header">Address</div>
      <div class="table_header">Telephone</div>
      <div class="table_header">Option</div>

      <?php $result = $connection->query($users);
while ($row = $result->fetch_assoc()) {
    ?>

        <input type="hidden" class="table_item" value="<?php echo $row['name'] ?>" name="id">
        <input typwe="text" class="table_item" value="<?php echo $row['name'] ?>" name="name">
        <input typwe="text" class="table_item" value="<?php echo $row['lastName'] ?>" name="lname">
        <input typwe="text" class="table_item" value="<?php echo $row['address'] ?>" name="address">
        <input typwe="number" class="table_item" value="<?php echo $row['telephone'] ?>" name="telephone">
        <?php }
$result->free();?>
<input type="submit" value="Actualizar" class="container_submit container_submit-actualziar">
    </form>
</body>
</html>