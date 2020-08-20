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
        <form action="actionInsert.php" method="post" name="insertForm" >
            <label for="">First Name</label><br>
            <input type="text" class="container_input" name="fname" /><br>
            <label for="">Last Name</label><br>
            <input type="text" class="container_input" name="lname" /><br>
            <label for="">Address</label><br>
            <input type="text" class="container_input" name="address" /><br>
            <label for="">Telephone</label><br>
            <input type="text" class="container_input" name="telephone" /><br>
            <input type="submit" value="Done!" class="container_submit_insert" id="btn">
        </form>
    </div>
    <a class="link_home" href="home.php">Home</a>
    <script src="confirm.js"></script>
</body>
</html>
