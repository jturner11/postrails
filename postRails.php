<!DOCTYPE html>
<html>
<head>
    <title>POST AND RAILS</title>
</head>
<body>

    <h1>Post and rails calculator</h1>
    <p> Specify the amount of post of railings to calculate the length of your fence</p>
    <form action="postRails.php" method="post">
            number of posts:<br>
        <input type="text" name="posts"><br>
            rails:<br>
        <input type="text" name="rails">
        <input type="submit" name="submit">
    </form>
    <?php
        require("functions.php");
    ?>
</body>
</html>