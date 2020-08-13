<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <h2 class="container_title">Insert Information</h2>
    <div class="container-page container-page-add">
        <form action="insert.php" method="post">
            <label for="">First Name</label>
            <input type="text" class="container_input" name="name" />
            <label for="">Last Name</label>
            <input type="text" class="container_input" name="lname" />
            <label for="">Address</label>
            <input type="text" class="container_input" name="address" />
            <label for="">Telephone</label>
            <input type="text" class="container_input" name="telephone" />
            <input type="submit" value="Insert" class="container_submit">
        </form>
    </div>
</body>
</html>
