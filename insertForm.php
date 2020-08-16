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
    <h2>Insert Information</h2>
    <div class="container-page-insert">
        <form action="actionInsert.php" method="post">
            <label for="">First Name</label><br>
            <input type="text" class="container_input" name="name" /><br>
            <label for="">Last Name</label><br>
            <input type="text" class="container_input" name="lname" /><br>
            <label for="">Address</label><br>
            <input type="text" class="container_input" name="address" /><br>
            <label for="">Telephone</label><br>
            <input type="text" class="container_input" name="telephone" /><br>
            <input type="submit" value="Done!" class="container_submit_insert">
        </form>
    </div>
    <a class="link_home" href="home.php">Home</a>
</body>
</html>
