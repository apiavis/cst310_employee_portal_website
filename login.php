<?php
    error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php require 'master.php';?>

    <div class="container text-center">
        <h1>Welcome to the Login Page</h1>
    </div>
    <div class="container">
        <form class="padding-top" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-row">
                <div class="form-group col-md-12" id="no-padding-left">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" autocomplete="off" name="email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12" id="no-padding-left">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" autocomplete="off" name="password" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email = test_input($_POST["email"]);
                    $password = test_input($_POST["password"]);
                }
                  
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                // $_SESSION['username'] = "Alicia"
                
                echo $email;
                echo $password;

                // if ($_POST != array()) {
                //     $submitDataQuery = "INSERT INTO `tblUser` (email, password, firstName, lastName, address, phone, salary, SSN) 
                //     VALUES ('$email', '$password', '$firstName', '$lastName', '$address', '$phone', '$salary', '$SSN')";
                //     $newConnection->executeQuery($newConnection->connection,$submitDataQuery);
                // }
                
            ?>
        </form>
    </div>
<?php require_once 'footer.php';?>
</body>
</html>