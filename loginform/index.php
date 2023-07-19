<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

<div>
    <?php
        if(isset($_POST['create'])){
            $firstname      = $_POST['firstname'];
            $description    = $_POST['description'];
            $price          = $_POST['price'];

            $sql = "INSERT INTO users (firstname, description, price) VALUES(?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $description, $price]);

            if($result){
                echo "Successful";
            }else{
                echo "Error";
            }
        }
    ?>
</div>

<div>
    <form action="index.php" method="post">
        <div>
            <h1>Login</h1>

            <label for="firstname"><b>Firstname</b></label>
            <input type="text" name="firstname" required>

            <label for="description"><b>Description</b></label>
            <input type="text" name="description" required>

            <label for="price"><b>Price</b></label>
            <input type="number" name="price" required>

            <input type="submit" name="create" value="Sign In">
        </div>
    </form>
</div>
    
</body>
</html>